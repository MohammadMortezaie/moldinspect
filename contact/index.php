<?php
declare(strict_types=1);

$pageTitle = 'Contact Mold Inspection Vancouver | (604) 800-3900';
$pageDescription = 'Contact Mold Inspection Vancouver to book certified mold inspection, mold testing, air quality testing, and moisture detection. Call 604-800-3900.';
$pageCanonicalPath = '/contact/';
$pageOgTitle = 'Contact Mold Inspection Vancouver';
$pageOgDescription = 'Book mold inspection or testing in Vancouver.';
$activePage = 'contact';
$rootDir = dirname(__DIR__);
require $rootDir . '/includes/header.php';
?>
<main>
    <section class="page-hero hero"><div class="container"><div class="row align-items-center g-5"><div class="col-lg-6"><div class="eyebrow"><i class="bi bi-telephone-fill"></i> Fast response</div><h1>Contact Mold Inspection Vancouver</h1><p class="hero-copy mt-3">Call now for urgent mold concerns, or send the form and we will follow up about inspection availability.</p><a class="hero-phone my-3" href="tel:+16048003900">604-800-3900</a><div class="d-grid d-sm-flex gap-3"><a class="btn btn-primary-custom" href="tel:+16048003900">Call Now</a><a class="btn btn-outline-custom" href="#contact-form">Send Form</a></div></div><div class="col-lg-6"><div class="contact-card"><h2 class="h3 mb-4">Book an Inspection</h2><?php
$formId = 'contact-form';
$formClass = 'contact-form';
$formButton = 'Request Inspection';
require $rootDir . '/includes/contact-form.php';
?></div></div></div></div></section>
    <section class="section-padding"><div class="container"><div class="row g-4"><div class="col-md-3"><div class="plain-card"><span class="icon-pill"><i class="bi bi-telephone-fill"></i></span><h2 class="h4 mt-3">Phone</h2><p><a class="fw-bold" href="tel:+16048003900">604-800-3900</a></p></div></div><div class="col-md-3"><div class="plain-card"><span class="icon-pill"><i class="bi bi-envelope-fill"></i></span><h2 class="h4 mt-3">Email</h2><p><a class="fw-bold" href="mailto:info@vrrestoration.ca">info@vrrestoration.ca</a></p></div></div><div class="col-md-3"><div class="plain-card"><span class="icon-pill"><i class="bi bi-geo-alt-fill"></i></span><h2 class="h4 mt-3">Area</h2><p>Vancouver, West Vancouver, North Vancouver, Burnaby, and Coquitlam, BC</p></div></div><div class="col-md-3"><div class="plain-card"><span class="icon-pill"><i class="bi bi-clock-fill"></i></span><h2 class="h4 mt-3">Hours</h2><p>Daily 7:00 AM - 9:00 PM</p></div></div></div></div></section>
  </main>
<?php
require $rootDir . '/includes/footer.php';
