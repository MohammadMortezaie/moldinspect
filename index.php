<?php
declare(strict_types=1);

$pageTitle = 'Mold Inspection Vancouver BC | Certified Mold Testing & Reports';
$pageDescription = 'Certified mold inspection in Vancouver BC for homes, condos, rentals, and businesses. Moisture checks, mold testing, air quality testing, photos, and clear reports. Call 604-800-3900.';
$pageCanonicalPath = '/';
$pageOgTitle = 'Mold Inspection Vancouver BC | Certified Mold Testing';
$pageOgDescription = 'Mold inspection, mold testing, moisture detection, and air quality testing for Vancouver homes, condos, rentals, and businesses.';
$activePage = 'home';
$extraHead = <<<'HTML'
<script type="application/ld+json">
    {"@context":"https://schema.org","@graph":[{"@type":["LocalBusiness","HomeAndConstructionBusiness"],"@id":"https://moldinspectionvancouver.ca/#business","name":"Mold Inspection Vancouver","url":"https://moldinspectionvancouver.ca/","telephone":"+1-604-800-3900","email":"info@moldinspectionvancouver.ca","image":"https://moldinspectionvancouver.ca/assets/logo.png","logo":"https://moldinspectionvancouver.ca/assets/logo.png","address":{"@type":"PostalAddress","streetAddress":"Serving Metro Vancouver","addressLocality":"Vancouver","addressRegion":"BC","addressCountry":"CA"},"areaServed":[{"@type":"City","name":"Vancouver"},{"@type":"City","name":"West Vancouver"},{"@type":"City","name":"North Vancouver"},{"@type":"City","name":"Burnaby"},{"@type":"City","name":"Coquitlam"},{"@type":"AdministrativeArea","name":"Metro Vancouver"}],"priceRange":"$$","description":"Certified mold inspection, mold testing, air quality testing, thermal imaging, moisture detection, and post-remediation testing in Vancouver and Metro Vancouver.","openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"07:00","closes":"21:00"}],"hasOfferCatalog":{"@type":"OfferCatalog","name":"Mold inspection services in Vancouver","itemListElement":[{"@type":"Offer","itemOffered":{"@type":"Service","name":"Mold Inspection Vancouver","areaServed":"Vancouver, BC","serviceType":"Mold inspection"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Mold Testing Vancouver","areaServed":"Vancouver, BC","serviceType":"Mold testing"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Air Quality Testing Vancouver","areaServed":"Vancouver, BC","serviceType":"Indoor air quality testing"}},{"@type":"Offer","itemOffered":{"@type":"Service","name":"Black Mold Inspection Vancouver","areaServed":"Vancouver, BC","serviceType":"Black mold inspection"}}]}},{"@type":"WebSite","@id":"https://moldinspectionvancouver.ca/#website","url":"https://moldinspectionvancouver.ca/","name":"Mold Inspection Vancouver","publisher":{"@id":"https://moldinspectionvancouver.ca/#business"}},{"@type":"FAQPage","@id":"https://moldinspectionvancouver.ca/#faq","mainEntity":[{"@type":"Question","name":"What does a mold inspection include in Vancouver?","acceptedAnswer":{"@type":"Answer","text":"A mold inspection checks visible growth, musty odours, moisture conditions, leak history, condensation patterns, attics, crawl spaces, bathrooms, kitchens, exterior walls, and other risk areas. Testing can be added when documentation or lab confirmation is useful."}},{"@type":"Question","name":"Do I need mold testing or just an inspection?","acceptedAnswer":{"@type":"Answer","text":"Many homes start with inspection because mold is usually caused by moisture. Air or surface testing is useful when mold is hidden, a report is needed for a buyer, tenant, strata, or property manager, or post-remediation clearance is required."}},{"@type":"Question","name":"How quickly should I book after water damage?","acceptedAnswer":{"@type":"Answer","text":"Book quickly after leaks, floods, roof issues, or plumbing failures. Damp porous materials can support mold growth when moisture is not corrected, and early inspection helps define drying, repair, testing, and remediation needs."}},{"@type":"Question","name":"Do you inspect condos, rentals, and strata properties?","acceptedAnswer":{"@type":"Answer","text":"Yes. Mold inspections are available for Vancouver houses, condos, apartments, rentals, strata units, commercial spaces, and managed properties with documentation that can be shared with owners, tenants, strata councils, or property managers."}}]}]}
  </script>
HTML;
$rootDir = __DIR__;
require $rootDir . '/includes/header.php';
?>
<main>
    <section class="hero">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-8">
            <div class="eyebrow"><i class="bi bi-check-circle-fill"></i> Same-day mold inspection in Vancouver</div>
            <h1>Mold Inspection Vancouver BC</h1>
            <p class="hero-copy mt-3">Certified mold inspection, mold testing, moisture detection, air quality testing, photos, and clear reporting for Vancouver homes, condos, rentals, and businesses.</p>
            <a class="hero-phone my-3" href="tel:+16048003900"><i class="bi bi-telephone-fill fs-2"></i>604-800-3900</a>
            <div class="d-grid d-sm-flex gap-3">
              <a class="btn btn-primary-custom" href="#hero-card"><i class="bi bi-calendar2-check me-2"></i>Book Inspection</a>
              <a class="btn btn-outline-custom" href="/mold-testing-vancouver/"><i class="bi bi-droplet-half me-2"></i>Mold Testing</a>
            </div>
            <div class="row g-3 mt-4">
              <div class="col-6 col-md-3"><div class="trust-item"><i class="bi bi-award"></i><span>IICRC Certified</span></div></div>
              <div class="col-6 col-md-3"><div class="trust-item"><i class="bi bi-clock"></i><span>Fast Response</span></div></div>
              <div class="col-6 col-md-3"><div class="trust-item"><i class="bi bi-file-earmark-text"></i><span>Clear Reports</span></div></div>
              <div class="col-6 col-md-3"><div class="trust-item"><i class="bi bi-geo-alt"></i><span>Local Team</span></div></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div id="hero-card" class="hero-card">
              <img class="service-photo" src="/asset/image/inspecting-mold.jpg" alt="Mold inspector checking a Vancouver home">
              <?php
$formClass = 'quick-form contact-form';
$formTitle = 'Request a Call Back';
$formButton = 'Send Request';
$messagePlaceholder = 'Tell us what you found and where you noticed it.';
require $rootDir . '/includes/contact-form.php';
?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="trust-strip" aria-label="Service highlights">
      <div class="container">
        <div class="row">
          <div class="col-md-3"><div class="trust-item"><i class="bi bi-house-check"></i><span>Homes, condos, rentals</span></div></div>
          <div class="col-md-3"><div class="trust-item"><i class="bi bi-moisture"></i><span>Moisture source checks</span></div></div>
          <div class="col-md-3"><div class="trust-item"><i class="bi bi-wind"></i><span>Air quality testing</span></div></div>
          <div class="col-md-3"><div class="trust-item"><i class="bi bi-clipboard2-pulse"></i><span>Lab results available</span></div></div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row align-items-end mb-4 g-4">
          <div class="col-lg-7">
            <p class="section-kicker">Inspection services</p>
            <h2 class="section-title">Everything needed to understand the mold problem clearly.</h2>
          </div>
          <div class="col-lg-5"><p class="section-text mb-0">Mold is usually a moisture problem first. We inspect visible signs, hidden risk areas, and explain what needs testing, cleanup, repair, or monitoring.</p></div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4"><a class="service-card d-block" href="/mold-testing-vancouver/"><span class="icon-pill"><i class="bi bi-droplet-half"></i></span><h3>Mold Testing Vancouver</h3><p>Air and surface sampling when lab confirmation helps you make the right decision.</p></a></div>
          <div class="col-md-6 col-lg-4"><a class="service-card d-block" href="/mold-detection-vancouver/"><span class="icon-pill"><i class="bi bi-search"></i></span><h3>Mold Detection Vancouver</h3><p>Find moisture, odours, and hidden conditions before damage spreads.</p></a></div>
          <div class="col-md-6 col-lg-4"><a class="service-card d-block" href="/black-mold-inspection-vancouver/"><span class="icon-pill"><i class="bi bi-exclamation-triangle"></i></span><h3>Black Mold Inspection</h3><p>Urgent inspection for dark growth, water damage, and high-concern contamination.</p></a></div>
          <div class="col-md-6 col-lg-4"><a class="service-card d-block" href="/attic-mold-inspection-vancouver/"><span class="icon-pill"><i class="bi bi-house-up"></i></span><h3>Attic Mold Inspection</h3><p>Check roof sheathing, ventilation, insulation, bathroom fans, and condensation patterns.</p></a></div>
          <div class="col-md-6 col-lg-4"><a class="service-card d-block" href="/crawl-space-mold-inspection-vancouver/"><span class="icon-pill"><i class="bi bi-layers"></i></span><h3>Crawl Space Mold Inspection</h3><p>Inspect damp crawl spaces, musty odours, vapour barriers, and wood framing.</p></a></div>
          <div class="col-md-6 col-lg-4"><a class="service-card d-block" href="/air-quality-testing-vancouver/"><span class="icon-pill"><i class="bi bi-wind"></i></span><h3>Air Quality Testing</h3><p>Indoor air sampling for mold spores and indoor air quality concerns.</p></a></div>
        </div>
      </div>
    </section>

    <section class="section-padding soft-section">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <p class="section-kicker">Mold inspection Vancouver</p>
            <h2 class="section-title">A complete mold inspection finds the source, not just the stain.</h2>
            <p class="section-text">People search for mold inspection in Vancouver when they need a straight answer: is it mold, why is it there, how far has moisture travelled, and what should happen before cleanup or repairs begin?</p>
            <p class="section-text">Our inspection looks at visible growth, moisture readings, leak history, attic and crawl space conditions, window condensation, bathrooms, kitchens, exterior walls, odours, and materials that may need testing or remediation.</p>
            <div class="d-grid d-sm-flex gap-3 mt-4">
              <a class="btn btn-primary-custom" href="/contact/">Book Mold Inspection</a>
              <a class="btn btn-outline-custom" href="/mold-testing-vancouver/">See Testing Options</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row g-4">
              <div class="col-sm-6"><article class="service-card"><span class="icon-pill"><i class="bi bi-moisture"></i></span><h3>Moisture source</h3><p>Leaks, condensation, humidity, and damp materials are checked first because mold returns when the source is missed.</p></article></div>
              <div class="col-sm-6"><article class="service-card"><span class="icon-pill"><i class="bi bi-camera"></i></span><h3>Photo report</h3><p>Photos and plain-language findings help homeowners, buyers, tenants, strata, and managers understand the issue.</p></article></div>
              <div class="col-sm-6"><article class="service-card"><span class="icon-pill"><i class="bi bi-droplet-half"></i></span><h3>Testing options</h3><p>Air and surface samples are available when lab documentation or post-remediation clearance is needed.</p></article></div>
              <div class="col-sm-6"><article class="service-card"><span class="icon-pill"><i class="bi bi-tools"></i></span><h3>Next steps</h3><p>You get practical guidance for drying, repair, containment, cleanup, remediation, or monitoring.</p></article></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding soft-section">
      <div class="container">
        <div class="row g-4 align-items-center">
          <div class="col-lg-6">
            <p class="section-kicker">When to call</p>
            <h2 class="section-title">If you see or smell these signs, inspection is worth it.</h2>
            <p class="section-text">You do not need to know whether it is dangerous before calling. The inspection exists to answer that question and help you avoid guessing.</p>
          </div>
          <div class="col-lg-6">
            <div class="warning-box">
              <ul class="warning-list">
                <li><i class="bi bi-exclamation-triangle-fill"></i><span>Musty smell that returns after cleaning</span></li>
                <li><i class="bi bi-exclamation-triangle-fill"></i><span>Black, green, white, or fuzzy spotting</span></li>
                <li><i class="bi bi-exclamation-triangle-fill"></i><span>Recent leak, flood, roof issue, or plumbing repair</span></li>
                <li><i class="bi bi-exclamation-triangle-fill"></i><span>Condensation around windows or exterior walls</span></li>
                <li><i class="bi bi-exclamation-triangle-fill"></i><span>Buying, selling, renting, or managing a property</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row align-items-end mb-4 g-4">
          <div class="col-lg-7">
            <p class="section-kicker">Local Vancouver inspection needs</p>
            <h2 class="section-title">Common mold inspection calls across Vancouver.</h2>
          </div>
          <div class="col-lg-5">
            <p class="section-text mb-0">Wet winters, older homes, strata buildings, below-grade suites, and sealed interiors create repeat mold patterns in Vancouver properties.</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4"><article class="plain-card"><h3>Basement suites</h3><p>Musty lower-level odours, damp closets, perimeter wall staining, and poor ventilation often need moisture investigation.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="plain-card"><h3>Condos and strata</h3><p>Window condensation, shared plumbing, bathroom exhaust, and neighbouring leaks require clear documentation.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="plain-card"><h3>Post-leak checks</h3><p>After roof, pipe, dishwasher, toilet, or washing machine leaks, inspection helps decide whether testing or remediation is needed.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="plain-card"><h3>Real estate concerns</h3><p>Buyers, sellers, and agents use mold inspection reports to clarify visible growth, odours, and possible hidden damage.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="plain-card"><h3>Attics and roof sheathing</h3><p>Bathroom fan discharge, blocked soffits, air leakage, and roof leaks can create attic mold above finished rooms.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="plain-card"><h3>Commercial spaces</h3><p>Offices, clinics, retail units, and managed properties need timely documentation when occupants report odours or water damage.</p></article></div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row align-items-end mb-4 g-4">
          <div class="col-lg-7">
            <p class="section-kicker">Inspection photo examples</p>
            <h2 class="section-title">Real mold concerns Vancouver homeowners recognize.</h2>
          </div>
          <div class="col-lg-5">
            <p class="section-text mb-0">Use these areas to show your real inspection, attic, wall, kitchen, and remediation photos. Strong local photos help trust and conversions.</p>
          </div>
        </div>
        <div class="row g-4 mb-5">
          <div class="col-md-6 col-lg-4"><div class="image-tile"><img src="/asset/image/mold-in-kitchen.jpg" alt="Mold in a Vancouver kitchen"><span>Kitchen mold inspection</span></div></div>
          <div class="col-md-6 col-lg-4"><div class="image-tile"><img src="/asset/image/mold-attic.jpg" alt="Attic mold in a Vancouver home"><span>Attic mold inspection</span></div></div>
          <div class="col-md-6 col-lg-4"><div class="image-tile"><img src="/asset/image/mold-wall.jpg" alt="Mold on an interior wall"><span>Wall moisture damage</span></div></div>
          <div class="col-md-6 col-lg-4"><div class="image-tile"><img src="/asset/image/mold-roof.jpg" alt="Roof leak and mold concern"><span>Roof leak source checks</span></div></div>
          <div class="col-md-6 col-lg-4"><div class="image-tile"><img src="/asset/image/mold-in-corner-door-vancouver.jpg" alt="Mold near a Vancouver door corner"><span>Condo and doorway mold</span></div></div>
          <div class="col-md-6 col-lg-4"><div class="image-tile"><img src="/asset/image/remove-mold.jpg" alt="Mold remediation preparation"><span>Remediation guidance</span></div></div>
        </div>
        <div class="text-center mx-auto mb-5" style="max-width:760px">
          <p class="section-kicker">Simple process</p>
          <h2 class="section-title">From phone call to clear report.</h2>
          <p class="section-text mx-auto">We reduce stress quickly: inspect the home, identify moisture, test when needed, and explain the next step in plain language.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3"><article class="step-card"><div class="step-number">01</div><h3>Call</h3><p>Tell us what you found, where it is, and how urgent it feels.</p></article></div>
          <div class="col-md-6 col-lg-3"><article class="step-card"><div class="step-number">02</div><h3>Inspect</h3><p>We check visible growth, moisture conditions, odours, and risk areas.</p></article></div>
          <div class="col-md-6 col-lg-3"><article class="step-card"><div class="step-number">03</div><h3>Test</h3><p>Air or surface samples are collected when lab confirmation helps.</p></article></div>
          <div class="col-md-6 col-lg-3"><article class="step-card"><div class="step-number">04</div><h3>Report</h3><p>You get findings, photos, test context, and practical next steps.</p></article></div>
        </div>
      </div>
    </section>

    <section class="section-padding soft-section">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <p class="section-kicker">Mold remediation Vancouver</p>
            <h2 class="section-title">Vancouver mold remediation that stops mold for good.</h2>
            <p class="section-text">Good mold remediation is not just wiping the surface. The moisture source has to be found, affected materials have to be handled correctly, and the home needs a clear plan to prevent the same mold from returning.</p>
            <p class="section-text">Our inspection-first approach helps Vancouver homeowners understand what caused the mold, how far it may have spread, and what remediation steps make sense for the property.</p>
            <div class="d-grid d-sm-flex gap-3 mt-4">
              <a class="btn btn-primary-custom" href="/contact/">Book Mold Inspection</a>
              <a class="btn btn-outline-custom" href="/mold-detection-vancouver/">Mold Detection</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-card">
              <img class="service-photo" src="/asset/image/remove-mold.jpg" alt="Vancouver mold remediation preparation">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:820px">
          <p class="section-kicker">Our mold remediation process</p>
          <h2 class="section-title">A safer path from discovery to clearance.</h2>
          <p class="section-text mx-auto">Every mold remediation project should start with a clear scope. We help define the source, affected areas, testing needs, and post-remediation verification so the cleanup can be done properly.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3"><article class="step-card"><div class="step-number">01</div><h3>Find Moisture</h3><p>Leaks, condensation, humidity, roof issues, and plumbing problems are checked before cleanup begins.</p></article></div>
          <div class="col-md-6 col-lg-3"><article class="step-card"><div class="step-number">02</div><h3>Define Scope</h3><p>We document visible growth, affected materials, hidden risk areas, and whether mold testing is useful.</p></article></div>
          <div class="col-md-6 col-lg-3"><article class="step-card"><div class="step-number">03</div><h3>Guide Cleanup</h3><p>The report helps guide containment, removal, drying, cleaning, and repair decisions.</p></article></div>
          <div class="col-md-6 col-lg-3"><article class="step-card"><div class="step-number">04</div><h3>Verify Results</h3><p>Post-remediation inspection or testing can confirm the affected space is ready for repairs.</p></article></div>
        </div>
      </div>
    </section>

    <section class="section-padding soft-section">
      <div class="container">
        <div class="row align-items-end mb-4 g-4">
          <div class="col-lg-7">
            <p class="section-kicker">Where mold hides</p>
            <h2 class="section-title">Where mold hides in Vancouver homes.</h2>
          </div>
          <div class="col-lg-5">
            <p class="section-text mb-0">Vancouver’s wet climate, older housing stock, and sealed indoor spaces can create mold conditions in places homeowners do not check every day.</p>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-house-up"></i></span><h3>Attics and roof sheathing</h3><p>Bathroom fan exhaust, roof leaks, blocked soffits, and condensation can create attic mold on wood surfaces.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-layers"></i></span><h3>Crawl spaces</h3><p>Damp soil, poor vapour barriers, standing water, and limited airflow can affect framing and indoor air.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-window"></i></span><h3>Windows and exterior walls</h3><p>Condensation, cold surfaces, and exterior envelope issues can lead to hidden growth around walls and trim.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-droplet-half"></i></span><h3>Bathrooms and kitchens</h3><p>High humidity, poor exhaust, sink leaks, and failed caulking often create recurring mold growth.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-box"></i></span><h3>Closets and storage rooms</h3><p>Low airflow and cold exterior walls can trap moisture behind stored items and furniture.</p></article></div>
          <div class="col-md-6 col-lg-4"><article class="service-card"><span class="icon-pill"><i class="bi bi-building"></i></span><h3>Condos and strata units</h3><p>Shared plumbing, neighbouring leaks, and window condensation need careful inspection and documentation.</p></article></div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-5">
            <p class="section-kicker">Service areas</p>
            <h2 class="section-title">Mold inspection in Vancouver and nearby cities.</h2>
            <p class="section-text">We serve Vancouver and Metro Vancouver properties, including houses, condos, apartments, rental units, strata buildings, offices, and retail spaces.</p>
            <a class="big-call" href="tel:+16048003900">604-800-3900</a>
          </div>
          <div class="col-lg-7">
            <div class="row g-3">
              <div class="col-6 col-md-4"><div class="area-card">Vancouver</div></div>
              <div class="col-6 col-md-4"><div class="area-card">Downtown</div></div>
              <div class="col-6 col-md-4"><div class="area-card">Kitsilano</div></div>
              <div class="col-6 col-md-4"><div class="area-card">Mount Pleasant</div></div>
              <div class="col-6 col-md-4"><div class="area-card">Kerrisdale</div></div>
              <div class="col-6 col-md-4"><div class="area-card">East Vancouver</div></div>
              <div class="col-6 col-md-4"><div class="area-card">North Vancouver</div></div>
              <div class="col-6 col-md-4"><div class="area-card">West Vancouver</div></div>
              <div class="col-6 col-md-4"><div class="area-card">Burnaby</div></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 order-lg-2">
            <p class="section-kicker">Protect your home</p>
            <h2 class="section-title">Protect your home with local mold remediation guidance in Vancouver.</h2>
            <p class="section-text">A small mold area can point to a bigger building issue. Local inspection helps you understand whether the concern is isolated, whether indoor air quality testing is needed, and what should happen before repairs close the area again.</p>
            <ul class="check-list mt-4">
              <li><i class="bi bi-check-circle-fill"></i><span>Moisture-first inspection before remediation decisions</span></li>
              <li><i class="bi bi-check-circle-fill"></i><span>Clear reports for homeowners, buyers, strata, and property managers</span></li>
              <li><i class="bi bi-check-circle-fill"></i><span>Post-remediation testing and clearance support available</span></li>
            </ul>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="hero-card">
              <img class="service-photo" src="/asset/image/mold-house.jpg" alt="Local Vancouver home mold inspection and remediation guidance">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding pt-0">
      <div class="container">
        <div class="cta-panel">
          <div class="row align-items-center g-4">
            <div class="col-lg-7"><p class="section-kicker text-white-50">Need help today?</p><h2 class="section-title text-white mb-2">Mold problem? Call now.</h2><p class="mb-0">Speak with a local Vancouver mold inspection team and get clear next steps.</p></div>
            <div class="col-lg-5 text-lg-end"><a class="big-call" href="tel:+16048003900">604-800-3900</a><div class="mt-3"><a class="btn btn-light" href="/contact/"><i class="bi bi-send me-2"></i>Book Online</a></div></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding pt-0">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-5">
            <p class="section-kicker">Mold inspection FAQ</p>
            <h2 class="section-title">Questions Vancouver customers ask before booking.</h2>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
              <div class="col-12"><article class="plain-card"><h3>What does a mold inspection include in Vancouver?</h3><p>A mold inspection checks visible growth, musty odours, moisture conditions, leak history, condensation patterns, attics, crawl spaces, bathrooms, kitchens, exterior walls, and other risk areas. Testing can be added when documentation or lab confirmation is useful.</p></article></div>
              <div class="col-12"><article class="plain-card"><h3>Do I need mold testing or just an inspection?</h3><p>Many homes start with inspection because mold is usually caused by moisture. Air or surface testing is useful when mold is hidden, a report is needed for a buyer, tenant, strata, or property manager, or post-remediation clearance is required.</p></article></div>
              <div class="col-12"><article class="plain-card"><h3>How quickly should I book after water damage?</h3><p>Book quickly after leaks, floods, roof issues, or plumbing failures. Damp porous materials can support mold growth when moisture is not corrected, and early inspection helps define drying, repair, testing, and remediation needs.</p></article></div>
              <div class="col-12"><article class="plain-card"><h3>Do you inspect condos, rentals, and strata properties?</h3><p>Yes. Mold inspections are available for Vancouver houses, condos, apartments, rentals, strata units, commercial spaces, and managed properties with documentation that can be shared with owners, tenants, strata councils, or property managers.</p></article></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php
require $rootDir . '/includes/footer.php';
