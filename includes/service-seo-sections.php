<?php
declare(strict_types=1);

$serviceSeoKey = $serviceSeoKey ?? '';

$serviceSeoPages = [
    'mold-testing' => [
        'kicker' => 'Mold testing details',
        'title' => 'Mold testing in Vancouver for clear, documented answers.',
        'copy' => 'Mold testing is most useful when it answers a specific question: what is present, whether indoor air is elevated compared with outdoor conditions, or whether a cleaned area is ready for normal use again. Our Vancouver mold testing service pairs samples with inspection notes so the result is practical, not confusing.',
        'image' => '/asset/image/mold-in-kitchen.jpg',
        'alt' => 'Mold testing in a Vancouver kitchen after moisture damage',
        'cardsTitle' => 'When Vancouver mold testing makes sense',
        'cards' => [
            ['Musty odours', 'Useful when a smell suggests hidden growth but the source is not obvious.'],
            ['Real estate checks', 'Helpful for buyers, sellers, and agents who need documented findings.'],
            ['Rental or strata concerns', 'Supports clearer communication between tenants, owners, and strata managers.'],
            ['Post-remediation testing', 'Can help verify that cleanup work has addressed the affected area.'],
            ['Visible growth questions', 'Surface samples can help confirm whether suspicious material is mold.'],
            ['Health-sensitive occupants', 'Air testing can support decisions when occupants are concerned about exposure.'],
        ],
        'processTitle' => 'Our mold testing process',
        'steps' => [
            ['Inspect first', 'We review moisture conditions, visible clues, odours, and likely sample locations.'],
            ['Collect samples', 'Air or surface samples are collected based on the goal of the test.'],
            ['Lab review', 'Samples are submitted for analysis when lab confirmation is needed.'],
            ['Explain results', 'You receive practical context, not just numbers or lab terminology.'],
        ],
        'galleryTitle' => 'Common mold testing locations',
        'gallery' => [
            ['/asset/image/mold-wall.jpg', 'Wall mold testing after water damage', 'Walls and baseboards'],
            ['/asset/image/mold-in-corner-vancouver.jpg', 'Corner mold testing in Vancouver', 'Corners and cold spots'],
            ['/asset/image/mold-attic.jpg', 'Attic mold testing in Vancouver', 'Attics and roof sheathing'],
        ],
        'faq' => [
            ['Do I always need mold testing?', 'No. Some visible mold concerns can be handled through inspection and moisture correction. Testing is recommended when documentation or hidden conditions matter.'],
            ['Is air testing better than surface testing?', 'They answer different questions. Air testing checks airborne spores; surface testing checks material from a specific spot.'],
            ['Can testing prove a home is safe?', 'Testing can support decisions, but it should be interpreted with building conditions and inspection findings.'],
        ],
    ],
    'mold-detection' => [
        'kicker' => 'Hidden mold detection',
        'title' => 'Mold detection in Vancouver starts by finding the moisture source.',
        'copy' => 'Hidden mold is usually connected to a leak, condensation pattern, trapped humidity, or wet building material. Our mold detection service focuses on the cause first so Vancouver homeowners understand why the mold appeared and what should happen next.',
        'image' => '/asset/image/mold-in-corner-vancouver.jpg',
        'alt' => 'Hidden mold detection in a Vancouver home corner',
        'cardsTitle' => 'Where hidden mold is commonly detected',
        'cards' => [
            ['Exterior walls', 'Cold surfaces and envelope leaks can create hidden dampness behind finishes.'],
            ['Bathrooms', 'Poor exhaust, failed caulking, and plumbing leaks often create recurring growth.'],
            ['Windows', 'Condensation around frames can feed mold on trim, drywall, and sill areas.'],
            ['Attics', 'Roof leaks, blocked ventilation, and fan exhaust issues can affect sheathing.'],
            ['Closets', 'Low airflow against exterior walls can trap moisture behind stored items.'],
            ['Basements and lower floors', 'Below-grade spaces can hide seepage, damp concrete, and musty materials.'],
        ],
        'processTitle' => 'Our mold detection process',
        'steps' => [
            ['Listen', 'We start with odours, leak history, visible stains, and when the issue appears.'],
            ['Inspect', 'We check likely moisture zones and vulnerable materials.'],
            ['Document', 'Photos and findings identify what was seen and where risk remains.'],
            ['Recommend', 'You get next steps for testing, repair, drying, or remediation.'],
        ],
        'galleryTitle' => 'Mold detection photo examples',
        'gallery' => [
            ['/asset/image/big-mold-in-wall-home-vancouver.jpg', 'Large hidden wall mold concern in Vancouver', 'Wall cavities and leaks'],
            ['/asset/image/mold-in-vall.jpg', 'Mold on a wall from moisture damage', 'Paint and drywall clues'],
            ['/asset/image/mold-roof.jpg', 'Roof leak related mold detection', 'Roof leak patterns'],
        ],
        'faq' => [
            ['Can mold be detected without opening walls?', 'Often we can identify risk patterns first. Invasive checks are only considered when evidence supports it.'],
            ['What if I only smell mold?', 'A musty odour is a valid reason to inspect. It may come from damp materials, hidden growth, or poor ventilation.'],
            ['Does detection include testing?', 'Testing can be added when lab confirmation or documentation is useful.'],
        ],
    ],
    'black-mold' => [
        'kicker' => 'Black mold concerns',
        'title' => 'Black mold inspection in Vancouver with calm, clear next steps.',
        'copy' => 'Dark growth should be taken seriously, but colour alone does not identify the species or risk. We inspect the moisture source, affected materials, spread potential, and whether mold testing or professional remediation is the right next step.',
        'image' => '/asset/image/big-mold-in-wall-home-vancouver.jpg',
        'alt' => 'Black mold inspection on a Vancouver wall',
        'cardsTitle' => 'High-priority black mold inspection areas',
        'cards' => [
            ['Drywall after leaks', 'Wet drywall can support growth behind paint, trim, and baseboards.'],
            ['Bathrooms', 'Dark staining around caulking, ceilings, and fans can signal repeated moisture.'],
            ['Attic sheathing', 'Dark attic staining can come from ventilation, leaks, or condensation.'],
            ['Crawl spaces', 'Wood framing and subfloors can show dark growth in damp conditions.'],
            ['Kitchens and sinks', 'Cabinet leaks and dishwasher failures can hide growth.'],
            ['Storage rooms', 'Poor airflow and damp exterior walls can create hidden contamination.'],
        ],
        'processTitle' => 'How we inspect suspected black mold',
        'steps' => [
            ['Avoid disturbance', 'We recommend not scraping or sanding suspicious growth before inspection.'],
            ['Find moisture', 'We look for the water source that allowed the growth to develop.'],
            ['Assess materials', 'Porous and non-porous materials need different cleanup decisions.'],
            ['Plan remediation', 'You receive guidance for containment, testing, cleanup, and verification.'],
        ],
        'galleryTitle' => 'Black mold inspection examples',
        'gallery' => [
            ['/asset/image/mold-wall.jpg', 'Dark mold on interior wall', 'Interior wall growth'],
            ['/asset/image/mold-in-kitchen.jpg', 'Kitchen mold inspection for dark growth', 'Kitchen leak areas'],
            ['/asset/image/remove-mold.jpg', 'Mold remediation preparation in Vancouver', 'Remediation planning'],
        ],
        'faq' => [
            ['Is all black mold toxic?', 'No. Many molds can look dark. Inspection and, when needed, testing provide better information than colour alone.'],
            ['Should I clean it myself?', 'Small surface spots may be simple, but larger or recurring growth should be inspected before disturbance.'],
            ['When is it urgent?', 'Recent water damage, large areas, sewage involvement, or sensitive occupants should be addressed quickly.'],
        ],
    ],
    'attic-mold' => [
        'kicker' => 'Attic mold causes',
        'title' => 'Attic mold inspection in Vancouver for ventilation, leaks, and condensation.',
        'copy' => 'Attic mold often points to a building condition that has been active for months or years. We inspect roof sheathing, rafters, insulation, bathroom fan discharge, blocked soffits, roof leaks, and seasonal condensation patterns.',
        'image' => '/asset/image/mold-attic.jpg',
        'alt' => 'Attic mold inspection in Vancouver roof sheathing',
        'cardsTitle' => 'What we check during attic mold inspection',
        'cards' => [
            ['Roof sheathing', 'Dark staining, fuzzy growth, and moisture patterns are documented.'],
            ['Bathroom fan discharge', 'Fans must exhaust outside, not into attic insulation or roof cavities.'],
            ['Soffit and roof vents', 'Blocked ventilation can trap humid air in the attic.'],
            ['Insulation gaps', 'Air leakage can carry warm interior moisture into cold attic spaces.'],
            ['Roof leaks', 'Stains around penetrations and valleys can indicate active or past leaks.'],
            ['Remediation readiness', 'We help clarify what should be repaired before cleanup.'],
        ],
        'processTitle' => 'Our attic inspection process',
        'steps' => [
            ['Access attic', 'We inspect accessible attic areas and visible roof framing.'],
            ['Trace moisture', 'We look for ventilation, leak, and condensation patterns.'],
            ['Document findings', 'Photos and notes help homeowners understand the source.'],
            ['Guide repair', 'You get next steps for ventilation, roofing, insulation, or remediation.'],
        ],
        'galleryTitle' => 'Attic mold and roof moisture examples',
        'gallery' => [
            ['/asset/image/mold-roof.jpg', 'Roof leak connected to attic mold', 'Roof leak clues'],
            ['/asset/image/mold-house.jpg', 'Vancouver home exterior moisture conditions', 'Home moisture conditions'],
            ['/asset/image/remove-mold.jpg', 'Attic mold remediation planning', 'Cleanup planning'],
        ],
        'faq' => [
            ['Why does attic mold happen in Vancouver?', 'Wet weather, air leakage, poor ventilation, and roof issues can create damp attic conditions.'],
            ['Can attic mold come back after cleaning?', 'Yes, if the ventilation or moisture source is not corrected first.'],
            ['Do I need attic mold testing?', 'Often inspection is enough, but testing can help when documentation or clearance is needed.'],
        ],
    ],
    'crawl-space-mold' => [
        'kicker' => 'Crawl space moisture',
        'title' => 'Crawl space mold inspection in Vancouver for dampness below the home.',
        'copy' => 'Crawl spaces can affect odours, wood framing, insulation, and indoor air quality. We inspect moisture conditions, vapour barriers, exposed wood, vents, drainage clues, and signs that damp air is moving into the living space.',
        'image' => '/asset/image/mold-ground-floor.jpg',
        'alt' => 'Crawl space mold inspection for ground floor moisture',
        'cardsTitle' => 'Common crawl space mold risk factors',
        'cards' => [
            ['Wet soil', 'Uncontrolled ground moisture can raise humidity below the home.'],
            ['Damaged vapour barrier', 'Missing or torn poly allows damp soil air into the crawl space.'],
            ['Poor drainage', 'Grading, downspouts, and seepage can create chronic dampness.'],
            ['Wood framing', 'Joists and subfloors can show staining, growth, or decay.'],
            ['Insulation damage', 'Wet or fallen insulation can trap moisture against materials.'],
            ['Musty air movement', 'Odours can move from crawl spaces into living areas.'],
        ],
        'processTitle' => 'Our crawl space inspection process',
        'steps' => [
            ['Review access', 'We inspect safely accessible crawl space areas.'],
            ['Check moisture', 'Visible dampness, staining, odours, and material conditions are reviewed.'],
            ['Document risks', 'Photos and notes explain what is affecting the space.'],
            ['Recommend fixes', 'You get guidance for drying, drainage, vapour barrier, and remediation.'],
        ],
        'galleryTitle' => 'Crawl space inspection examples',
        'gallery' => [
            ['/asset/image/mold-house.jpg', 'Home conditions linked to crawl space moisture', 'Foundation and drainage'],
            ['/asset/image/mold-wall.jpg', 'Moisture migration into walls', 'Moisture migration'],
            ['/asset/image/remove-mold.jpg', 'Crawl space remediation planning', 'Remediation planning'],
        ],
        'faq' => [
            ['Can crawl space mold affect indoor air?', 'Yes. Air from below the home can move upward through gaps and pressure differences.'],
            ['Should a crawl space be sealed?', 'It depends on drainage, ventilation, vapour barrier, and building conditions. Inspection helps choose the right approach.'],
            ['What if there is standing water?', 'Standing water should be addressed quickly because it can drive humidity, odours, and material damage.'],
        ],
    ],
    'condo-mold' => [
        'kicker' => 'Condo and strata mold',
        'title' => 'Condo mold inspection in Vancouver with documentation for owners, tenants, and strata.',
        'copy' => 'Condo mold concerns often involve shared walls, plumbing, windows, neighbouring units, or strata responsibility. We focus on clear documentation, moisture source clues, and practical next steps that help everyone communicate.',
        'image' => '/asset/image/mold-in-corner-door-vancouver.jpg',
        'alt' => 'Condo mold inspection near a Vancouver door corner',
        'cardsTitle' => 'Common condo mold inspection concerns',
        'cards' => [
            ['Window condensation', 'Cold glass and frames can create recurring mold on sills and drywall.'],
            ['Bathroom ventilation', 'Poor exhaust can lead to ceiling, fan, and wall growth.'],
            ['Neighbouring leaks', 'Water from adjacent or upper units can create hidden damage.'],
            ['Storage lockers', 'Low airflow and damp concrete can create musty stored items.'],
            ['Exterior walls', 'Envelope issues can show as staining, bubbling paint, or damp corners.'],
            ['Strata reporting', 'Photos and findings help support repair conversations.'],
        ],
        'processTitle' => 'Our condo mold inspection process',
        'steps' => [
            ['Review history', 'We document leaks, repairs, odours, and strata communication.'],
            ['Inspect unit areas', 'We check visible growth, moisture clues, and likely source areas.'],
            ['Testing options', 'Air or surface testing can be added when documentation is needed.'],
            ['Clear report', 'You receive findings that are easier to share with strata or managers.'],
        ],
        'galleryTitle' => 'Condo mold examples in Vancouver',
        'gallery' => [
            ['/asset/image/mold-in-corner-vancouver.jpg', 'Condo corner mold from condensation', 'Cold corner growth'],
            ['/asset/image/mold-in-vall.jpg', 'Condo wall moisture damage', 'Wall staining'],
            ['/asset/image/mold-in-kitchen.jpg', 'Condo kitchen mold concern', 'Kitchen plumbing areas'],
        ],
        'faq' => [
            ['Can you inspect tenant-occupied condos?', 'Yes, with proper access and permission from the appropriate party.'],
            ['Will the report help with strata?', 'The report documents visible conditions and inspection findings, which can support clearer strata communication.'],
            ['Is testing useful in condos?', 'Testing can help when growth is hidden, odours persist, or documentation is needed.'],
        ],
    ],
    'commercial-mold' => [
        'kicker' => 'Commercial property mold',
        'title' => 'Commercial mold inspection in Vancouver for properties that need documentation.',
        'copy' => 'Commercial mold concerns can affect operations, occupants, tenants, and property decisions. We provide inspection and testing options for offices, retail spaces, clinics, warehouses, strata buildings, and managed properties.',
        'image' => '/asset/image/mold-house.jpg',
        'alt' => 'Commercial property mold inspection in Vancouver',
        'cardsTitle' => 'Commercial mold inspection use cases',
        'cards' => [
            ['Occupant complaints', 'Musty odours and comfort complaints need a clear inspection path.'],
            ['Leak events', 'Plumbing, roof, and envelope leaks should be documented quickly.'],
            ['Pre-lease checks', 'Inspection can help identify concerns before occupancy or renovation.'],
            ['Property management', 'Written findings help prioritize repair and remediation decisions.'],
            ['Post-remediation checks', 'Verification supports reopening or reconstruction decisions.'],
            ['Strata buildings', 'Common areas, parkades, service rooms, and tenant spaces can be reviewed.'],
        ],
        'processTitle' => 'Our commercial inspection process',
        'steps' => [
            ['Define scope', 'We clarify affected areas, access needs, and documentation goals.'],
            ['Inspect site', 'Moisture clues, visible growth, odours, and building conditions are reviewed.'],
            ['Testing if needed', 'Air or surface samples can support decisions and records.'],
            ['Report findings', 'You receive practical recommendations for repairs, cleanup, or verification.'],
        ],
        'galleryTitle' => 'Commercial mold inspection examples',
        'gallery' => [
            ['/asset/image/mold-wall.jpg', 'Commercial wall mold inspection', 'Wall and envelope issues'],
            ['/asset/image/mold-roof.jpg', 'Commercial roof leak mold concern', 'Roof leak concerns'],
            ['/asset/image/remove-mold.jpg', 'Commercial remediation planning', 'Remediation planning'],
        ],
        'faq' => [
            ['Do you inspect active businesses?', 'Yes, access and timing can be planned to reduce disruption where possible.'],
            ['Can you provide documentation for managers?', 'Yes, inspection findings and photos can support property management decisions.'],
            ['When should testing be added?', 'Testing is useful when documentation, clearance, or occupant concerns require more information.'],
        ],
    ],
    'air-quality' => [
        'kicker' => 'Indoor air quality testing',
        'title' => 'Air quality testing in Vancouver for musty odours and hidden mold concerns.',
        'copy' => 'Indoor air quality testing can help when mold is suspected but not visible. Air samples are most useful when paired with inspection findings, moisture history, and an outdoor baseline for comparison.',
        'image' => '/asset/image/mold-wall.jpg',
        'alt' => 'Air quality testing related to wall mold in Vancouver',
        'cardsTitle' => 'When air quality testing is useful',
        'cards' => [
            ['Musty odours', 'Air testing can support investigation when the source is not obvious.'],
            ['Hidden moisture', 'Leaks behind walls or ceilings may affect indoor air conditions.'],
            ['Post-remediation clearance', 'Testing can support verification after cleanup.'],
            ['Buying or renting', 'Documentation can help with property decisions.'],
            ['Sensitive occupants', 'Testing may help guide next steps for concerned households.'],
            ['Workplace concerns', 'Commercial air testing can support occupant complaint investigations.'],
        ],
        'processTitle' => 'Our air quality testing process',
        'steps' => [
            ['Inspect conditions', 'We review moisture, odours, visible growth, and likely sources.'],
            ['Set sample plan', 'Indoor and outdoor sample locations are selected based on the concern.'],
            ['Collect samples', 'Air samples are collected using appropriate sampling equipment.'],
            ['Explain findings', 'Results are interpreted with the building conditions and next steps.'],
        ],
        'galleryTitle' => 'Air quality and hidden mold examples',
        'gallery' => [
            ['/asset/image/mold-in-corner-vancouver.jpg', 'Hidden mold affecting air quality', 'Hidden corner growth'],
            ['/asset/image/mold-attic.jpg', 'Attic mold and air quality concern', 'Attic sources'],
            ['/asset/image/big-mold-in-wall-home-vancouver.jpg', 'Wall mold affecting indoor air', 'Wall contamination'],
        ],
        'faq' => [
            ['Can air testing find hidden mold?', 'It can provide clues, but results should be interpreted with inspection and moisture findings.'],
            ['Do you compare indoor and outdoor samples?', 'Outdoor baseline comparison is commonly used to understand indoor conditions.'],
            ['Is air quality testing the same as mold testing?', 'It is a type of mold testing focused on airborne spores and indoor air conditions.'],
        ],
    ],
];

