<?php

declare(strict_types=1);

// Load variables from .env if present (cPanel can still override via real environment vars).
$envPath = __DIR__ . '/.env';
if (is_readable($envPath)) {
    $envLines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];
    foreach ($envLines as $envLine) {
        $envLine = trim($envLine);
        if ($envLine === '' || substr($envLine, 0, 1) === '#') {
            continue;
        }

        $pair = explode('=', $envLine, 2);
        if (count($pair) !== 2) {
            continue;
        }

        $envKey = trim($pair[0]);
        $envValue = trim($pair[1]);

        if ($envKey === '') {
            continue;
        }

        $first = substr($envValue, 0, 1);
        $last = substr($envValue, -1);
        if (($first === '"' && $last === '"') || ($first === "'" && $last === "'")) {
            $envValue = substr($envValue, 1, -1);
        }

        if (getenv($envKey) === false) {
            putenv($envKey . '=' . $envValue);
            $_ENV[$envKey] = $envValue;
            $_SERVER[$envKey] = $envValue;
        }
    }
}

// Recommended: set RECAPTCHA_SECRET, CONTACT_EMAIL, and CONTACT_FROM_EMAIL in cPanel environment.
$recaptchaSecret = getenv('RECAPTCHA_SECRET') ?: '';
$contactEmail = getenv('CONTACT_EMAIL') ?: 'moemortezaei@gmail.com';
$fromEmail = getenv('CONTACT_FROM_EMAIL') ?: 'do-not-reply@webpulse.ca';
$defaultRedirectBase = '/contact/';
$redirectBase = $defaultRedirectBase;

function sanitize_redirect_base(string $value, string $fallback): string
{
    if ($value === '' || preg_match('/[\r\n]/', $value)) {
        return $fallback;
    }

    $parts = parse_url($value);
    if (!is_array($parts)) {
        return $fallback;
    }

    if (isset($parts['scheme']) || isset($parts['host'])) {
        return $fallback;
    }

    $path = (string) ($parts['path'] ?? '');
    if ($path === '' || substr($path, 0, 1) !== '/') {
        return $fallback;
    }

    if (!preg_match('#^/[A-Za-z0-9/_-]*$#', $path)) {
        return $fallback;
    }

    return $path === '' ? '/' : $path;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . $redirectBase);
    exit;
}

$redirectBase = sanitize_redirect_base(
    trim((string) ($_POST['redirect_to'] ?? '')),
    $defaultRedirectBase
);

function redirect_with_error(string $base): void
{
    header('Location: ' . $base . '?error=1');
    exit;
}

if (!empty($_POST['website'] ?? '')) {
    redirect_with_error($redirectBase);
}

$name = trim((string) ($_POST['name'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$city = trim((string) ($_POST['city'] ?? ''));
$service = trim((string) ($_POST['service'] ?? ''));
$urgency = trim((string) ($_POST['urgency'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));
$token = trim((string) ($_POST['recaptcha_token'] ?? ''));

if ($name === '' || $phone === '' || $token === '') {
    redirect_with_error($redirectBase);
}

$postData = http_build_query([
    'secret' => $recaptchaSecret,
    'response' => $token,
    'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
]);

$verifyResponse = '';

if (function_exists('curl_init')) {
    $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 8,
    ]);
    $verifyResponse = (string) curl_exec($ch);
    curl_close($ch);
} else {
    $opts = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'content' => $postData,
            'timeout' => 8,
        ]
    ];
    $context = stream_context_create($opts);
    $verifyResponse = (string) file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
}

$verifyJson = json_decode($verifyResponse, true);
$verified = is_array($verifyJson)
    && !empty($verifyJson['success'])
    && ($verifyJson['action'] ?? '') === 'contact_form_submit'
    && (float) ($verifyJson['score'] ?? 0) >= 0.5;

if (!$verified) {
    redirect_with_error($redirectBase);
}

$subject = 'Mold Inspection Vancouver - New Form Submission';

$clean = static function (string $value): string {
    $value = str_replace(["\r", "\n"], ' ', $value);
    return trim($value);
};

$emailBody = "New Mold Inspection Vancouver form submission:\n\n"
    . 'Name: ' . $clean($name) . "\n"
    . 'Phone: ' . $clean($phone) . "\n"
    . 'Email: ' . $clean($email) . "\n"
    . 'City: ' . $clean($city) . "\n"
    . 'Service: ' . $clean($service) . "\n"
    . 'Urgency: ' . $clean($urgency) . "\n"
    . "Message:\n"
    . ($message === '' ? 'No message provided.' : $message) . "\n";

$headers = [
    'From: ' . $fromEmail,
    'Reply-To: ' . ($email !== '' ? $clean($email) : $fromEmail),
    'Content-Type: text/plain; charset=UTF-8',
];

$sent = @mail($contactEmail, $subject, $emailBody, implode("\r\n", $headers));

if (!$sent) {
    redirect_with_error($redirectBase);
}

header('Location: ' . $redirectBase . '?sent=1');
exit;
