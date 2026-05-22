<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'Additional Services Warrenton MO | CPA Roofing & Construction';
$pageDescription = 'CPA Roofing & Construction offers siding installation, siding repair, and full-service roofing contractor services in Warrenton, MO. Licensed since 1995 with free estimates.';
$canonicalUrl    = $siteUrl . '/services/additional-services/';
$currentPage     = 'services';

$photoBase       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';
$heroImage       = $photoBase . '1779465577564-f2w9k5-40841389_1098160560333177_1829770370060648448_n.jpg';
$heroImagePreload = $heroImage;

// ── BreadcrumbList Schema ────────────────────────────────────────
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Additional Services', 'item' => $siteUrl . '/services/additional-services/'],
    ],
];

// ── Service Schema ───────────────────────────────────────────────
$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Additional Construction Services',
    'description' => 'Siding installation, siding repair, and full-service roofing contractor work for residential and commercial properties in Warrenton, MO. Licensed since 1995.',
    'url' => $siteUrl . '/services/additional-services/',
    'serviceType' => 'GeneralContractor',
    'provider' => [
        '@type' => 'Organization',
        'name' => $siteName,
        '@id' => $siteUrl . '/#organization',
    ],
    'areaServed' => [
        '@type' => 'City',
        'name' => 'Warrenton',
        'containedInPlace' => ['@type' => 'State', 'name' => 'Missouri'],
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Additional Services',
        'itemListElement' => [
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Siding Installation & Repair',
                    'description' => 'Professional siding services for residential and commercial properties in Warrenton, MO.',
                ],
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Roofing Contractor Services',
                    'description' => 'Full-service roofing solutions for residential and commercial properties in Warrenton, MO.',
                ],
            ],
        ],
    ],
];

// ── FAQ Data ─────────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'What types of siding does CPA Roofing & Construction install in Warrenton, MO?',
        'answer'   => 'We install vinyl siding, fiber cement siding (such as James Hardie), and engineered wood siding for residential and commercial properties throughout Warrenton and surrounding areas. Each material is selected based on your property\'s exposure, budget, and aesthetic goals.',
    ],
    [
        'question' => 'How do I know if my siding needs repair or full replacement?',
        'answer'   => 'Signs that siding needs attention include warping, cracking, bubbling, soft spots behind the panels, or rising energy bills. If damage is limited to a few panels, a targeted repair is usually sufficient. Widespread rot, moisture intrusion behind the sheathing, or outdated materials often justify a full replacement. Our free inspection determines which approach saves you money long-term.',
    ],
    [
        'question' => 'Does CPA handle both residential and commercial roofing projects?',
        'answer'   => 'Yes. CPA Roofing & Construction is a licensed Missouri general contractor serving homeowners and business owners in Warrenton and the surrounding region. We handle everything from single-family shingle replacements to multi-unit commercial flat roof systems, including TPO, metal, and built-up roofing.',
    ],
    [
        'question' => 'Can CPA coordinate siding and roofing work at the same time?',
        'answer'   => 'Absolutely. Bundling siding and roofing into a single project is one of the most efficient ways to protect your building envelope. We schedule crews to minimize disruption, often completing both scopes within the same project window. This reduces total labor costs and ensures flashing transitions between the roof edge and siding are watertight.',
    ],
    [
        'question' => 'What areas near Warrenton does CPA Roofing & Construction serve?',
        'answer'   => 'We serve Warrenton and the broader Warren County area, including Wright City, Truesdale, Marthasville, and surrounding communities in central and eastern Missouri. Our crews regularly work within a 50-mile radius of Warrenton for both residential and commercial projects.',
    ],
];

$faqSchema = generateFAQSchema($faqs);