if (!isset($serviceSeoPages[$serviceSeoKey])) {
    return;
}

$seo = $serviceSeoPages[$serviceSeoKey];
?>
    <section class="section-padding">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
            <p class="section-kicker"><?= e($seo['kicker']) ?></p>
            <h2 class="section-title"><?= e($seo['title']) ?></h2>
            <p class="section-text"><?= e($seo['copy']) ?></p>
            <div class="d-grid d-sm-flex gap-3 mt-4">
              <a class="btn btn-primary-custom" href="#form">Book This Service</a>
              <a class="btn btn-outline-custom" href="tel:+16048003900">Call 604-800-3900</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-card"><img class="service-photo" src="<?= e($seo['image']) ?>" alt="<?= e($seo['alt']) ?>"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding soft-section">
      <div class="container">
        <div class="row align-items-end mb-4 g-4">
          <div class="col-lg-8">
            <p class="section-kicker">Local service details</p>
            <h2 class="section-title"><?= e($seo['cardsTitle']) ?></h2>
          </div>
          <div class="col-lg-4"><p class="section-text mb-0">Vancouver properties often need a moisture-first inspection because weather, ventilation, older materials, and building envelope issues can all contribute to mold.</p></div>
        </div>
        <div class="row g-4">
          <?php foreach ($seo['cards'] as $card): ?>
            <div class="col-md-6 col-lg-4">
              <article class="service-card">
                <span class="icon-pill"><i class="bi bi-check2-circle"></i></span>
                <h3><?= e($card[0]) ?></h3>
                <p><?= e($card[1]) ?></p>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:820px">
          <p class="section-kicker">Inspection process</p>
          <h2 class="section-title"><?= e($seo['processTitle']) ?></h2>
          <p class="section-text mx-auto">A clear process helps reduce stress and gives you the information needed to choose repair, testing, cleanup, or monitoring with confidence.</p>
        </div>
        <div class="row g-4">
          <?php foreach ($seo['steps'] as $index => $step): ?>
            <div class="col-md-6 col-lg-3">
              <article class="step-card">
                <div class="step-number"><?= e(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)) ?></div>
                <h3><?= e($step[0]) ?></h3>
                <p><?= e($step[1]) ?></p>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section-padding soft-section">
      <div class="container">
        <div class="row align-items-end mb-4 g-4">
          <div class="col-lg-8">
            <p class="section-kicker">Photo examples</p>
            <h2 class="section-title"><?= e($seo['galleryTitle']) ?></h2>
          </div>
          <div class="col-lg-4"><p class="section-text mb-0">Replace or add more photos here as you collect real project images. Local, specific photos help trust and SEO.</p></div>
        </div>
        <div class="row g-4">
          <?php foreach ($seo['gallery'] as $image): ?>
            <div class="col-md-4">
              <div class="image-tile">
                <img src="<?= e($image[0]) ?>" alt="<?= e($image[1]) ?>">
                <span><?= e($image[2]) ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="section-padding">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-5">
            <p class="section-kicker">Service areas</p>
            <h2 class="section-title">Serving Vancouver and nearby Metro Vancouver cities.</h2>
            <p class="section-text">Book local mold inspection support in Vancouver, West Vancouver, North Vancouver, Burnaby, and Coquitlam.</p>
            <a class="big-call" href="tel:+16048003900">604-800-3900</a>
          </div>
          <div class="col-lg-7">
            <div class="row g-3">
              <?php foreach (['Vancouver', 'West Vancouver', 'North Vancouver', 'Burnaby', 'Coquitlam', 'Metro Vancouver'] as $area): ?>
                <div class="col-6 col-md-4"><div class="area-card"><?= e($area) ?></div></div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-padding soft-section">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-5">
            <p class="section-kicker">Questions</p>
            <h2 class="section-title">Frequently asked questions.</h2>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
              <?php foreach ($seo['faq'] as $faq): ?>
                <div class="col-12">
                  <article class="plain-card">
                    <h3><?= e($faq[0]) ?></h3>
                    <p><?= e($faq[1]) ?></p>
                  </article>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
