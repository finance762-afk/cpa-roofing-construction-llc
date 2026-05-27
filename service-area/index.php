<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'Roofing & Construction Services in Warrenton, MO & Surrounding Areas | ' . $siteName;
$pageDescription = 'CPA Roofing & Construction serves Warrenton, MO and a 50-mile radius including Wright City, Wentzville, Troy, Moscow Mills, and Warren County. Licensed roofer since 1995 — free estimates 7 days a week.';
$canonicalUrl    = $siteUrl . '/service-area/';
$currentPage     = 'service-area';

$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';

$heroImage       = $photoBase . '1779465599787-97fu9k-41284003_1098160750333158_5743105404921970688_n.jpg';
$heroImagePreload = $heroImage;

// ── Schema ────────────────────────────────────────────────────
$schemaMarkup = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Area', 'item' => $siteUrl . '/service-area/'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// ── Community Data ────────────────────────────────────────────
$communities = [
    [
        'name' => 'Warrenton',
        'icon' => 'home',
        'desc' => 'Our home base in Warren County. CPA Roofing has been headquartered in Warrenton since 1995, delivering residential and commercial roofing and siding services throughout the 63383 ZIP code. From historic downtown properties to newer developments along Highway 47, we know every neighborhood.',
    ],
    [
        'name' => 'Wright City',
        'icon' => 'building-2',
        'desc' => 'Just 10 miles east on I-70, Wright City has grown rapidly with new residential subdivisions and commercial development. CPA handles roofing for both new construction and existing homes throughout the Wright City area, including storm damage repairs after Missouri severe weather season.',
    ],
    [
        'name' => 'Wentzville',
        'icon' => 'map-pin',
        'desc' => 'One of the fastest-growing cities in Missouri, Wentzville sees constant new construction and aging roofs that need replacement. CPA provides commercial and residential roofing throughout Wentzville and the surrounding St. Charles County border, from Pearce Boulevard to the I-70/I-64 interchange.',
    ],
    [
        'name' => 'Troy',
        'icon' => 'shield',
        'desc' => 'The Lincoln County seat sits north of Warrenton along Highway 61. Troy properties face the same hail and wind exposure as Warren County. CPA delivers roof repairs, full replacements, and insurance claim support to Troy homeowners and businesses year-round.',
    ],
    [
        'name' => 'Moscow Mills',
        'icon' => 'hammer',
        'desc' => 'Located between Troy and Wentzville in Lincoln County, Moscow Mills is a growing community where CPA provides roofing contractor services and siding installation. Our crews are familiar with the local building codes and subdivision requirements.',
    ],
    [
        'name' => 'Jonesburg',
        'icon' => 'wrench',
        'desc' => 'West of Warrenton in Montgomery County, Jonesburg sits along the I-70 corridor where severe storms frequently produce hail and straight-line winds. CPA responds quickly to Jonesburg storm damage calls and handles the full insurance bid process from inspection to final repair.',
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
  background: linear-gradient(135deg, rgba(26, 26, 46, 0.92) 0%, rgba(245, 86, 0, 0.7) 60%, rgba(0, 94, 245, 0.5) 100%);
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

/* ── Coverage Overview ────────────────────────────────────────── */
.coverage-overview {
  text-align: center;
}
.coverage-overview h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.coverage-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
}
.coverage-stat {
  text-align: center;
}
.coverage-stat-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 900;
  color: var(--color-primary);
  line-height: 1;
}
.coverage-stat-label {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin-top: var(--space-2);
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ── Community Cards ──────────────────────────────────────────── */
.community-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.community-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.community-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.community-card-header {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  margin-bottom: var(--space-4);
}
.community-icon {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: rgba(245, 86, 0, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
  flex-shrink: 0;
}
.community-icon i, .community-icon svg {
  width: 22px;
  height: 22px;
}
.community-card h3 {
  font-size: var(--font-size-xl);
  color: var(--color-dark);
  margin: 0;
}
.community-card p {
  color: var(--color-gray-dark);
  font-size: var(--font-size-sm);
  line-height: 1.65;
  margin: 0;
}

/* ── Additional Areas ─────────────────────────────────────────── */
.additional-areas {
  text-align: center;
}
.area-pill-grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.area-pill {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-2) var(--space-5);
  border-radius: var(--radius-full);
  font-size: var(--font-size-sm);
  font-weight: 500;
  color: var(--color-dark);
}
.area-pill i, .area-pill svg {
  width: 14px;
  height: 14px;
  color: var(--color-primary);
}

/* ── Services Available ───────────────────────────────────────── */
.area-services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-4);
}
.area-service-item {
  display: flex;
  align-items: center;
  gap: var(--space-3);
  padding: var(--space-4) var(--space-5);
  border-radius: var(--radius-md);
  transition: transform var(--transition-fast);
}
.area-service-item:hover {
  transform: translateX(4px);
}
.area-service-item i, .area-service-item svg {
  width: 20px;
  height: 20px;
  color: var(--color-accent);
  flex-shrink: 0;
}
.area-service-item span {
  font-size: var(--font-size-sm);
  color: var(--color-dark);
  font-weight: 500;
}