// ── Service Cards ────────────────────────────────────────────────
$serviceCards = [
    [
        'name'    => 'Siding Installation & Repair',
        'icon'    => 'hammer',
        'desc'    => 'Vinyl, fiber cement, and engineered wood siding for lasting curb appeal.',
        'bullets' => ['Storm & rot resistant materials', 'Improves insulation & value', 'Color-matched to your home'],
        'image'   => $photoBase . '1779465581435-oynoxf-40943247_1098157867000113_4866839897949863936_n.jpg',
        'alt'     => 'Siding installation project completed by CPA Roofing in Warrenton, MO',
    ],
    [
        'name'    => 'Roofing Contractor Services',
        'icon'    => 'check-circle',
        'desc'    => 'Full-service roofing solutions for residential and commercial properties.',
        'bullets' => ['Inspections & maintenance plans', 'All roof types & materials', 'Code-compliant work guaranteed'],
        'image'   => $photoBase . '1779465579437-is3xq9-40882613_1098161186999781_153905346983755776_n.jpg',
        'alt'     => 'CPA Roofing contractor crew working on a Warrenton residential roof',
    ],
];
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- Schema: BreadcrumbList -->
<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- Schema: Service -->
<script type="application/ld+json">
<?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<!-- Schema: FAQPage -->
<script type="application/ld+json">
<?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<style>
/* ── Inner Page Hero ──────────────────────────────────────────── */
.inner-hero {
  position: relative;
  min-height: 50vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center;
  padding-top: 100px;
  padding-bottom: var(--space-16);
}
.inner-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(26, 26, 46, 0.92) 0%, rgba(245, 86, 0, 0.75) 100%);
}
.inner-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.inner-hero .container {
  position: relative;
  z-index: 2;
}
.inner-hero h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.inner-hero .hero-answer {
  color: rgba(255,255,255,0.9);
  max-width: 640px;
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.inner-hero .breadcrumb {
  display: flex;
  gap: var(--space-2);
  align-items: center;
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.7);
  margin-bottom: var(--space-4);
}
.inner-hero .breadcrumb a { color: rgba(255,255,255,0.7); }
.inner-hero .breadcrumb a:hover { color: var(--color-white); }
.inner-hero .breadcrumb-sep { opacity: 0.5; }

/* ── Service Cards Section ───────────────────────────────────── */
.addl-services-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-8);
  max-width: 900px;
  margin: 0 auto;
}
@media (max-width: 600px) {
  .addl-services-grid { grid-template-columns: 1fr; }
}

/* ── Detailed Service Sections ───────────────────────────────── */
.service-detail {
  position: relative;
  overflow: hidden;
}
.service-detail:nth-of-type(even) {
  background: var(--color-light);
}
.service-detail__grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-12);
  align-items: center;
}
.service-detail__grid--reverse {
  direction: rtl;
}
.service-detail__grid--reverse > * {
  direction: ltr;
}
.service-detail__content {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.service-detail__content h2 {
  color: var(--color-dark);
  margin-bottom: var(--space-2);
}
.service-detail__content .answer-block {
  font-size: var(--font-size-lg);
  color: var(--color-gray-dark);
  line-height: 1.7;
  border-left: 3px solid var(--color-primary);
  padding-left: var(--space-4);
  margin-bottom: var(--space-2);
}
.service-detail__content p {
  color: var(--color-gray-dark);
  line-height: 1.7;
  max-width: 65ch;
}
.service-detail__image {
  position: relative;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.service-detail__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  aspect-ratio: 4 / 3;
}
.service-detail__image::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: var(--radius-lg);
  box-shadow: inset 0 0 0 1px rgba(0,0,0,0.08);
  pointer-events: none;
}
.service-detail__accent {
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: rgba(245, 86, 0, 0.06);
  z-index: 0;
  pointer-events: none;
}
.service-detail__accent--tl { top: -60px; left: -60px; }
.service-detail__accent--br { bottom: -60px; right: -60px; background: rgba(0, 94, 245, 0.05); }

@media (max-width: 768px) {
  .service-detail__grid,
  .service-detail__grid--reverse {
    grid-template-columns: 1fr;
    gap: var(--space-8);
    direction: ltr;
  }
  .inner-hero { min-height: 40vh; }
}

