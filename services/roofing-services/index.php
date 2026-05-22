<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'Roofing Services Warrenton MO | CPA Roofing & Construction';
$pageDescription = 'CPA Roofing & Construction offers 9 roofing services in Warrenton, MO — commercial roofing, roof repairs, TPO, metal, coatings, tear-offs, and insurance bids. Licensed since 1995.';
$canonicalUrl    = $siteUrl . '/services/roofing-services/';
$currentPage     = 'services';

$photoBase       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';
$heroImage       = $photoBase . '1779465600430-8y0lga-477796834_1135389874947305_1317857861976220959_n.jpg';
$heroImagePreload = $heroImage;

// ── Schema: BreadcrumbList + Service ──────────────────────────
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Roofing Services', 'item' => $siteUrl . '/services/roofing-services/'],
    ],
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Roofing Services',
    'description' => 'Comprehensive residential and commercial roofing services in Warrenton, MO including new installations, repairs, tear-offs, TPO, metal roofing, coatings, and insurance bid coordination.',
    'url' => $siteUrl . '/services/roofing-services/',
    'areaServed' => [
        '@type' => 'City',
        'name' => 'Warrenton',
        'containedInPlace' => ['@type' => 'State', 'name' => 'Missouri'],
    ],
    'provider' => [
        '@type' => 'RoofingContractor',
        '@id' => $siteUrl . '/#organization',
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Roofing Services',
        'itemListElement' => [
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Commercial Roofing']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Roof Repairs']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Commercial Roof Repairs']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Insurance Roofing Bids']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'New Roof Installation']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Roof Tear-Offs']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'TPO Roofing']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Metal Roofing']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Roof Coatings']],
        ],
    ],
];

// ── FAQ Data ──────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How long does a full roof replacement take in Warrenton, MO?',
        'answer'   => 'Most residential roof replacements in Warrenton take 1–3 days depending on roof size, pitch, and weather conditions. Commercial projects with TPO or metal systems may require 5–10 business days. CPA Roofing schedules work around Missouri weather patterns to minimize delays.',
    ],
    [
        'question' => 'Does CPA Roofing handle insurance claims for storm damage?',
        'answer'   => 'Yes. CPA Roofing provides free storm damage inspections and prepares detailed insurance roofing bids. We coordinate directly with your adjuster, document all damage with photos, and advocate for full coverage of necessary repairs or replacement.',
    ],
    [
        'question' => 'What roofing materials work best for Warrenton\'s climate?',
        'answer'   => 'Warrenton experiences hot summers, cold winters, and severe storms. Architectural shingles rated for 130 mph winds are the most popular residential choice. For commercial properties, TPO membrane and metal roofing handle temperature swings and hail better than traditional built-up systems.',
    ],
    [
        'question' => 'How much does a new roof cost in Warrenton, MO?',
        'answer'   => 'Residential asphalt shingle roofs in Warrenton typically range from $8,000–$15,000 for an average home. Metal roofing runs $12,000–$25,000. TPO commercial roofing is priced per square foot, usually $5–$9. CPA Roofing provides free estimates with transparent line-item pricing.',
    ],
    [
        'question' => 'Can CPA Roofing repair a roof instead of replacing it?',
        'answer'   => 'Absolutely. If damage is limited to a small area — missing shingles, minor leaks, or damaged flashing — a repair is often the better investment. CPA Roofing inspects the full roof deck and provides an honest recommendation on whether repair or replacement makes financial sense.',
    ],
    [
        'question' => 'Is CPA Roofing licensed and insured in Missouri?',
        'answer'   => 'Yes. CPA Roofing & Construction, LLC has been a licensed contractor in Missouri since 1995. We carry full general liability and workers compensation insurance. Proof of insurance is available on request before any project begins.',
    ],
];

$faqSchema = generateFAQSchema($faqs);

