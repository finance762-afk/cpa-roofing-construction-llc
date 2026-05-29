<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'About CPA Roofing & Construction | Licensed Roofer Since 1995 | Warrenton, MO';
$pageDescription = 'CPA Roofing & Construction, LLC has served Warrenton, MO and central Missouri since 1995. Licensed and insured roofing contractor specializing in residential, commercial, and insurance storm restoration.';
$canonicalUrl    = $siteUrl . '/about/';
$currentPage     = 'about';

$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';

$heroImage       = $photoBase . '1779465600783-kl48wg-480792551_1143368090816150_4859576737511326695_n.jpg';
$heroImagePreload = $heroImage;
$bodyImage1      = $photoBase . '1779465601102-5dvfnl-482006510_1153868093099483_1871048935073118283_n.jpg';
$bodyImage2      = $photoBase . '1779465602468-t4fnin-41314351_1098160403666526_4682288297156804608_n.jpg';

// ── Schema ────────────────────────────────────────────────────
$schemaMarkup = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => $siteUrl . '/about/'],
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
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

/* ── About Story Section ─────────────────────────────────────── */
.about-story-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: var(--space-12);
  align-items: center;
}
.about-story-content h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.about-story-content p {
  color: var(--color-gray-dark);
  line-height: 1.75;
  margin-bottom: var(--space-4);
  max-width: 65ch;
}
.about-story-visual {
  position: relative;
}
.about-story-visual img {
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
}
.about-badge {
  position: absolute;
  bottom: -20px;
  left: -20px;
  background: var(--color-primary);
  color: var(--color-white);
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  text-align: center;
  z-index: 3;
}
.about-badge .big-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 900;
  line-height: 1;
}
.about-badge .badge-label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-1);
  opacity: 0.9;
}