/* ── FAQ ──────────────────────────────────────────────────────── */
.faq-section {
  background: var(--color-light);
}
.faq-list {
  max-width: 800px;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.faq-item {
  background: var(--color-white);
  border-radius: var(--radius-md);
  padding: var(--space-6);
  box-shadow: var(--shadow-sm);
  transition: box-shadow var(--transition-base);
}
.faq-item:hover {
  box-shadow: var(--shadow-md);
}
.faq-item h3 {
  font-size: var(--font-size-lg);
  color: var(--color-dark);
  margin-bottom: var(--space-3);
  display: flex;
  align-items: flex-start;
  gap: var(--space-3);
}
.faq-item h3 .faq-icon {
  flex-shrink: 0;
  color: var(--color-primary);
  margin-top: 2px;
}
.faq-answer {
  color: var(--color-gray-dark);
  line-height: 1.7;
  padding-left: calc(24px + var(--space-3));
}

/* ── CTA Section ──────────────────────────────────────────────── */
.page-cta {
  background: var(--color-dark);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.page-cta::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -20%;
  width: 500px;
  height: 500px;
  border-radius: 50%;
  background: rgba(245, 86, 0, 0.08);
  pointer-events: none;
}
.page-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.page-cta p { color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto var(--space-8); line-height: 1.7; }
.page-cta .container { position: relative; z-index: 2; }

/* ── Section Divider ──────────────────────────────────────────── */
.section-divider {
  width: 100%;
  overflow: hidden;
  line-height: 0;
}
.section-divider svg {
  display: block;
  width: 100%;
  height: 48px;
}

/* ── Updated Badge ─────────────────────────────────────────────── */
.last-updated {
  text-align: center;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  padding: var(--space-2) 0;
}
</style>


<!-- ═══════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="inner-hero" style="background-image: url('<?php echo htmlspecialchars($heroImage); ?>');" aria-label="Additional services hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Additional Services</span>
    </nav>
    <h1>Additional Construction <span class="text-accent">Services</span> in Warrenton, MO</h1>
    <p class="hero-answer">Beyond roofing, CPA Roofing &amp; Construction provides siding installation, siding repair, and dedicated roofing contractor services across Warrenton and central Missouri. Each project is backed by <?php echo $yearsInBusiness; ?> years of licensed contracting experience and a commitment to building envelope integrity.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION DIVIDER
     ═══════════════════════════════════════════════════════════════ -->
<div class="section-divider">
  <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-white)" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 48h1440V24C1200 0 960 48 720 24S240 48 0 24z"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICE CARDS GRID
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="Additional services overview">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">Additional Services</span> Does CPA Offer in Warrenton?</h2>
      <p class="hero-answer">CPA Roofing &amp; Construction extends its licensed contractor expertise beyond standard roofing with professional siding work and comprehensive roofing contractor services. Both services protect your Warrenton property from Missouri weather while increasing long-term value and curb appeal.</p>
    </div>

    <div class="addl-services-grid">
<?php
$tints = [1, 2, 3];
foreach ($serviceCards as $i => $svc):
    $tint  = $tints[$i % 3];
    $delay = $i + 1;
?>
      <article class="service-card-with-image card-tint-<?php echo $tint; ?> reveal-up reveal-delay-<?php echo $delay; ?>" data-animate>
        <div class="service-card__image">
          <img src="<?php echo htmlspecialchars($svc['image']); ?>" alt="<?php echo htmlspecialchars($svc['alt']); ?>" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?php echo htmlspecialchars($svc['icon']); ?>"></i></div>
          <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($svc['desc']); ?></p>
          <ul>
<?php foreach ($svc['bullets'] as $bullet): ?>
            <li><?php echo htmlspecialchars($bullet); ?></li>
<?php endforeach; ?>
          </ul>
        </div>
      </article>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SIDING INSTALLATION & REPAIR — DETAILED
     ═══════════════════════════════════════════════════════════════ -->
<section class="section service-detail" aria-label="Siding installation and repair services">
  <div class="container">
    <div class="service-detail__accent service-detail__accent--tl"></div>

    <div class="service-detail__grid" data-animate>
      <div class="service-detail__content reveal-left">
        <span class="eyebrow-label">Siding Contractor Warrenton MO</span>
        <h2>Why Does Siding Matter for <span class="text-accent">Warrenton Homes</span> and Businesses?</h2>
        <p class="answer-block">Siding is the first line of defense between your structure and Missouri's temperature swings, hail, and wind-driven rain. CPA Roofing &amp; Construction installs and repairs vinyl, fiber cement, and engineered wood siding across Warrenton, MO, with warranties that range from 25 to 50 years depending on the material selected.</p>

        <p>Warrenton properties face unique exterior challenges. Summer humidity accelerates rot in aging wood siding, while winter freeze-thaw cycles crack brittle panels along the Route 47 corridor and older neighborhoods near downtown. Our crews inspect the sheathing and moisture barrier behind every panel before installing new material, because covering damaged substrate only delays costly structural repairs.</p>

        <p>Fiber cement siding has become the most requested material for Warrenton-area homes built before 1990. It resists termites, does not warp under Missouri humidity, and holds factory-applied paint for 15 or more years without recoating. Vinyl remains the most budget-friendly option and works well on rental properties and commercial buildings along Highway 70 where curb appeal and low maintenance are priorities.</p>

        <p>Every siding project includes removal of old materials, inspection of the wall cavity insulation, replacement of damaged house wrap, and installation with manufacturer-specified fasteners and J-channel trim. We handle permits through Warren County when required and leave the jobsite clean at the end of each work day.</p>
      </div>
      <div class="service-detail__image reveal-right reveal-delay-2">
        <img src="<?php echo $photoBase; ?>1779465581435-oynoxf-40943247_1098157867000113_4866839897949863936_n.jpg" alt="Siding installation project completed by CPA Roofing in Warrenton, MO" width="800" height="600" loading="lazy">
      </div>
    </div>

    <div class="service-detail__accent service-detail__accent--br"></div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SECTION DIVIDER
     ═══════════════════════════════════════════════════════════════ -->