// ── Service Cards Data ────────────────────────────────────────
$serviceCards = [
    [
        'name'    => 'Commercial Roofing',
        'icon'    => 'building-2',
        'desc'    => 'Large-scale roofing for warehouses, offices, and retail properties.',
        'bullets' => ['Flat, low-slope & pitched systems', 'Minimal business disruption', 'Code-compliant installations'],
        'image'   => $photoBase . '1779465576661-1pcsmi-40796539_1098160440333189_6465900146881200128_n.jpg',
        'alt'     => 'Commercial roofing project completed by CPA Roofing in Warrenton, MO',
    ],
    [
        'name'    => 'Roof Repairs',
        'icon'    => 'wrench',
        'desc'    => 'Fast leak fixes and damage repair to keep your property protected.',
        'bullets' => ['Same-day emergency response', 'Leak detection & flashing repair', 'Extends existing roof life'],
        'image'   => $photoBase . '1779465576127-6yqxml-40685019_1098160703666496_7573720096833536000_n.jpg',
        'alt'     => 'Roof repair work by CPA Roofing crew in Warrenton, MO',
    ],
    [
        'name'    => 'Commercial Roof Repairs',
        'icon'    => 'tool',
        'desc'    => 'Specialized repairs for flat and low-slope commercial buildings.',
        'bullets' => ['Emergency leak repair', 'Membrane & flashing fixes', 'Preventative maintenance plans'],
        'image'   => $photoBase . '1779465579158-pcldjp-40867936_1098158017000098_6263165007471575040_n.jpg',
        'alt'     => 'Commercial roof repair by CPA Roofing in Warrenton, MO',
    ],
    [
        'name'    => 'Insurance Roofing Bids',
        'icon'    => 'file-text',
        'desc'    => 'We handle the insurance paperwork so you focus on your family.',
        'bullets' => ['Free storm damage inspections', 'Direct adjuster coordination', 'Maximize your claim payout'],
        'image'   => $photoBase . '1779465578117-ahpx0j-40855264_1098160506999849_1343386300408922112_n.jpg',
        'alt'     => 'Insurance roofing bid assessment by CPA Roofing in Warrenton',
    ],
    [
        'name'    => 'New Roof Installation',
        'icon'    => 'home',
        'desc'    => 'Complete roof installations for homes and businesses across Warrenton.',
        'bullets' => ['Shingle, metal & flat options', 'Manufacturer-backed warranties', 'Licensed crews, clean jobsites'],
        'image'   => $photoBase . '1779465600430-8y0lga-477796834_1135389874947305_1317857861976220959_n.jpg',
        'alt'     => 'New roof installation by CPA Roofing in Warrenton, MO',
    ],
    [
        'name'    => 'Roof Tear-Offs',
        'icon'    => 'hard-hat',
        'desc'    => 'Complete removal of old roofing before new installation begins.',
        'bullets' => ['Safe debris removal & disposal', 'Deck inspection & repair', 'Required for most replacements'],
        'image'   => $photoBase . '1779465578896-mr2wol-40860478_1098160656999834_1217212397614268416_n.jpg',
        'alt'     => 'Roof tear-off in progress by CPA Roofing crew in Warrenton',
    ],
    [
        'name'    => 'TPO Roofing',
        'icon'    => 'cloud-rain',
        'desc'    => 'Energy-efficient TPO membrane systems for commercial flat roofs.',
        'bullets' => ['UV & chemical resistant', 'Heat-welded seams, zero leaks', 'Reduces cooling costs 15-30%'],
        'image'   => $photoBase . '1779465577268-98r6b7-40840070_1098160793666487_8097673370704805888_n.jpg',
        'alt'     => 'TPO roofing system installed on commercial building in Warrenton, MO',
    ],
    [
        'name'    => 'Metal Roofing',
        'icon'    => 'shield',
        'desc'    => 'Standing seam and corrugated metal roofs built for 40+ year service life.',
        'bullets' => ['Wind & hail resistant', 'Energy-efficient reflective coatings', '40-60 year expected lifespan'],
        'image'   => $photoBase . '1779465576889-vjcrs5-40823370_1098160710333162_8459667473703108608_n.jpg',
        'alt'     => 'Metal roofing installation by CPA Roofing in Warrenton, MO',
    ],
    [
        'name'    => 'Roof Coatings',
        'icon'    => 'droplets',
        'desc'    => 'Protective coatings that extend roof life and improve energy efficiency.',
        'bullets' => ['UV & weather protection', 'Reflective surface cuts cooling costs', 'Adds 10-15 years to existing roof'],
        'image'   => $photoBase . '1779465578609-shsq41-40858892_1098161103666456_815438685477535744_n.jpg',
        'alt'     => 'Roof coating application by CPA Roofing in Warrenton, MO',
    ],
];
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<script type="application/ld+json">
<?php echo json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
<script type="application/ld+json">
<?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<style>
/* ── Inner Page Hero ──────────────────────────────────────────── */
.inner-hero--roofing {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 30%;
  padding: 120px 0 var(--space-16);
}
.inner-hero--roofing::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(26, 26, 46, 0.93) 0%, rgba(245, 86, 0, 0.7) 55%, rgba(0, 94, 245, 0.5) 100%);
}
.inner-hero--roofing::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.inner-hero--roofing .container {
  position: relative;
  z-index: 2;
}
.inner-hero--roofing h1 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  max-width: 700px;
}
.inner-hero--roofing .hero-answer {
  color: rgba(255,255,255,0.9);
  max-width: 640px;
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.inner-hero--roofing .breadcrumb {
  display: flex;
  gap: var(--space-2);
  align-items: center;
  font-size: var(--font-size-sm);
  color: rgba(255,255,255,0.7);
  margin-bottom: var(--space-4);
}
.inner-hero--roofing .breadcrumb a { color: rgba(255,255,255,0.7); }
.inner-hero--roofing .breadcrumb a:hover { color: var(--color-white); }
.inner-hero--roofing .breadcrumb-sep { opacity: 0.5; }

/* ── Hero Badge Row ───────────────────────────────────────────── */
.hero-badges {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: rgba(255,255,255,0.12);
  backdrop-filter: blur(6px);
  border: 1px solid rgba(255,255,255,0.15);
  border-radius: var(--radius-full);
  padding: var(--space-2) var(--space-4);
  color: var(--color-white);
  font-size: var(--font-size-sm);
  font-weight: 600;
}
.hero-badge i, .hero-badge svg {
  width: 16px;
  height: 16px;
  color: var(--color-primary);
}

/* ── Services Grid Section ────────────────────────────────────── */
.roofing-services-section {
  padding: var(--space-16) 0;
}
.roofing-services-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
}
.roofing-services-section .section-title h2 {
  margin-bottom: var(--space-4);
}
.roofing-services-section .hero-answer {
  max-width: 640px;
  margin: 0 auto;
  color: var(--color-gray);
  line-height: 1.7;
}

