<?php
declare(strict_types=1);

$pageTitle = 'Mold Testing Vancouver | (604) 800-3900';
$pageDescription = 'Mold testing in Vancouver with air and surface sampling, lab results, moisture checks, and clear reports. Call 604-800-3900 for same-day availability.';
$pageCanonicalPath = '/mold-testing-vancouver/';
$pageOgTitle = 'Mold Testing Vancouver';
$pageOgDescription = 'Air and surface mold testing for Vancouver homes, condos, rentals, and businesses.';
$activePage = 'services';
$serviceSeoKey = 'mold-testing';
$rootDir = dirname(__DIR__);
require $rootDir . '/includes/header.php';
?>
<main>
    <section class="page-hero hero"><div class="container"><div class="row align-items-center g-5"><div class="col-lg-7"><div class="eyebrow"><i class="bi bi-droplet-half"></i> Lab-supported mold testing</div><h1>Mold Testing Vancouver</h1><p class="hero-copy mt-3">Air and surface mold testing for homeowners, buyers, landlords, strata councils, and businesses that need documented results and clear interpretation.</p><a class="hero-phone my-3" href="tel:+16048003900">604-800-3900</a><div class="d-grid d-sm-flex gap-3"><a class="btn btn-primary-custom" href="#form">Book Mold Testing</a><a class="btn btn-outline-custom" href="/air-quality-testing-vancouver/">Air Quality Testing</a></div></div><div class="col-lg-5"><div class="hero-card"><img class="service-photo" src="/asset/image/mold-in-kitchen.jpg" alt="Mold testing area in a Vancouver kitchen"></div></div></div></div></section>
    <section class="section-padding"><div class="container"><div class="row g-4"><div class="col-lg-7"><p class="section-kicker">What we test</p><h2 class="section-title">Testing helps confirm what inspection cannot see.</h2><p class="section-text">Mold testing can be useful when there is a musty smell, hidden water damage, health concern, real estate transaction, rental dispute, or post-remediation clearance need. Samples are interpreted with site conditions, not treated as a standalone answer.</p></div><div class="col-lg-5"><div class="warning-box"><ul class="check-list"><li><i class="bi bi-check-circle-fill"></i><span>Air samples for indoor mold spore comparison</span></li><li><i class="bi bi-check-circle-fill"></i><span>Surface samples for visible growth confirmation</span></li><li><i class="bi bi-check-circle-fill"></i><span>Moisture readings and source investigation</span></li><li><i class="bi bi-check-circle-fill"></i><span>Clear report with next steps</span></li></ul></div></div></div></div></section>
    <section class="section-padding soft-section"><div class="container"><div class="row g-4"><div class="col-md-4"><article class="step-card"><div class="step-number">01</div><h3>Inspect</h3><p>We check the home first so samples are taken in the right locations.</p></article></div><div class="col-md-4"><article class="step-card"><div class="step-number">02</div><h3>Sample</h3><p>Air or surface samples are collected depending on the concern.</p></article></div><div class="col-md-4"><article class="step-card"><div class="step-number">03</div><h3>Report</h3><p>You receive findings and practical recommendations.</p></article></div></div></div></section>
<?php require $rootDir . '/includes/service-seo-sections.php'; ?>

    <section id="form" class="section-padding"><div class="container"><div class="row g-5"><div class="col-lg-5"><p class="section-kicker">Book testing</p><h2 class="section-title">Request mold testing in Vancouver.</h2><p class="section-text">For urgent testing, call now.</p><a class="big-call" href="tel:+16048003900">604-800-3900</a></div><div class="col-lg-7"><?php
$formClass = 'contact-card contact-form';
$formButton = 'Request Mold Testing';
require $rootDir . '/includes/contact-form.php';
?></div></div></div></section>
  </main>
<?php
require $rootDir . '/includes/footer.php';