/* ── Values Grid ──────────────────────────────────────────────── */
.values-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
.value-card {
  padding: var(--space-8) var(--space-6);
  border-radius: var(--radius-lg);
  text-align: center;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.value-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.value-icon {
  width: 64px;
  height: 64px;
  border-radius: var(--radius-full);
  background: rgba(245, 86, 0, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-4);
  color: var(--color-primary);
}
.value-icon i, .value-icon svg {
  width: 28px;
  height: 28px;
}
.value-card h3 {
  font-size: var(--font-size-lg);
  margin-bottom: var(--space-2);
  color: var(--color-dark);
}
.value-card p {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  line-height: 1.6;
  margin: 0;
  max-width: 30ch;
  margin-inline: auto;
}

/* ── Credentials Section ──────────────────────────────────────── */
.credentials-grid {
  display: grid;
  grid-template-columns: 0.85fr 1.15fr;
  gap: var(--space-12);
  align-items: center;
}
.credential-list {
  list-style: none;
  padding: 0;
  margin: var(--space-6) 0 0;
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.credential-list li {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.credential-list li .cred-icon {
  flex-shrink: 0;
  width: 40px;
  height: 40px;
  border-radius: var(--radius-full);
  background: rgba(0, 94, 245, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-accent);
}
.credential-list li .cred-icon i,
.credential-list li .cred-icon svg {
  width: 20px;
  height: 20px;
}
.credential-list li h4 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
  color: var(--color-dark);
}
.credential-list li p {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  margin: 0;
  line-height: 1.5;
}

/* ── Service Area Overview ────────────────────────────────────── */
.area-overview {
  text-align: center;
}
.area-overview h2 { text-wrap: balance; margin-bottom: var(--space-4); }
.area-overview .answer-block {
  max-width: 640px;
  margin: 0 auto var(--space-6);
}
.area-tags {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: var(--space-3);
  margin-top: var(--space-6);
}
.area-tag {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  padding: var(--space-2) var(--space-4);
  border-radius: var(--radius-full);
  background: rgba(245, 86, 0, 0.08);
  color: var(--color-dark);
  font-size: var(--font-size-sm);
  font-weight: 500;
}
.area-tag i, .area-tag svg {
  width: 14px;
  height: 14px;
  color: var(--color-primary);
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
  .values-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .inner-hero { min-height: 40vh; }
  .about-story-grid { grid-template-columns: 1fr; }
  .credentials-grid { grid-template-columns: 1fr; }
  .about-badge {
    position: relative;
    bottom: auto;
    left: auto;
    display: inline-block;
    margin-top: var(--space-4);
  }
}
@media (max-width: 600px) {
  .values-grid { grid-template-columns: 1fr; }
}
</style>


<!-- ═══════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="inner-hero" style="background-image: url('<?= htmlspecialchars($heroImage) ?>');" aria-label="About page hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>About</span>
    </nav>
    <h1>About <span class="text-accent">CPA Roofing &amp; Construction</span></h1>
    <p class="hero-answer">CPA Roofing &amp; Construction, LLC is a licensed Missouri roofing contractor based in Warrenton, serving central and eastern Missouri since 1995. With <?= $yearsInBusiness ?> years of hands-on experience in residential roofing, commercial roof systems, siding, and insurance storm restoration, we have built a reputation on honest work and lasting results.</p>
  </div>
</section>


<!-- Section Divider: Wave -->
<div class="divider-wave">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C200,60 400,0 600,30 C800,60 1000,0 1200,30 L1200,60 L0,60 Z" fill="var(--color-light)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     COMPANY STORY
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="Company history" style="background:var(--color-light);">
  <div class="container">
    <div class="about-story-grid">

      <div class="about-story-content" data-animate>
        <span class="eyebrow-label">Our Story</span>
        <h2>How Did CPA Roofing Become Warrenton's <span class="text-accent">Go-To Contractor</span> Over <?= $yearsInBusiness ?> Years?</h2>
        <p class="answer-block">CPA Roofing &amp; Construction was founded in 1995 in Warrenton, Missouri, with a straightforward mission: deliver reliable roofing and construction work at fair prices. Over three decades, that commitment has grown the company from a small residential crew into a full-service contractor handling everything from commercial TPO systems to insurance-based storm restoration.</p>
        <p>The Innsbrook, Foristell, Wentzville, and Lake St. Louis area experiences Missouri's full weather range — spring hailstorms, summer downpours with straight-line winds, and winter ice dams. That exposure shaped the way CPA operates. Every crew member understands the local conditions that damage roofs, and every repair or installation is built to withstand what Missouri brings next.</p>
        <p>Over the years, CPA expanded beyond residential shingle work into commercial roofing, metal roofing, TPO membrane systems, and siding. The company also developed deep expertise as insurance claim specialists, helping hundreds of property owners navigate the claims process after storm damage and representing them directly with their insurance carriers to secure full and fair payouts.</p>
        <p>Today, CPA Roofing &amp; Construction serves Innsbrook, Foristell, Wentzville, and Lake St. Louis. The crew is available seven days a week, and every estimate is free with zero obligation.</p>
      </div>

      <div class="about-story-visual" data-animate>
        <img src="<?= htmlspecialchars($bodyImage1) ?>" alt="CPA Roofing &amp; Construction crew completing a roofing project in Warrenton, Missouri" width="600" height="450" loading="lazy">
        <div class="about-badge">
          <div class="big-number"><?= $yearsInBusiness ?>+</div>
          <div class="badge-label">Years Serving Missouri</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Section Divider: Angle -->
<div class="divider-angle">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1200,60 0,60" fill="var(--color-light)"/>
    <polygon points="0,0 1200,60 1200,0" fill="var(--color-white)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     VALUES / MISSION
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="Company values">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">What Drives Us</span>
      <h2>What Principles Guide <span class="text-accent">CPA Roofing</span> on Every Jobsite?</h2>
      <p class="answer-block">Four core principles have guided CPA Roofing &amp; Construction since day one: honest communication with every client, craftsmanship that outlasts the warranty period, transparent pricing with no hidden fees, and accountability from the first phone call through the final walkthrough. These are not slogans — they are the standards our crews are held to daily.</p>
    </div>

    <div class="values-grid">

      <div class="value-card card-tint-1" data-animate>
        <div class="value-icon"><i data-lucide="message-circle"></i></div>
        <h3>Honest Communication</h3>
        <p>We explain what we find in plain language and never recommend work you do not need.</p>
      </div>

      <div class="value-card card-tint-2" data-animate>
        <div class="value-icon"><i data-lucide="hammer"></i></div>
        <h3>Built-to-Last Craft</h3>
        <p>Every nail, seam, and coating is installed to exceed manufacturer specs and outlast Missouri weather.</p>
      </div>

      <div class="value-card card-tint-3" data-animate>
        <div class="value-icon"><i data-lucide="receipt"></i></div>
        <h3>Transparent Pricing</h3>
        <p>Written estimates before work begins. No surprise charges, no fine print, no change orders without approval.</p>
      </div>

      <div class="value-card card-tint-1" data-animate>
        <div class="value-icon"><i data-lucide="shield-check"></i></div>
        <h3>Full Accountability</h3>
        <p>Licensed, insured, and present from the first inspection through the final cleanup and warranty handoff.</p>
      </div>

    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     CREDENTIALS
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="Credentials and qualifications" style="background:var(--color-light);">
  <div class="container">
    <div class="credentials-grid">

      <div data-animate>
        <img src="<?= htmlspecialchars($bodyImage2) ?>" alt="CPA Roofing construction work on a residential property in Warren County, Missouri" width="600" height="450" loading="lazy" style="border-radius:var(--radius-lg); box-shadow:var(--shadow-lg);">
      </div>

      <div data-animate>
        <span class="eyebrow-label">Credentials</span>
        <h2>Why Is CPA Roofing a Licensed <span class="text-accent">Missouri Contractor</span> You Can Rely On?</h2>
        <p class="answer-block">CPA Roofing &amp; Construction carries full general liability and workers' compensation insurance, holds an active Missouri contractor license, and has navigated hundreds of insurance claims since 1995. Our <?= $yearsInBusiness ?>-year track record in Warren County speaks directly to the durability of our work and the integrity of our process.</p>

        <ul class="credential-list">
          <li>
            <span class="cred-icon"><i data-lucide="badge-check"></i></span>
            <div>
              <h4>Licensed Missouri Contractor</h4>
              <p>Active state license maintained since 1995 with a clean compliance record across residential and commercial work.</p>
            </div>
          </li>
          <li>
            <span class="cred-icon"><i data-lucide="shield"></i></span>
            <div>
              <h4>Fully Insured</h4>
              <p>General liability and workers' compensation coverage protects every property owner and crew member on every job.</p>
            </div>
          </li>
          <li>
            <span class="cred-icon"><i data-lucide="file-text"></i></span>
            <div>
              <h4>Insurance Claim Specialists &amp; Experienced in Policyholder Representation</h4>
              <p>Hundreds of successful storm damage claims filed since 1995. We represent property owners throughout the insurance process — inspecting damage, documenting scope, coordinating with adjusters, and advocating for full and fair coverage.</p>
            </div>
          </li>
          <li>
            <span class="cred-icon"><i data-lucide="calendar"></i></span>
            <div>
              <h4><?= $yearsInBusiness ?>+ Years of Experience</h4>
              <p>Three decades of hands-on roofing and siding work across central and eastern Missouri communities.</p>
            </div>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICE AREA OVERVIEW
     ═══════════════════════════════════════════════════════════════ -->
<section class="area-overview" aria-label="Service area overview">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">Where We Work</span>
      <h2>What Areas Does CPA Roofing <span class="text-accent">Serve</span> Around Warrenton?</h2>
      <p class="answer-block">CPA Roofing &amp; Construction serves Innsbrook, Foristell, Wentzville, and Lake St. Louis. As licensed insurance claim specialists, we are experienced in representing property owners in their insurance claims — from the initial storm damage inspection through final adjuster settlement — across all four service communities.</p>
    </div>

    <div class="area-tags" data-animate>
      <span class="area-tag"><i data-lucide="map-pin"></i> Innsbrook</span>
      <span class="area-tag"><i data-lucide="map-pin"></i> Foristell</span>
      <span class="area-tag"><i data-lucide="map-pin"></i> Wentzville</span>
      <span class="area-tag"><i data-lucide="map-pin"></i> Lake St. Louis</span>
    </div>

    <div style="text-align:center; margin-top:var(--space-8);" data-animate>
      <a href="/service-area/" class="btn btn-accent">View Full Service Area</a>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     CLOSING CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="page-cta" aria-label="Call to action">
  <div class="container">
    <h2>Ready to Work with a Contractor <span class="text-accent">Warrenton Has Counted On</span> Since 1995?</h2>
    <p class="answer-block">CPA Roofing &amp; Construction provides free estimates on every project — roofing, siding, or storm damage restoration. Licensed, insured, and available seven days a week. Get in touch and we will respond within 48 hours.</p>
    <a href="/contact/" class="btn btn-primary btn-lg">Get Your Free Estimate</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