/* ── Section Dividers ─────────────────────────────────────────── */
.divider-wave {
  position: relative;
  overflow: hidden;
  line-height: 0;
  margin-top: -1px;
}
.divider-wave svg {
  display: block;
  width: 100%;
  height: 60px;
}
.divider-angle {
  position: relative;
  overflow: hidden;
  line-height: 0;
  margin-top: -1px;
}
.divider-angle svg {
  display: block;
  width: 100%;
  height: 50px;
}

/* ── Service Detail Sections ──────────────────────────────────── */
.service-detail {
  padding: var(--space-16) 0;
}
.service-detail--alt {
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
.service-detail__content h2 {
  margin-bottom: var(--space-4);
  color: var(--color-dark);
}
.service-detail__content .answer-block {
  font-size: var(--font-size-lg);
  line-height: 1.7;
  color: var(--color-gray-dark);
  margin-bottom: var(--space-6);
  padding-left: var(--space-4);
  border-left: 3px solid var(--color-primary);
}
.service-detail__content p {
  color: var(--color-gray-dark);
  line-height: 1.7;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}
.service-detail__image {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.service-detail__image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  aspect-ratio: 4 / 3;
}

/* ── Identity Highlight ───────────────────────────────────────── */
.identity-callout {
  display: flex;
  align-items: flex-start;
  gap: var(--space-4);
  background: var(--color-card-tint-1);
  border-radius: var(--radius-md);
  padding: var(--space-6);
  margin-top: var(--space-4);
}
.identity-callout i, .identity-callout svg {
  width: 24px;
  height: 24px;
  color: var(--color-primary);
  flex-shrink: 0;
  margin-top: 2px;
}
.identity-callout p {
  margin: 0;
  font-weight: 500;
}

/* ── FAQ Section ──────────────────────────────────────────────── */
.faq-section {
  padding: var(--space-16) 0;
  background: var(--color-light);
}
.faq-section .section-title {
  text-align: center;
  margin-bottom: var(--space-12);
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
  border: 1px solid var(--color-gray-light);
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
.faq-item h3::before {
  content: '';
  display: inline-block;
  width: 8px;
  height: 8px;
  background: var(--color-primary);
  border-radius: 50%;
  flex-shrink: 0;
  margin-top: 8px;
}
.faq-item p {
  color: var(--color-gray-dark);
  line-height: 1.7;
  max-width: 65ch;
  padding-left: calc(8px + var(--space-3));
}

/* ── CTA Section ──────────────────────────────────────────────── */
.page-cta--roofing {
  background: var(--color-dark);
  padding: var(--space-16) 0;
  text-align: center;
  position: relative;
  overflow: hidden;
}
.page-cta--roofing::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -10%;
  width: 50%;
  height: 200%;
  background: radial-gradient(circle, rgba(245, 86, 0, 0.08) 0%, transparent 70%);
  pointer-events: none;
}
.page-cta--roofing h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
  position: relative;
}
.page-cta--roofing p {
  color: rgba(255,255,255,0.8);
  max-width: 600px;
  margin: 0 auto var(--space-8);
  line-height: 1.7;
  position: relative;
}
.page-cta--roofing .btn {
  position: relative;
}

