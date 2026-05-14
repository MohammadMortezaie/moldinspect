<?php
declare(strict_types=1);

$siteName = 'Mold Inspection Vancouver';
$siteUrl = 'https://moldinspectionvancouver.ca';
$phoneDisplay = '604-800-3900';
$phoneHref = 'tel:+16048003900';

$pageTitle = $pageTitle ?? $siteName . ' | (604) 800-3900';
$pageDescription = $pageDescription ?? 'Certified mold inspection, mold testing, and air quality testing in Vancouver. Call 604-800-3900.';
$pageCanonicalPath = $pageCanonicalPath ?? '/';
$pageCanonicalUrl = $siteUrl . $pageCanonicalPath;
$pageOgTitle = $pageOgTitle ?? $pageTitle;
$pageOgDescription = $pageOgDescription ?? $pageDescription;
$activePage = $activePage ?? '';
$extraHead = $extraHead ?? '';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function active_class(string $page, string $activePage): string
{
    return $page === $activePage ? ' active' : '';
}
?>
<!doctype html>
<html lang="en-CA">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($pageTitle) ?></title>
  <meta name="description" content="<?= e($pageDescription) ?>">
  <meta name="robots" content="index, follow, max-image-preview:large">
  <link rel="canonical" href="<?= e($pageCanonicalUrl) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= e($pageCanonicalUrl) ?>">
  <meta property="og:title" content="<?= e($pageOgTitle) ?>">
  <meta property="og:description" content="<?= e($pageOgDescription) ?>">
  <meta property="og:locale" content="en_CA">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="google-site-verification" content="EcdAsfbwFjUVdRAt2KA6Ihde9LrEjXrjhsRpnHpt8gQ">
  <meta name="theme-color" content="#1f6b4d">
  <link rel="icon" type="image/png" href="/assets/logo.png">
  <link rel="apple-touch-icon" href="/assets/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-65RZ9RG6R7"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-65RZ9RG6R7');
  </script>
  <?= $extraHead ?>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top py-3" aria-label="Main navigation">
      <div class="container">
        <a class="navbar-brand" href="/" aria-label="Mold Inspection Vancouver home">
          <img class="site-logo" src="/assets/logo.svg" alt="Mold Inspection Vancouver">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2 mt-3 mt-lg-0">
            <li class="nav-item"><a class="nav-link<?= active_class('home', $activePage) ?>" href="/">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle<?= active_class('services', $activePage) ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/mold-testing-vancouver/">Mold Testing</a></li>
                <li><a class="dropdown-item" href="/mold-detection-vancouver/">Mold Detection</a></li>
                <li><a class="dropdown-item" href="/black-mold-inspection-vancouver/">Black Mold Inspection</a></li>
                <li><a class="dropdown-item" href="/attic-mold-inspection-vancouver/">Attic Mold Inspection</a></li>
                <li><a class="dropdown-item" href="/crawl-space-mold-inspection-vancouver/">Crawl Space Mold Inspection</a></li>
                <li><a class="dropdown-item" href="/condo-mold-inspection-vancouver/">Condo Mold Inspection</a></li>
                <li><a class="dropdown-item" href="/commercial-mold-inspection-vancouver/">Commercial Mold Inspection</a></li>
                <li><a class="dropdown-item" href="/air-quality-testing-vancouver/">Air Quality Testing</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link<?= active_class('about', $activePage) ?>" href="/about/">About</a></li>
            <li class="nav-item"><a class="nav-link<?= active_class('contact', $activePage) ?>" href="/contact/">Contact</a></li>
            <li class="nav-item"><a class="btn btn-primary-custom" href="<?= e($phoneHref) ?>"><i class="bi bi-telephone-fill me-2"></i><?= e($phoneDisplay) ?></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
