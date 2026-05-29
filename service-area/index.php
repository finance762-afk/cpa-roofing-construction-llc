<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'Roofing & Construction Services in Warrenton, MO & Surrounding Areas | ' . $siteName;
$pageDescription = 'CPA Roofing & Construction serves Innsbrook, Foristell, Wentzville, and Lake St. Louis, MO. Licensed insurance claim specialists since 1995 — free estimates 7 days a week.';
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
        'name' => 'Innsbrook',
        'icon' => 'home',
        'desc' => 'The Innsbrook resort community in Warren County demands quality roofing that stands up to Missouri weather and meets the aesthetic standards of lakefront properties. CPA Roofing has served Innsbrook homeowners with residential roofing, storm damage repairs, and insurance claim representation since 1995.',
    ],
    [
        'name' => 'Foristell',
        'icon' => 'building-2',
        'desc' => 'Foristell sits along the I-70 corridor at the St. Charles and Warren County line, a prime target for severe spring hailstorms. CPA Roofing serves Foristell residential and commercial properties with full roofing services and experienced insurance claim representation for storm damage.',
    ],
    [
        'name' => 'Wentzville',
        'icon' => 'map-pin',
        'desc' => 'One of the fastest-growing cities in Missouri, Wentzville sees constant new construction and aging roofs that need replacement. CPA provides residential and commercial roofing throughout Wentzville, along with expert insurance claim representation for the hail and wind damage common in St. Charles County.',
    ],
    [
        'name' => 'Lake St. Louis',
        'icon' => 'shield',
        'desc' => 'Lake St. Louis homeowners trust CPA Roofing for residential roof replacements, storm damage repairs, and insurance claim advocacy. Our crews are experienced in the insurance claims process and represent property owners directly with their adjusters to ensure full and fair coverage.',
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
    <h1>Roofing &amp; Construction Services in <span class="text-accent">Innsbrook, Foristell, Wentzville &amp; Lake St. Louis</span></h1>
    <p class="hero-answer">CPA Roofing &amp; Construction, LLC is a licensed Missouri roofing contractor and insurance claim specialist serving Innsbrook, Foristell, Wentzville, and Lake St. Louis. Our crews deliver residential roofing, commercial roof systems, siding, and storm restoration — with experienced insurance claim representation to advocate for full and fair coverage on every storm damage project.</p>
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
      <h2>Where Does CPA Roofing's <span class="text-accent">Service Area</span> Cover in Missouri?</h2>
      <p class="answer-block">CPA Roofing &amp; Construction serves Innsbrook, Foristell, Wentzville, and Lake St. Louis, MO. Our licensed crews deliver full residential and commercial roofing, siding, and storm restoration across these communities — and as insurance claim specialists, we represent property owners directly throughout the entire claims process.</p>
    </div>

    <div class="coverage-stats" data-animate>
      <div class="coverage-stat">
        <div class="coverage-stat-number">4</div>
        <div class="coverage-stat-label">Service Area Cities</div>
      </div>
      <div class="coverage-stat">
        <div class="coverage-stat-number">2</div>
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
      <h2>Which <span class="text-accent">Communities</span> Does CPA Roofing Serve?</h2>
      <p class="answer-block">CPA Roofing &amp; Construction provides roofing contractor services in Innsbrook, Foristell, Wentzville, and Lake St. Louis. Our crews bring the same licensed, insured standard of work to every community — and as insurance claim specialists, we represent homeowners and businesses throughout the claims process from first inspection to final settlement.</p>
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
    <p class="answer-block">CPA Roofing &amp; Construction serves Innsbrook, Foristell, Wentzville, and Lake St. Louis across Warren and St. Charles County. Our service area covers residential and commercial properties throughout these communities — and as licensed insurance claim specialists, we are experienced in representing property owners from storm inspection through final insurance settlement.</p>

    <div class="area-pill-grid">
      <span class="area-pill card-tint-1"><i data-lucide="map-pin"></i> Innsbrook</span>
      <span class="area-pill card-tint-2"><i data-lucide="map-pin"></i> Foristell</span>
      <span class="area-pill card-tint-3"><i data-lucide="map-pin"></i> Wentzville</span>
      <span class="area-pill card-tint-1"><i data-lucide="map-pin"></i> Lake St. Louis</span>
      <span class="area-pill card-tint-2"><i data-lucide="map-pin"></i> Warren County</span>
      <span class="area-pill card-tint-3"><i data-lucide="map-pin"></i> St. Charles County</span>
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
      <p class="answer-block">Every service CPA Roofing &amp; Construction offers is available across all four communities in our service area. Whether you need a residential roof replacement in Lake St. Louis, commercial TPO installation in Wentzville, or storm damage repair and insurance claim representation in Innsbrook or Foristell, our licensed crews bring the same standard of work to every jobsite.</p>
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
    <h2>Need a Roofer in <span class="text-accent">Innsbrook, Foristell, Wentzville, or Lake St. Louis</span>?</h2>
    <p class="answer-block">CPA Roofing &amp; Construction has served Missouri property owners since 1995. Whether you need a new roof, storm damage repair, or experienced insurance claim representation, every estimate is free with zero obligation. Reach out today and we will respond within 48 hours.</p>
    <a href="/contact/" class="btn btn-primary btn-lg">Get Your Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
