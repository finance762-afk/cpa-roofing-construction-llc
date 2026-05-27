<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'Roofing & Construction Services | ' . $siteName . ' | Warrenton, MO';
$pageDescription = 'Explore all 11 roofing, siding, and construction services offered by CPA Roofing & Construction in Warrenton, MO. Licensed since 1995 — residential and commercial. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/';
$currentPage     = 'services';

$heroImage       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/1779465600430-8y0lga-477796834_1135389874947305_1317857861976220959_n.jpg';
$heroImagePreload = $heroImage;

// ── Schema ────────────────────────────────────────────────────
$schemaMarkup = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// ── Services Grid Data ─────────────────────────────────────────
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';

$serviceCards = [
    [
        'name'    => 'New Roof Installation',
        'icon'    => 'home',
        'desc'    => 'Complete roof installations for homes and businesses across Warrenton.',
        'bullets' => ['Shingle, metal & flat options', 'Manufacturer-backed warranties', 'Licensed crews, clean jobsites'],
        'image'   => $photoBase . '1779465600430-8y0lga-477796834_1135389874947305_1317857861976220959_n.jpg',
        'alt'     => 'New roof installation by CPA Roofing in Warrenton, MO',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Roof Repairs',
        'icon'    => 'wrench',
        'desc'    => 'Fast leak fixes and damage repair to keep your property protected.',
        'bullets' => ['Same-day emergency response', 'Leak detection & flashing repair', 'Extends existing roof life'],
        'image'   => $photoBase . '1779465576127-6yqxml-40685019_1098160703666496_7573720096833536000_n.jpg',
        'alt'     => 'Roof repair work by CPA Roofing crew in Warrenton',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Commercial Roofing',
        'icon'    => 'building-2',
        'desc'    => 'Large-scale roofing for warehouses, offices, and retail properties.',
        'bullets' => ['Flat, low-slope & pitched systems', 'Minimal business disruption', 'Code-compliant installations'],
        'image'   => $photoBase . '1779465579158-pcldjp-40867936_1098158017000098_6263165007471575040_n.jpg',
        'alt'     => 'Commercial roofing project completed in Warrenton, MO',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Metal Roofing',
        'icon'    => 'shield',
        'desc'    => 'Standing seam and corrugated metal roofs built for 40+ year service life.',
        'bullets' => ['Wind & hail resistant', 'Energy-efficient reflective coatings', '40–60 year expected lifespan'],
        'image'   => $photoBase . '1779465576889-vjcrs5-40823370_1098160710333162_8459667473703108608_n.jpg',
        'alt'     => 'Metal roofing installation by CPA Roofing in Warrenton',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'TPO Roofing',
        'icon'    => 'cloud-rain',
        'desc'    => 'Energy-efficient TPO membrane systems for commercial flat roofs.',
        'bullets' => ['UV & chemical resistant', 'Heat-welded seams, zero leaks', 'Reduces cooling costs 15–30%'],
        'image'   => $photoBase . '1779465577268-98r6b7-40840070_1098160793666487_8097673370704805888_n.jpg',
        'alt'     => 'TPO roofing system installed on commercial building in Warrenton',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Insurance Roofing Bids',
        'icon'    => 'file-text',
        'desc'    => 'We handle the insurance paperwork so you focus on your family.',
        'bullets' => ['Free storm damage inspections', 'Direct adjuster coordination', 'Maximize your claim payout'],
        'image'   => $photoBase . '1779465578117-ahpx0j-40855264_1098160506999849_1343386300408922112_n.jpg',
        'alt'     => 'Insurance roofing bid assessment by CPA Roofing',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Roof Coatings',
        'icon'    => 'droplets',
        'desc'    => 'Protective coatings that extend roof life and improve energy efficiency.',
        'bullets' => ['UV & weather protection', 'Reflective surface cuts cooling costs', 'Adds 10–15 years to existing roof'],
        'image'   => $photoBase . '1779465578609-shsq41-40858892_1098161103666456_815438685477535744_n.jpg',
        'alt'     => 'Roof coating application by CPA Roofing in Warrenton',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Roof Tear-Offs',
        'icon'    => 'hard-hat',
        'desc'    => 'Complete removal of old roofing in preparation for new installation.',
        'bullets' => ['Safe debris removal & disposal', 'Deck inspection & repair', 'Required for most replacements'],
        'image'   => $photoBase . '1779465578896-mr2wol-40860478_1098160656999834_1217212397614268416_n.jpg',
        'alt'     => 'Roof tear-off in progress by CPA Roofing crew',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Commercial Roof Repairs',
        'icon'    => 'tool',
        'desc'    => 'Specialized repairs for flat and low-slope commercial buildings.',
        'bullets' => ['Emergency leak repair', 'Membrane & flashing fixes', 'Preventative maintenance plans'],
        'image'   => $photoBase . '1779465579158-pcldjp-40867936_1098158017000098_6263165007471575040_n.jpg',
        'alt'     => 'Commercial roof repair by CPA Roofing in Warrenton',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Siding Installation & Repair',
        'icon'    => 'hammer',
        'desc'    => 'Vinyl, fiber cement, and engineered wood siding for lasting curb appeal.',
        'bullets' => ['Storm & rot resistant materials', 'Improves insulation & value', 'Color-matched to your home'],
        'image'   => $photoBase . '1779465577564-f2w9k5-40841389_1098160560333177_1829770370060648448_n.jpg',
        'alt'     => 'Siding installation by CPA Roofing in Warrenton',
        'link'    => '/services/additional-services/',
    ],
    [
        'name'    => 'Roofing Contractor Services',
        'icon'    => 'check-circle',
        'desc'    => 'Full-service roofing solutions for residential and commercial properties.',
        'bullets' => ['Inspections & maintenance plans', 'All roof types & materials', 'Code-compliant work guaranteed'],
        'image'   => $photoBase . '1779465579437-is3xq9-40882613_1098161186999781_153905346983755776_n.jpg',
        'alt'     => 'CPA Roofing contractor services in Warrenton, MO',
        'link'    => '/services/additional-services/',
    ],
];
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
<?php echo $schemaMarkup; ?>
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

