<?php
declare(strict_types=1);

$pageTitle = 'Air Quality Testing Vancouver | (604) 800-3900';
$pageDescription = 'Air quality testing in Vancouver for mold spores, musty odours, indoor air concerns, and post-remediation clearance. Call 604-800-3900.';
$pageCanonicalPath = '/air-quality-testing-vancouver/';
$pageOgTitle = 'Air Quality Testing Vancouver';
$pageOgDescription = 'Indoor air quality and mold air testing for Vancouver homes and properties.';
$activePage = 'services';
$rootDir = dirname(__DIR__);
require $rootDir . '/includes/header.php';
?>
<main>
    <section class="page-hero hero"><div class="container"><div class="row align-items-center g-5"><div class="col-lg-7"><div class="eyebrow"><i class="bi bi-wind"></i> Indoor air and mold spore testing</div><h1>Air Quality Testing Vancouver</h1><p class="hero-copy mt-3">Indoor air quality testing helps investigate musty odours, suspected hidden mold, post-remediation clearance, and occupant concerns in Vancouver homes and properties.</p><a class="hero-phone my-3" href="tel:+16048003900">604-800-3900</a><div class="d-grid d-sm-flex gap-3"><a class="btn btn-primary-custom" href="#form">Book Air Testing</a><a class="btn btn-outline-custom" href="/mold-testing-vancouver/">Mold Testing</a></div></div><div class="col-lg-5"><div class="hero-card"><img class="service-photo" src="/asset/image/mold-wall.jpg" alt="Wall mold related to indoor air quality concerns"></div></div></div></div></section>
    <section class="section-padding"><div class="container"><div class="row g-4"><div class="col-lg-7"><p class="section-kicker">Air quality</p><h2 class="section-title">Air testing can help when mold is not visible.</h2><p class="section-text">Air samples compare indoor conditions against outdoor baseline conditions. Results are most useful when paired with inspection notes, moisture readings, and a clear understanding of the building.</p></div><div class="col-lg-5"><div class="warning-box"><ul class="check-list"><li><i class="bi bi-check-circle-fill"></i><span>Musty odours with no obvious source</span></li><li><i class="bi bi-check-circle-fill"></i><span>Hidden moisture concerns</span></li><li><i class="bi bi-check-circle-fill"></i><span>Post-remediation clearance support</span></li><li><i class="bi bi-check-circle-fill"></i><span>Home buying or rental documentation</span></li></ul></div></div></div></div></section>
    <section id="form" class="section-padding soft-section"><div class="container"><div class="row g-5"><div class="col-lg-5"><p class="section-kicker">Schedule</p><h2 class="section-title">Request air quality testing.</h2><a class="big-call" href="tel:+16048003900">604-800-3900</a></div><div class="col-lg-7"><?php
$formClass = 'contact-card contact-form';
$formButton = 'Request Air Quality Testing';
require $rootDir . '/includes/contact-form.php';
?></div></div></div></section>
  </main>
<?php
require $rootDir . '/includes/footer.php';