/* ── Floating Decorative Accent ───────────────────────────────── */
.service-detail {
  position: relative;
  overflow: hidden;
}
.floating-accent--dot {
  position: absolute;
  width: 180px;
  height: 180px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(245, 86, 0, 0.06) 0%, transparent 70%);
  pointer-events: none;
  z-index: 0;
}
.service-detail__grid {
  position: relative;
  z-index: 1;
}

/* ── Last Updated Stamp ───────────────────────────────────────── */
.last-updated {
  text-align: center;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  padding: var(--space-4) 0;
}

/* ── Responsive ───────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .service-detail__grid,
  .service-detail__grid--reverse {
    grid-template-columns: 1fr;
    gap: var(--space-8);
    direction: ltr;
  }
  .service-detail__image {
    max-height: 350px;
  }
}
@media (max-width: 768px) {
  .inner-hero--roofing {
    min-height: 45vh;
    padding: 100px 0 var(--space-12);
  }
  .hero-badges {
    flex-direction: column;
  }
  .divider-wave svg,
  .divider-angle svg {
    height: 35px;
  }
}
@media (max-width: 600px) {
  .inner-hero--roofing {
    min-height: 40vh;
  }
  .identity-callout {
    flex-direction: column;
  }
}
</style>

<!-- ═══════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="inner-hero--roofing" style="background-image: url('<?= htmlspecialchars($heroImage) ?>');" aria-label="Roofing services hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Roofing Services</span>
    </nav>
    <h1>Roofing Services in <span class="text-accent">Warrenton, MO</span></h1>
    <p class="hero-answer">CPA Roofing &amp; Construction is a licensed Missouri roofing contractor based in Warrenton, serving residential and commercial property owners since 1995. We handle everything from emergency leak repairs to full roof replacements, TPO membrane installations, and insurance claim coordination across central and eastern Missouri.</p>
    <div class="hero-badges">
      <span class="hero-badge"><i data-lucide="shield-check"></i> Licensed &amp; Insured</span>
      <span class="hero-badge"><i data-lucide="clock"></i> <?= $yearsInBusiness ?>+ Years</span>
      <span class="hero-badge"><i data-lucide="badge-check"></i> Free Estimates</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     WAVE DIVIDER
     ═══════════════════════════════════════════════════════════════ -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 30 C360 60 720 0 1080 30 C1260 45 1380 25 1440 30 L1440 60 L0 60 Z" fill="var(--color-white, #fff)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICE CARDS GRID — 9 ROOFING SERVICES
     ═══════════════════════════════════════════════════════════════ -->
<section class="roofing-services-section" aria-label="Roofing services overview">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">Roofing Services</span> Does CPA Offer in Warrenton?</h2>
      <p class="hero-answer">CPA Roofing &amp; Construction delivers nine distinct roofing services — from new installations and tear-offs to specialized TPO, metal, and coating systems. Each project is managed by licensed crews who have protected Warrenton properties for over <?= $yearsInBusiness ?> years.</p>
    </div>

    <div class="services-grid">
<?php
$tints = [1, 2, 3];
foreach ($serviceCards as $i => $svc):
    $tint  = $tints[$i % 3];
    $delay = ($i % 3) + 1;
?>
      <article class="service-card-with-image card-tint-<?= $tint ?> reveal-up reveal-delay-<?= $delay ?>" data-animate>
        <div class="service-card__image">
          <img src="<?= htmlspecialchars($svc['image']) ?>" alt="<?= htmlspecialchars($svc['alt']) ?>" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="<?= htmlspecialchars($svc['icon']) ?>"></i></div>
          <h3><?= htmlspecialchars($svc['name']) ?></h3>
          <p class="service-card__desc"><?= htmlspecialchars($svc['desc']) ?></p>
          <ul>
<?php foreach ($svc['bullets'] as $bullet): ?>
            <li><?= htmlspecialchars($bullet) ?></li>
<?php endforeach; ?>
          </ul>
          <a href="#<?= htmlspecialchars(getServiceSlug($svc['name'])) ?>" class="service-card__cta">Learn more</a>
        </div>
      </article>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     ANGLE DIVIDER
     ═══════════════════════════════════════════════════════════════ -->
<div class="divider-angle">
  <svg viewBox="0 0 1440 50" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1440,50 0,50" fill="var(--color-light, #f8f9fa)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     DETAILED SERVICE BREAKDOWNS
     ═══════════════════════════════════════════════════════════════ -->

<!-- 1. Commercial Roofing -->
<section class="service-detail service-detail--alt" id="commercial-roofing" aria-label="Commercial roofing details">
  <div class="floating-accent--dot" style="top: -40px; right: -60px;" aria-hidden="true"></div>
  <div class="container">
    <div class="service-detail__grid reveal-up" data-animate>
      <div class="service-detail__content">
        <h2>What Does Commercial Roofing Include in Warrenton?</h2>
        <p class="answer-block">Commercial roofing covers full-scale installations, maintenance, and repairs for business properties throughout Warrenton and Warren County. CPA Roofing works with TPO, EPDM, modified bitumen, and standing seam metal systems — each selected based on building size, slope, and budget requirements.</p>
        <p>Warrenton businesses along Highway 47 and the I-70 corridor face unique roofing challenges. Large footprint buildings like the warehouses near the Warren County Fairgrounds need roofing systems that handle significant thermal expansion, pooling water, and wind uplift. CPA Roofing sizes and installs commercial systems to meet these specific load and drainage requirements.</p>
        <p>Every commercial project includes a pre-installation structural assessment, manufacturer warranty registration, and a post-install inspection report. We schedule work during low-traffic hours to minimize disruption to your daily operations, and our crews clean the jobsite at the end of each workday.</p>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465576661-1pcsmi-40796539_1098160440333189_6465900146881200128_n.jpg" alt="CPA Roofing crew completing a commercial roofing project in Warrenton, MO" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 2. Roof Repairs -->
<section class="service-detail" id="roof-repairs" aria-label="Roof repairs details">
  <div class="container">
    <div class="service-detail__grid service-detail__grid--reverse reveal-left" data-animate>
      <div class="service-detail__content">
        <h2>How Does CPA Handle Roof Repairs in Warrenton, MO?</h2>
        <p class="answer-block">Roof repairs range from single-shingle replacements to multi-square patches, flashing reseals, and valley rework. CPA Roofing diagnoses the root cause of every leak before making a repair, which prevents recurring damage and wasted money on repeated fixes.</p>
        <p>Missouri weather hits roofs hard. Between spring hailstorms rolling off the Ozark foothills, summer heat cycling above 95 degrees, and ice dam formation during January cold snaps, roofs in the Warrenton area degrade faster than national averages. CPA Roofing's repair crews carry inventory of the most common shingle profiles and colors so minor repairs can often be completed same-day.</p>
        <p>For more extensive damage, we provide a documented inspection with photos, a written scope of repair, and transparent pricing. If the repair estimate exceeds 40% of replacement cost, we recommend a full replacement instead — and we'll credit the inspection fee toward your new roof.</p>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465576127-6yqxml-40685019_1098160703666496_7573720096833536000_n.jpg" alt="Roof repair in progress by CPA Roofing in Warrenton" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 3. Commercial Roof Repairs -->
<section class="service-detail service-detail--alt" id="commercial-roof-repairs" aria-label="Commercial roof repairs details">
  <div class="floating-accent--dot" style="bottom: -30px; left: -50px;" aria-hidden="true"></div>
  <div class="container">
    <div class="service-detail__grid reveal-right" data-animate>
      <div class="service-detail__content">
        <h2>When Should Warrenton Business Owners Call for Commercial Roof Repairs?</h2>
        <p class="answer-block">Commercial roof repairs address leaks, membrane punctures, ponding water, and flashing failures on flat and low-slope business roofs. CPA Roofing responds within 24 hours for active leaks and offers scheduled preventative maintenance contracts for long-term roof health.</p>
        <p>Flat commercial roofs common on Warrenton storefronts and industrial buildings along the Highway 47 commercial corridor develop problems that sloped residential roofs rarely face. Ponding water from clogged drains, UV degradation of membrane seams, and HVAC unit penetration leaks are the three most common issues our crews repair each year.</p>
        <p>CPA Roofing carries EPDM and TPO patch materials, liquid-applied sealants, and sheet metal for flashing repairs on every service truck. For buildings with recurring problems, our preventative maintenance program includes biannual inspections, drain clearing, and seam re-welding at a fraction of emergency repair cost.</p>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465579158-pcldjp-40867936_1098158017000098_6263165007471575040_n.jpg" alt="Commercial roof repair on a Warrenton business building" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 4. Insurance Roofing Bids -->
<section class="service-detail" id="insurance-roofing-bids" aria-label="Insurance roofing bids details">
  <div class="container">
    <div class="service-detail__grid service-detail__grid--reverse reveal-up" data-animate>
      <div class="service-detail__content">
        <h2>How Do Insurance Roofing Bids Work in Warrenton?</h2>
        <p class="answer-block">Insurance roofing bids start with a free storm damage inspection. CPA Roofing documents all hail, wind, and debris damage with photos and measurements, then prepares a detailed bid that matches insurance company formatting requirements so your claim processes without delays.</p>
        <p>Warren County averages 3-5 significant hail events per year, and Warrenton sits in the path of storm systems that track northeast along the Missouri River valley. After a major storm, property owners have a limited window to file claims. CPA Roofing prioritizes post-storm inspections and can typically have your bid submitted to your insurance carrier within 72 hours of initial contact.</p>
        <p>We work with all major insurance companies and understand Xactimate pricing — the estimating software most adjusters use. This means our bids align with what your insurance company expects to see, reducing back-and-forth negotiations. If your adjuster disputes scope, we attend the re-inspection on your behalf at no additional charge.</p>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465578117-ahpx0j-40855264_1098160506999849_1343386300408922112_n.jpg" alt="Insurance roofing bid documentation by CPA Roofing in Warrenton" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 5. New Roof Installation -->
<section class="service-detail service-detail--alt" id="new-roof-installation" aria-label="New roof installation details">
  <div class="container">
    <div class="service-detail__grid reveal-left" data-animate>
      <div class="service-detail__content">
        <h2>What Goes Into a New Roof Installation in Warrenton?</h2>
        <p class="answer-block">A new roof installation by CPA Roofing includes tear-off of existing materials, deck inspection and repair, ice-and-water shield installation in valleys and eaves, underlayment, shingle or panel installation, ridge vent placement, and full cleanup — typically completed in 1-3 days for residential properties.</p>
        <p>Warrenton homes built in the 1970s through 1990s — many in neighborhoods like Pendleton Hills and along Highway W — are reaching the end of their original roof lifespans. CPA Roofing has replaced hundreds of roofs in these areas, and our crews understand the common deck conditions, ventilation deficiencies, and code updates that affect these properties.</p>
        <p>Material selection depends on your budget, aesthetic preference, and performance priorities. We install GAF Timberline, CertainTeed Landmark, Owens Corning Duration, standing seam metal, and corrugated metal panels. Each manufacturer offers different warranty tiers, and we'll walk through the options during your free estimate appointment.</p>
        <div class="identity-callout">
          <i data-lucide="info"></i>
          <p>CPA Roofing &amp; Construction, LLC is a licensed Missouri roofing contractor based in Warrenton, serving residential and commercial clients throughout Warren County and the surrounding region since 1995.</p>
        </div>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465600430-8y0lga-477796834_1135389874947305_1317857861976220959_n.jpg" alt="New roof installation completed by CPA Roofing in Warrenton, MO" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 6. Roof Tear-Offs -->
<section class="service-detail" id="roof-tear-offs" aria-label="Roof tear-offs details">
  <div class="container">
    <div class="service-detail__grid service-detail__grid--reverse reveal-right" data-animate>
      <div class="service-detail__content">
        <h2>Why Are Roof Tear-Offs Necessary Before Replacement?</h2>
        <p class="answer-block">Roof tear-offs remove all existing shingles, underlayment, and deteriorated flashing down to the bare deck. This step is critical because it exposes hidden rot, water damage, and structural issues that would be trapped under a new layer — problems common in older Warrenton homes.</p>
        <p>Missouri building code prohibits more than two layers of asphalt shingles. Many Warrenton properties, especially those along Main Street and the historic downtown district, already have two layers from past re-roofs. A tear-off is the only legal option for these homes, and it gives CPA Roofing the chance to inspect and repair the deck before the new system goes on.</p>
        <p>Our tear-off crews use magnetic nail sweepers, tarped debris chutes, and roll-off dumpsters to keep your property clean during the process. We protect landscaping, HVAC units, and vehicles with plywood shields. Most residential tear-offs are completed in a single day, with new installation beginning immediately after deck repairs.</p>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465578896-mr2wol-40860478_1098160656999834_1217212397614268416_n.jpg" alt="Roof tear-off in progress on a Warrenton home" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 7. TPO Roofing -->
<section class="service-detail service-detail--alt" id="tpo-roofing" aria-label="TPO roofing details">
  <div class="floating-accent--dot" style="top: 20px; right: -80px;" aria-hidden="true"></div>
  <div class="container">
    <div class="service-detail__grid reveal-up" data-animate>
      <div class="service-detail__content">
        <h2>What Makes TPO Roofing a Smart Choice for Warrenton Businesses?</h2>
        <p class="answer-block">TPO (thermoplastic polyolefin) roofing is a single-ply membrane system that reflects UV rays, resists chemical exposure, and reduces cooling costs by 15-30%. CPA Roofing installs mechanically attached and fully adhered TPO systems on commercial flat roofs throughout Warrenton and central Missouri.</p>
        <p>Warrenton's summer temperatures regularly exceed 95 degrees, and dark-surfaced roofs on commercial buildings absorb significant solar heat. TPO's reflective white surface reduces rooftop temperatures by up to 50 degrees compared to traditional black EPDM, cutting air conditioning costs for the businesses below. Several warehouse and retail buildings along the Highway 47 corridor have already switched to TPO for this reason.</p>
        <p>CPA Roofing heat-welds every TPO seam with calibrated hot-air equipment, creating bonds stronger than the membrane itself. This eliminates the adhesive failures and seam separations common with glued single-ply systems. Our TPO installations carry manufacturer warranties of 15-25 years depending on membrane thickness, with full labor coverage for the first 10 years.</p>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465577268-98r6b7-40840070_1098160793666487_8097673370704805888_n.jpg" alt="TPO roofing membrane installation on a commercial building in Warrenton" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 8. Metal Roofing -->
<section class="service-detail" id="metal-roofing" aria-label="Metal roofing details">
  <div class="container">
    <div class="service-detail__grid service-detail__grid--reverse reveal-left" data-animate>
      <div class="service-detail__content">
        <h2>How Long Does Metal Roofing Last in Warrenton's Climate?</h2>
        <p class="answer-block">Metal roofing installed by CPA Roofing lasts 40-60 years in Warrenton's climate — three to four times longer than standard asphalt shingles. Standing seam and exposed fastener metal panels handle high winds, hail, and Missouri's freeze-thaw cycles without the cracking and curling that shortens shingle lifespans.</p>
        <p>Metal roofing has grown in popularity across Warren County over the past decade, especially for rural properties and agricultural buildings where longevity outweighs upfront cost. CPA Roofing installs 26-gauge and 24-gauge steel panels with Kynar 500 paint finishes that resist fading for 30+ years. Standing seam panels with concealed fasteners eliminate the leak-prone exposed screws found on older barn-style metal roofs.</p>
        <p>For homeowners in Warrenton's newer subdivisions who want the aesthetic of traditional roofing with metal's durability, we also install stone-coated steel tiles that replicate the look of slate, shake, or barrel tile. These panels carry Class 4 impact ratings — the highest available — and qualify for insurance discounts with most Missouri carriers.</p>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465576889-vjcrs5-40823370_1098160710333162_8459667473703108608_n.jpg" alt="Metal roofing panels installed by CPA Roofing in Warrenton" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 9. Roof Coatings -->
<section class="service-detail service-detail--alt" id="roof-coatings" aria-label="Roof coatings details">
  <div class="container">
    <div class="service-detail__grid reveal-scale" data-animate>
      <div class="service-detail__content">
        <h2>Can Roof Coatings Extend the Life of an Existing Roof?</h2>
        <p class="answer-block">Yes. A professionally applied roof coating adds 10-15 years to an existing commercial or metal roof by sealing micro-cracks, reflecting UV radiation, and waterproofing the surface. CPA Roofing applies silicone, acrylic, and elastomeric coatings based on roof type and exposure conditions in Warrenton.</p>
        <p>Roof coatings are often the most cost-effective solution for Warrenton commercial buildings with aging but structurally sound roofs. Instead of a full tear-off and replacement — which can run $8-$15 per square foot — a coating application costs $2-$5 per square foot and can be completed without disrupting building operations. Several property owners near the Warrenton Premium Outlets and along Veterans Memorial Parkway have used coatings to bridge the gap until a full replacement fits their capital budget.</p>
        <p>CPA Roofing pressure-washes and primes the existing surface before coating application. We apply material in two passes at 90-degree angles to ensure uniform coverage and consistent mil thickness. Silicone coatings perform best on ponding-prone flat roofs because they don't break down in standing water, while acrylic coatings are ideal for sloped metal roofs that need UV protection and color restoration.</p>
      </div>
      <div class="service-detail__image">
        <img src="<?= htmlspecialchars($photoBase) ?>1779465578609-shsq41-40858892_1098161103666456_815438685477535744_n.jpg" alt="Roof coating application on a commercial building in Warrenton, MO" width="800" height="600" loading="lazy">
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     FAQ SECTION
     ═══════════════════════════════════════════════════════════════ -->
<section class="faq-section" aria-label="Frequently asked questions about roofing in Warrenton">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Common Questions</span>
      <h2>What Do Warrenton <span class="text-accent">Property Owners</span> Ask About Roofing?</h2>
      <p class="hero-answer">Answers to the most common roofing questions from homeowners and business owners in Warrenton, MO and Warren County.</p>
    </div>

    <div class="faq-list">
<?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up reveal-delay-<?= ($i % 3) + 1 ?>" data-animate>
        <h3><?= htmlspecialchars($faq['question']) ?></h3>
        <p><?= htmlspecialchars($faq['answer']) ?></p>
      </div>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     WAVE DIVIDER — CTA
     ═══════════════════════════════════════════════════════════════ -->
<div class="divider-wave">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0 30 C360 0 720 60 1080 30 C1260 15 1380 35 1440 30 L1440 60 L0 60 Z" fill="var(--color-dark, #1a1a2e)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     CLOSING CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="page-cta--roofing" aria-label="Call to action">
  <div class="container">
    <h2>Which Roofing Service Does Your <span class="text-accent">Warrenton Property</span> Need?</h2>
    <p class="answer-block">Whether you need a single shingle replaced or a complete commercial re-roof, CPA Roofing &amp; Construction has handled thousands of roofing projects across Warren County since 1995. Get a free estimate with zero obligation — we respond within 48 hours.</p>
    <a href="/contact/" class="btn btn-primary btn-lg">Get Your Free Estimate</a>
<?php if (!empty($phone)): ?>
    <p style="color: rgba(255,255,255,0.6); margin-top: var(--space-4); font-size: var(--font-size-sm); position: relative;">Or call directly: <a href="tel:<?= phoneLink($phone) ?>" style="color: var(--color-white); font-weight: 600;"><?= formatPhone($phone) ?></a></p>
<?php endif; ?>
  </div>
</section>


<!-- ── Last Updated ───────────────────────────────────────────── -->
<p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