/* ── Services Listing Layout ──────────────────────────────────── */
.services-intro {
  text-align: center;
  margin-bottom: var(--space-12);
}
.services-intro p {
  max-width: 640px;
  margin: 0 auto;
  color: var(--color-gray);
}

/* ── CTA Section ──────────────────────────────────────────────── */
.page-cta {
  background: var(--color-dark);
  text-align: center;
}
.page-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.page-cta p { color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto var(--space-8); }

@media (max-width: 768px) {
  .inner-hero { min-height: 40vh; }
}
</style>

<!-- ═══════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="inner-hero" style="background-image: url('<?= htmlspecialchars($heroImage) ?>');" aria-label="Services page hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>Services</span>
    </nav>
    <h1>Roofing &amp; Construction <span class="text-accent">Services</span> in Warrenton, MO</h1>
    <p class="hero-answer">CPA Roofing & Construction, LLC provides 11 residential and commercial services across central and eastern Missouri. From full roof replacements to siding installation, every project is handled by licensed crews with <?= $yearsInBusiness ?> years of experience. Browse our complete service list below.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     ALL SERVICES GRID
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="All services">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">Roofing &amp; Construction</span> Services Does CPA Offer in Warrenton?</h2>
      <p class="hero-answer">CPA Roofing & Construction delivers residential and commercial roofing and siding services across central Missouri. Each service below links to a detailed page with scope, process, and pricing guidance.</p>
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
          <a href="<?= htmlspecialchars($svc['link']) ?>" class="service-card__cta">Learn more</a>
        </div>
      </article>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     CLOSING CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="page-cta" aria-label="Call to action">
  <div class="container">
    <h2>Which Service Do You Need for Your <span class="text-accent">Warrenton Property</span>?</h2>
    <p class="answer-block">Whether it's a leaking roof, new siding, or full commercial re-roof, CPA Roofing & Construction has handled thousands of projects since 1995. Get a free estimate with zero obligation — we respond within 48 hours.</p>
    <a href="/contact/" class="btn btn-primary btn-lg">Get Your Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