<div class="section-divider">
  <svg viewBox="0 0 1440 48" preserveAspectRatio="none" fill="var(--color-light)" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 0h1440v24c-240 24-480-24-720 0S240-24 0 24z"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     ROOFING CONTRACTOR SERVICES — DETAILED
     ═══════════════════════════════════════════════════════════════ -->
<section class="section service-detail" aria-label="Roofing contractor services">
  <div class="container">
    <div class="service-detail__accent service-detail__accent--br"></div>

    <div class="service-detail__grid service-detail__grid--reverse" data-animate>
      <div class="service-detail__content reveal-right">
        <span class="eyebrow-label">Roofing Contractor Warrenton MO</span>
        <h2>What Does a Full-Service <span class="text-accent">Roofing Contractor</span> Handle in Warrenton?</h2>
        <p class="answer-block">A full-service roofing contractor manages every phase of your roof's lifecycle — from initial inspection and material selection through installation, maintenance, and eventual replacement. CPA Roofing &amp; Construction has served as Warrenton's licensed roofing contractor since 1995, completing residential and commercial projects across Warren County and surrounding areas.</p>

        <p>Our roofing contractor services begin with a free on-site inspection. We document the condition of your decking, underlayment, flashing, and existing surface material, then provide a written scope of work with itemized costs. Warrenton homeowners near the Highway 47 and I-70 interchange deal with above-average wind exposure, so we pay close attention to fastener patterns and ridge cap integrity in those areas.</p>

        <p>For commercial properties along Veterans Memorial Parkway and the Warrenton industrial corridor, CPA provides flat roof systems including TPO, EPDM, and modified bitumen. Each commercial installation includes a detailed maintenance plan with scheduled inspections at 6-month intervals. Catching small issues early — lifted seams, ponding water, deteriorating pipe boots — prevents the five-figure repair bills that follow undetected leaks.</p>

        <p>CPA Roofing &amp; Construction holds general contractor licensing in the state of Missouri and carries full liability and workers' compensation insurance. We coordinate directly with building inspectors in Warren County to ensure every project meets current IBC and IRC code requirements before final sign-off.</p>
      </div>
      <div class="service-detail__image reveal-left reveal-delay-2">
        <img src="<?php echo $photoBase; ?>1779465581960-gc37j5-40952056_1098160603666506_6435786249973268480_n.jpg" alt="CPA Roofing contractor crew installing a new roof in Warrenton, MO" width="800" height="600" loading="lazy">
      </div>
    </div>

    <div class="service-detail__accent service-detail__accent--tl"></div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     FAQ
     ═══════════════════════════════════════════════════════════════ -->
<section class="section faq-section" aria-label="Frequently asked questions">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Common Questions</span>
      <h2>What Should Warrenton Property Owners <span class="text-accent">Know</span>?</h2>
      <p class="hero-answer">Straightforward answers to the questions Warrenton homeowners and business owners ask most about siding and roofing contractor services. If your question is not listed, reach out for a free consultation.</p>
    </div>

    <div class="faq-list">
<?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?php echo ($i % 3) + 1; ?>" data-animate>
        <h3>
          <span class="faq-icon"><i data-lucide="help-circle" style="width:20px;height:20px"></i></span>
          <?php echo htmlspecialchars($faq['question']); ?>
        </h3>
        <p class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></p>
      </div>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     LAST UPDATED
     ═══════════════════════════════════════════════════════════════ -->
<div class="last-updated">
  Last Updated: <?php echo date('F Y'); ?>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="section page-cta" aria-label="Call to action">
  <div class="container">
    <h2>Ready to Protect Your <span class="text-accent">Warrenton Property</span>?</h2>
    <p>Whether you need new siding, a full roof replacement, or a licensed contractor to assess your building envelope, CPA Roofing &amp; Construction delivers free estimates with zero obligation. <?php echo $yearsInBusiness; ?> years of experience across central Missouri.</p>
    <a href="/contact/" class="btn btn-primary btn-lg">Get Your Free Estimate</a>
<?php if (!empty($phone)): ?>
    <p style="margin-top:var(--space-4);color:rgba(255,255,255,0.7);font-size:var(--font-size-sm);">
      Or call now: <a href="tel:<?php echo phoneLink($phone); ?>" style="color:var(--color-white);font-weight:600;"><?php echo formatPhone($phone); ?></a>
    </p>
<?php endif; ?>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
