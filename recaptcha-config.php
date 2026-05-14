<?php

declare(strict_types=1);

header('Content-Type: application/javascript; charset=UTF-8');

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
        }
    }
}

$siteKey = getenv('RECAPTCHA_SITE_KEY') ?: '';

echo 'window.RECAPTCHA_SITE_KEY = ' . json_encode($siteKey, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) . ';';