/* ── Local Conditions ─────────────────────────────────────────── */
.conditions-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-8);
}
.condition-card {
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.condition-icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  display: flex;
  align-items: center;
  justify-content: center;
}
.condition-icon i, .condition-icon svg {
  width: 24px;
  height: 24px;
}
.condition-card h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
  color: var(--color-dark);
}
.condition-card p {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  margin: 0;
  line-height: 1.6;
}

/* ── CTA Section ──────────────────────────────────────────────── */
.page-cta {
  background: var(--color-dark);
  text-align: center;
}
.page-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.page-cta p { color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto var(--space-8); }

/* ── Dividers ─────────────────────────────────────────────────── */
.divider-wave svg,
.divider-angle svg {
  display: block;
  width: 100%;
  height: 60px;
}
.divider-wave, .divider-angle {
  position: relative;
  z-index: 3;
  line-height: 0;
  margin-top: -1px;
}

/* ── Responsive ───────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .community-grid { grid-template-columns: repeat(2, 1fr); }
  .area-services-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .inner-hero { min-height: 40vh; }
  .coverage-stats { grid-template-columns: repeat(2, 1fr); }
  .conditions-grid { grid-template-columns: 1fr; }
}
@media (max-width: 600px) {
  .community-grid { grid-template-columns: 1fr; }
  .area-services-grid { grid-template-columns: 1fr; }
}
</style>


<!-- ═══════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="inner-hero" style="background-image: url('<?= htmlspecialchars($heroImage) ?>');" aria-label="Service area page hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>Service Area</span>
    </nav>
    <h1>Roofing &amp; Construction Services in <span class="text-accent">Warrenton, MO</span> &amp; Surrounding Areas</h1>
    <p class="hero-answer">CPA Roofing &amp; Construction, LLC is a licensed Missouri roofing contractor based in Warrenton, serving homeowners and businesses within a 50-mile radius. From Warren County through the I-70 corridor and beyond, our crews deliver residential roofing, commercial roof systems, siding, and insurance storm restoration seven days a week.</p>
  </div>
</section>


<!-- Section Divider -->
<div class="divider-wave">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C200,60 400,0 600,30 C800,60 1000,0 1200,30 L1200,60 L0,60 Z" fill="var(--color-light)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     COVERAGE OVERVIEW
     ═══════════════════════════════════════════════════════════════ -->
<section class="coverage-overview" aria-label="Service area coverage" style="background:var(--color-light);">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Coverage Area</span>
      <h2>How Far Does CPA Roofing's <span class="text-accent">Service Area</span> Extend from Warrenton?</h2>
      <p class="answer-block">CPA Roofing &amp; Construction serves all communities within a 50-mile radius of Warrenton, MO. That covers Warren, Lincoln, Montgomery, Gasconade, Franklin, and parts of St. Charles County — from Wentzville and Troy in the east to Hermann and New Florence in the west, and everywhere along the I-70 corridor and Highway 47.</p>
    </div>

    <div class="coverage-stats" data-animate>
      <div class="coverage-stat">
        <div class="coverage-stat-number">50</div>
        <div class="coverage-stat-label">Mile Radius</div>
      </div>
      <div class="coverage-stat">
        <div class="coverage-stat-number">6+</div>
        <div class="coverage-stat-label">Counties Served</div>
      </div>
      <div class="coverage-stat">
        <div class="coverage-stat-number"><?= $yearsInBusiness ?>+</div>
        <div class="coverage-stat-label">Years in Business</div>
      </div>
      <div class="coverage-stat">
        <div class="coverage-stat-number">7</div>
        <div class="coverage-stat-label">Days a Week</div>
      </div>
    </div>

  </div>
</section>


<!-- Section Divider -->
<div class="divider-angle">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1200,60 0,60" fill="var(--color-light)"/>
    <polygon points="0,0 1200,60 1200,0" fill="var(--color-white)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     COMMUNITY CARDS
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="Communities we serve">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Communities We Serve</span>
      <h2>Which <span class="text-accent">Communities</span> Does CPA Roofing Serve Near Warrenton?</h2>
      <p class="answer-block">CPA Roofing &amp; Construction provides roofing contractor services near me in Warrenton and throughout central Missouri. Below are the primary communities where our crews work regularly — but if your property falls within 50 miles of Warrenton, we serve your area.</p>
    </div>

    <div class="community-grid">
<?php
$tints = [1, 2, 3];
foreach ($communities as $i => $community):
    $tint = $tints[$i % 3];
?>
      <div class="community-card card-tint-<?= $tint ?>" data-animate>
        <div class="community-card-header">
          <div class="community-icon"><i data-lucide="<?= htmlspecialchars($community['icon']) ?>"></i></div>
          <h3><?= htmlspecialchars($community['name']) ?>, MO</h3>
        </div>
        <p><?= htmlspecialchars($community['desc']) ?></p>
      </div>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     ADDITIONAL AREAS
     ═══════════════════════════════════════════════════════════════ -->
<section class="additional-areas" aria-label="Additional service areas" style="background:var(--color-light);">
  <div class="container" data-animate>
    <h2>What Other Areas Does CPA Roofing <span class="text-accent">Cover</span>?</h2>
    <p class="answer-block">Beyond our primary communities, CPA Roofing &amp; Construction also serves Montgomery City, Foristell, Marthasville, New Florence, Hermann, and all surrounding rural properties across Warren County, Lincoln County, Montgomery County, Gasconade County, and Franklin County. If you are near the I-70 corridor or Highway 47, we are already working in your area.</p>

    <div class="area-pill-grid">
      <span class="area-pill card-tint-1"><i data-lucide="map-pin"></i> Montgomery City</span>
      <span class="area-pill card-tint-2"><i data-lucide="map-pin"></i> Foristell</span>
      <span class="area-pill card-tint-3"><i data-lucide="map-pin"></i> Marthasville</span>
      <span class="area-pill card-tint-1"><i data-lucide="map-pin"></i> New Florence</span>
      <span class="area-pill card-tint-2"><i data-lucide="map-pin"></i> Hermann</span>
      <span class="area-pill card-tint-3"><i data-lucide="map-pin"></i> Warren County</span>
      <span class="area-pill card-tint-1"><i data-lucide="map-pin"></i> Lincoln County</span>
      <span class="area-pill card-tint-2"><i data-lucide="map-pin"></i> Montgomery County</span>
      <span class="area-pill card-tint-3"><i data-lucide="map-pin"></i> Gasconade County</span>
      <span class="area-pill card-tint-1"><i data-lucide="map-pin"></i> Franklin County</span>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICES AVAILABLE IN THE AREA
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="Services available in service area">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Available Services</span>
      <h2>What Services Does CPA Roofing Provide Across <span class="text-accent">Central Missouri</span>?</h2>
      <p class="answer-block">Every service CPA Roofing &amp; Construction offers in Warrenton is available throughout our full 50-mile service area. Whether you need a residential roof replacement in Wright City, commercial TPO installation in Wentzville, or storm damage repair in Troy, our licensed crews bring the same standard of work to every jobsite.</p>
    </div>

    <div class="area-services-grid" data-animate>
<?php foreach ($services as $i => $svc): ?>
      <a href="<?= htmlspecialchars(getServiceGroupUrl($svc['name'])) ?>" class="area-service-item card-tint-<?= $tints[$i % 3] ?>">
        <i data-lucide="check-circle"></i>
        <span><?= htmlspecialchars($svc['name']) ?></span>
      </a>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     LOCAL CONDITIONS
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="Local weather conditions" style="background:var(--color-light);">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Local Conditions</span>
      <h2>How Does Missouri Weather Impact <span class="text-accent">Roofs</span> in the Warrenton Area?</h2>
      <p class="answer-block">Central Missouri along the I-70 corridor experiences some of the most damaging weather patterns in the Midwest. Spring hailstorms, summer thunderstorms with straight-line winds, fall temperature swings, and winter ice dams all take a direct toll on residential and commercial roofs. CPA Roofing has repaired storm damage across Warren County for <?= $yearsInBusiness ?> years.</p>
    </div>

    <div class="conditions-grid" data-animate>

      <div class="condition-card">
        <div class="condition-icon" style="background:rgba(245,86,0,0.1); color:var(--color-primary);">
          <i data-lucide="cloud-rain"></i>
        </div>
        <div>
          <h3>Spring Hailstorms</h3>
          <p>Warren County sits in Missouri's primary hail corridor. Spring storms regularly produce golf-ball-sized hail that cracks shingles, dents metal panels, and compromises flashing seals.</p>
        </div>
      </div>

      <div class="condition-card">
        <div class="condition-icon" style="background:rgba(0,94,245,0.1); color:var(--color-accent);">
          <i data-lucide="wind"></i>
        </div>
        <div>
          <h3>Straight-Line Winds</h3>
          <p>Summer thunderstorms along the I-70 corridor generate sustained winds over 60 mph that peel back shingles, damage siding, and uproot trees onto roofs.</p>
        </div>
      </div>

      <div class="condition-card">
        <div class="condition-icon" style="background:rgba(245,86,0,0.1); color:var(--color-primary);">
          <i data-lucide="snowflake"></i>
        </div>
        <div>
          <h3>Ice Dams &amp; Freeze-Thaw</h3>
          <p>Missouri winters bring repeated freeze-thaw cycles that create ice dams along roof edges and gutters, forcing water under shingles and into attic spaces.</p>
        </div>
      </div>

      <div class="condition-card">
        <div class="condition-icon" style="background:rgba(0,94,245,0.1); color:var(--color-accent);">
          <i data-lucide="sun"></i>
        </div>
        <div>
          <h3>UV &amp; Heat Exposure</h3>
          <p>Summer temperatures in central Missouri exceed 95&deg;F for weeks at a time, accelerating shingle granule loss and degrading flat roof membranes without proper coatings.</p>
        </div>
      </div>

    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     CLOSING CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="page-cta" aria-label="Call to action">
  <div class="container">
    <h2>Need a Roofer Near You in <span class="text-accent">Warrenton or Surrounding Areas</span>?</h2>
    <p class="answer-block">CPA Roofing &amp; Construction has served central Missouri since 1995. Whether you are in Warrenton, Wright City, Wentzville, Troy, or anywhere within 50 miles, every estimate is free with zero obligation. Reach out today and we will respond within 48 hours.</p>
    <a href="/contact/" class="btn btn-primary btn-lg">Get Your Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
