<?php
declare(strict_types=1);

$pageTitle = 'Mold Detection Vancouver | (604) 800-3900';
$pageDescription = 'Mold detection in Vancouver for musty odours, hidden moisture, leaks, condensation, and suspected mold. Call 604-800-3900.';
$pageCanonicalPath = '/mold-detection-vancouver/';
$pageOgTitle = 'Mold Detection Vancouver';
$pageOgDescription = 'Find hidden mold and moisture problems in Vancouver homes and properties.';
$activePage = 'services';
$rootDir = dirname(__DIR__);
require $rootDir . '/includes/header.php';
?>
<main>
    <section class="page-hero hero"><div class="container"><div class="row align-items-center g-5"><div class="col-lg-7"><div class="eyebrow"><i class="bi bi-search"></i> Hidden mold and moisture checks</div><h1>Mold Detection Vancouver</h1><p class="hero-copy mt-3">We help locate the moisture, odour, and building conditions that allow mold to grow, even when visible growth is limited or hidden.</p><a class="hero-phone my-3" href="tel:+16048003900">604-800-3900</a><div class="d-grid d-sm-flex gap-3"><a class="btn btn-primary-custom" href="#form">Book Detection Visit</a><a class="btn btn-outline-custom" href="/mold-testing-vancouver/">Add Mold Testing</a></div></div><div class="col-lg-5"><div class="hero-card"><img class="service-photo" src="/asset/image/mold-in-corner-vancouver.jpg" alt="Mold detected in a Vancouver home corner"></div></div></div></div></section>
    <section class="section-padding"><div class="container"><div class="row g-4"><div class="col-lg-7"><p class="section-kicker">Detection approach</p><h2 class="section-title">Good mold detection starts with moisture.</h2><p class="section-text">Musty smells, stains, condensation, leaks, and damp materials are clues. We inspect common problem areas including bathrooms, basements, windows, exterior walls, attics, closets, and plumbing zones.</p></div><div class="col-lg-5"><div class="warning-box"><ul class="warning-list"><li><i class="bi bi-exclamation-triangle-fill"></i><span>Musty odour with no visible mold</span></li><li><i class="bi bi-exclamation-triangle-fill"></i><span>Water stains or bubbling paint</span></li><li><i class="bi bi-exclamation-triangle-fill"></i><span>Condensation around windows</span></li><li><i class="bi bi-exclamation-triangle-fill"></i><span>Recurring mold after cleaning</span></li></ul></div></div></div></div></section>
    <section class="section-padding soft-section"><div class="container"><div class="row g-4"><div class="col-md-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-moisture"></i></span><h3>Moisture Readings</h3><p>Check materials where leaks and condensation are suspected.</p></article></div><div class="col-md-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-thermometer-half"></i></span><h3>Thermal Clues</h3><p>Look for patterns that may indicate hidden damp areas.</p></article></div><div class="col-md-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-clipboard2-check"></i></span><h3>Clear Findings</h3><p>Receive practical next steps for testing, repair, or remediation.</p></article></div></div></div></section>
    <section id="form" class="section-padding"><div class="container"><div class="row g-5"><div class="col-lg-5"><p class="section-kicker">Book now</p><h2 class="section-title">Request mold detection in Vancouver.</h2><a class="big-call" href="tel:+16048003900">604-800-3900</a></div><div class="col-lg-7"><?php
$formClass = 'contact-card contact-form';
$formButton = 'Request Mold Detection';
require $rootDir . '/includes/contact-form.php';
?></div></div></div></section>
  </main>
<?php
require $rootDir . '/includes/footer.php';
