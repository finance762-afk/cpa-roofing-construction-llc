<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'CPA Roofing & Construction | Roofing Contractor in Warrenton, MO';
$pageDescription = 'CPA Roofing & Construction, LLC is a licensed roofing contractor in Warrenton, MO. Since 1995 — residential and commercial roofing, siding, and insurance storm restoration. Free estimates, 7 days a week.';
$canonicalUrl    = $siteUrl . '/';
$currentPage     = 'home';

// ── Photo Library ──────────────────────────────────────────────
$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';

$heroImage   = $photoBase . '1779465579437-is3xq9-40882613_1098161186999781_153905346983755776_n.jpg';
$aboutImage  = $photoBase . '1779465600783-kl48wg-480792551_1143368090816150_4859576737511326695_n.jpg';

$heroImagePreload = $heroImage;

// ── Homepage Services Grid (8 of 13) ──────────────────────────
$homepageServices = [
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
        'desc'    => 'Fast leak fixes and damage repair to keep your property protected year-round.',
        'bullets' => ['Same-day emergency response', 'Leak detection & flashing repair', 'Extends existing roof life'],
        'image'   => $photoBase . '1779465576127-6yqxml-40685019_1098160703666496_7573720096833536000_n.jpg',
        'alt'     => 'Roof repair work by CPA Roofing crew in Warrenton, MO',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Commercial Roofing',
        'icon'    => 'building-2',
        'desc'    => 'Large-scale roofing for warehouses, offices, and retail in central Missouri.',
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
        'alt'     => 'Metal roofing installation by CPA Roofing in Warrenton, MO',
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
        'desc'    => 'We handle the insurance paperwork so you can focus on your family.',
        'bullets' => ['Free storm damage inspections', 'Direct adjuster coordination', 'Maximize your claim payout'],
        'image'   => $photoBase . '1779465578117-ahpx0j-40855264_1098160506999849_1343386300408922112_n.jpg',
        'alt'     => 'Insurance roofing bid assessment by CPA Roofing',
        'link'    => '/services/roofing-services/',
    ],
    [
        'name'    => 'Siding Installation',
        'icon'    => 'hammer',
        'desc'    => 'Vinyl, fiber cement, and engineered wood siding for lasting curb appeal.',
        'bullets' => ['Storm & rot resistant materials', 'Improves insulation & value', 'Color-matched to your home'],
        'image'   => $photoBase . '1779465577564-f2w9k5-40841389_1098160560333177_1829770370060648448_n.jpg',
        'alt'     => 'Siding installation project by CPA Roofing in Warrenton',
        'link'    => '/services/additional-services/',
    ],
];

// ── FAQs ───────────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does a new roof cost in Warrenton, MO?',
        'answer'   => 'Most residential roof replacements in the Warrenton area run between $8,000 and $18,000 depending on square footage, pitch, and material choice. Metal roofs cost more upfront but last two to three times longer than asphalt shingles. We provide free, no-obligation estimates so you know the exact cost before any work begins.',
    ],
    [
        'question' => 'Does CPA Roofing work with insurance companies on storm claims?',
        'answer'   => 'Yes. We handle insurance roofing bids from start to finish — free storm damage inspection, detailed scope of work, direct coordination with your adjuster, and supplemental filing if the initial estimate comes in low. We have been navigating Missouri insurance claims since 1995.',
    ],
    [
        'question' => 'How long does a full roof replacement take?',
        'answer'   => 'A typical residential roof replacement takes one to three days depending on size and weather. Commercial projects vary by scope but we schedule around your business hours to minimize disruption. We always provide a clear timeline before work starts.',
    ],
    [
        'question' => 'What types of roofing materials does CPA Roofing install?',
        'answer'   => 'We install architectural and three-tab asphalt shingles, standing seam and corrugated metal, TPO and EPDM flat-roof membranes, and elastomeric roof coatings. Each material suits different budgets, climates, and building types — we help you choose the right one.',
    ],
    [
        'question' => 'Do you offer free roofing estimates in Warrenton?',
        'answer'   => 'Every estimate is free and comes with zero obligation. We inspect your roof, explain what we find in plain language, and give you a written quote the same day. No pressure, no hidden fees, no surprises.',
    ],
    [
        'question' => 'What areas around Warrenton does CPA Roofing serve?',
        'answer'   => 'We serve Warrenton and communities within a 50-mile radius including Wright City, Wentzville, Troy, Moscow Mills, Jonesburg, Montgomery City, and surrounding Warren County. If you are unsure whether you are in our service area, give us a call — we will let you know.',
    ],
];

// ── Reviews (placeholder until client provides real reviews) ───
$reviews = [
    [
        'stars'    => 5,
        'text'     => 'Had our entire roof replaced after the hailstorm last spring. CPA had a crew out within 48 hours and handled all the insurance paperwork. New shingles look great and the cleanup was spotless.',
        'name'     => 'Mark T.',
        'location' => 'Warrenton, MO',
        'service'  => 'Roof Replacement',
    ],
    [
        'stars'    => 5,
        'text'     => 'Called about a persistent leak around our chimney. They diagnosed the problem on the first visit and fixed it the same day. Haven\'t had a drop of water since. Fair price, honest crew.',
        'name'     => 'Jennifer R.',
        'location' => 'Wright City, MO',
        'service'  => 'Roof Repair',
    ],
    [
        'stars'    => 5,
        'text'     => 'CPA installed a new TPO roof on our warehouse. Project came in on budget and ahead of schedule. Professional from the first call to the final walkthrough — they even worked around our business hours.',
        'name'     => 'David K.',
        'location' => 'Warrenton, MO',
        'service'  => 'Commercial Roofing',
    ],
    [
        'stars'    => 5,
        'text'     => 'After the storm ripped through Jonesburg, three different roofers came out. CPA was the only one who actually got on the roof and showed me photos of the damage. Insurance covered everything.',
        'name'     => 'Sarah M.',
        'location' => 'Jonesburg, MO',
        'service'  => 'Storm Damage',
    ],
    [
        'stars'    => 5,
        'text'     => 'We needed new siding on the south side of our house — sun had destroyed the old vinyl. CPA matched the color perfectly and finished in two days. Looks like a brand new home.',
        'name'     => 'Robert L.',
        'location' => 'Warrenton, MO',
        'service'  => 'Siding',
    ],
];

// ── Schema Markup ──────────────────────────────────────────────
$faqSchema    = generateFAQSchema($faqs);
$schemaMarkup = json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- FAQPage Schema -->
<script type="application/ld+json">
<?php echo $schemaMarkup; ?>
</script>

<!-- ═══════════════════════════════════════════════════════════════
     PAGE-SPECIFIC STYLES
     ═══════════════════════════════════════════════════════════════ -->
<style>
/* ── Hero Split Layout ──────────────────────────────────────── */
.hero-split {
  position: relative;
  min-height: 100vh;
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  align-items: center;
  gap: var(--space-8);
  padding: 120px clamp(1rem, 4vw, 2rem) var(--space-16);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  overflow: hidden;
}
.hero-split::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(26, 26, 46, 0.92) 0%, rgba(245, 86, 0, 0.7) 60%, rgba(0, 94, 245, 0.5) 100%);
  z-index: 1;
}
.hero-split::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  z-index: 1;
  pointer-events: none;
}
.hero-text,
.hero-form-card {
  position: relative;
  z-index: 2;
}

/* ── Hero Text Column ───────────────────────────────────────── */
.hero-text {
  max-width: 600px;
}
.hero-text .hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: var(--space-2);
  background: rgba(255,255,255,0.1);
  border: 1px solid rgba(255,255,255,0.2);
}
.hero-text h1 {
  font-size: clamp(2.25rem, 5vw, 3.75rem);
  color: var(--color-white);
  margin-bottom: var(--space-4);
  line-height: 1.08;
}
.hero-text h1 .text-accent {
  color: var(--color-accent);
}
.hero-subtitle {
  color: rgba(255,255,255,0.9);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  margin-bottom: var(--space-6);
  max-width: 520px;
}
.hero-actions {
  display: flex;
  gap: var(--space-4);
  flex-wrap: wrap;
  margin-bottom: var(--space-8);
}
.hero-trust {
  display: flex;
  gap: var(--space-6);
  flex-wrap: wrap;
}
.hero-trust-item {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.85);
  font-size: var(--font-size-sm);
  font-weight: 500;
}

/* ── Hero Form Card (Glassmorphism) ─────────────────────────── */
.hero-form-card {
  background: rgba(255,255,255,0.1);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: var(--radius-xl);
  padding: var(--space-8);
  box-shadow: 0 8px 32px rgba(0,0,0,0.25);
}
.hero-form-card h2 {
  color: var(--color-white);
  font-size: var(--font-size-2xl);
  margin-bottom: var(--space-2);
}
.hero-form-tagline {
  color: rgba(255,255,255,0.75);
  font-size: var(--font-size-sm);
  margin-bottom: var(--space-6);
}
.hero-form .form-row {
  margin-bottom: var(--space-3);
}
.hero-form input,
.hero-form select {
  width: 100%;
  padding: var(--space-4);
  border: 2px solid rgba(255,255,255,0.15);
  border-radius: var(--radius-md);
  background: rgba(255,255,255,0.08);
  color: var(--color-white);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  transition: border-color var(--transition-fast);
}
.hero-form input::placeholder,
.hero-form select {
  color: rgba(255,255,255,0.55);
}
.hero-form select option {
  background: var(--color-dark);
  color: var(--color-white);
}
.hero-form input:focus,
.hero-form select:focus {
  border-color: var(--color-accent);
  outline: none;
  background: rgba(255,255,255,0.12);
}
.hero-form .btn-block {
  width: 100%;
  margin-top: var(--space-2);
  padding: var(--space-4);
  font-size: var(--font-size-base);
}
.form-footnote {
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.5);
  text-align: center;
  margin-top: var(--space-3);
  margin-bottom: 0;
}
.form-footnote a {
  color: rgba(255,255,255,0.7);
  text-decoration: underline;
}

/* ── Section Dividers ───────────────────────────────────────── */
.divider-wave,
.divider-angle {
  position: relative;
  z-index: 3;
  line-height: 0;
  margin-top: -1px;
}
.divider-wave svg,
.divider-angle svg {
  display: block;
  width: 100%;
  height: 60px;
}

/* ── Numbered Sections ──────────────────────────────────────── */
.numbered-section {
  position: relative;
}
.numbered-section::before {
  content: attr(data-num);
  position: absolute;
  top: var(--space-8);
  right: clamp(1rem, 5vw, 4rem);
  font-family: var(--font-heading);
  font-size: clamp(6rem, 12vw, 10rem);
  font-weight: 900;
  color: rgba(0, 0, 0, 0.03);
  line-height: 1;
  pointer-events: none;
  z-index: 0;
}

/* ── Process Steps ──────────────────────────────────────────── */
.process-steps {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
  margin-top: var(--space-8);
}
.process-step {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
}
.process-step-num {
  flex-shrink: 0;
  width: 36px;
  height: 36px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  font-family: var(--font-heading);
  font-weight: 800;
  font-size: var(--font-size-sm);
  display: flex;
  align-items: center;
  justify-content: center;
}
.process-step h4 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
  color: var(--color-dark);
}
.process-step p {
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  margin: 0;
  line-height: 1.5;
}

/* ── Reviews Grid (static) ──────────────────────────────────── */
.reviews-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
}
.review-service {
  font-size: var(--font-size-xs);
  color: rgba(255,255,255,0.4);
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ── About Split Stat Card ──────────────────────────────────── */
.about-stat-card {
  position: absolute;
  bottom: -16px;
  right: -16px;
  background: var(--color-accent);
  color: var(--color-white);
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-xl);
  text-align: center;
}
.about-stat-card .big-number {
  font-family: var(--font-heading);
  font-size: var(--font-size-4xl);
  font-weight: 900;
  line-height: 1;
}
.about-stat-card .label {
  font-size: var(--font-size-xs);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: var(--space-1);
  opacity: 0.85;
}

/* ── Closing CTA ────────────────────────────────────────────── */
.closing-cta {
  background: var(--color-dark);
  text-align: center;
}
.closing-cta h2 {
  color: var(--color-white);
  margin-bottom: var(--space-4);
}
.closing-cta p {
  color: rgba(255,255,255,0.8);
  max-width: 600px;
  margin: 0 auto var(--space-8);
}

/* ── Services Grid Override (4-col for homepage) ────────────── */
.home-services .services-grid {
  grid-template-columns: repeat(4, 1fr);
}

/* ── Review Badge Strip ─────────────────────────────────────── */
.review-badge-strip {
  display: flex;
  justify-content: center;
  gap: var(--space-8);
  margin-top: var(--space-10);
  flex-wrap: wrap;
}
.review-badge {
  display: flex;
  align-items: center;
  gap: var(--space-2);
  color: rgba(255,255,255,0.6);
  font-size: var(--font-size-sm);
  font-weight: 600;
}

/* ── Responsive ─────────────────────────────────────────────── */
@media (max-width: 1199px) {
  .home-services .services-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 768px) {
  .hero-split {
    grid-template-columns: 1fr;
    min-height: auto;
    padding-top: 100px;
    padding-bottom: var(--space-8);
  }
  .hero-text {
    text-align: center;
    max-width: 100%;
  }
  .hero-subtitle {
    margin-left: auto;
    margin-right: auto;
  }
  .hero-actions {
    justify-content: center;
  }
  .hero-trust {
    justify-content: center;
  }
  .hero-form-card {
    max-width: 480px;
    margin: 0 auto;
  }
  .process-steps {
    grid-template-columns: 1fr;
  }
  .reviews-grid {
    grid-template-columns: 1fr;
  }
  .about-stat-card {
    position: relative;
    bottom: auto;
    right: auto;
    margin-top: var(--space-4);
    display: inline-block;
  }
}
@media (max-width: 600px) {
  .home-services .services-grid {
    grid-template-columns: 1fr;
  }
}
</style>


<!-- ═══════════════════════════════════════════════════════════════
     HERO — 60/40 Split with Lead-Capture Form
     ═══════════════════════════════════════════════════════════════ -->
<section class="hero hero-split" style="background-image: url('<?= htmlspecialchars($heroImage) ?>');" aria-label="CPA Roofing & Construction homepage hero">

  <div class="hero-text">
    <span class="hero-eyebrow">
      <i data-lucide="shield" style="width:14px;height:14px"></i>
      Serving <?= htmlspecialchars($address['city']) ?> Since <?= $yearEstablished ?>
    </span>
    <h1>Warrenton's <span class="text-accent">Roofing Contractor</span> You Can Count On</h1>
    <p class="hero-subtitle">
      CPA Roofing & Construction has protected Missouri homes and businesses for <?= $yearsInBusiness ?> years. From storm damage restoration to full commercial roof systems, we handle every project with the same standard — honest work, fair pricing, and results that last.
    </p>
    <div class="hero-actions">
      <a href="#estimate-form" class="btn btn-primary btn-lg">Get a Free Estimate</a>
<?php if (!empty($phone)): ?>
      <a href="tel:<?= phoneLink($phone) ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" style="width:18px;height:18px"></i> Call <?= formatPhone($phone) ?>
      </a>
<?php endif; ?>
    </div>
    <div class="hero-trust">
      <span class="hero-trust-item"><i data-lucide="shield-check" style="width:16px;height:16px"></i> Licensed &amp; Insured</span>
      <span class="hero-trust-item"><i data-lucide="clock" style="width:16px;height:16px"></i> <?= $yearsInBusiness ?>+ Years</span>
      <span class="hero-trust-item"><i data-lucide="star" style="width:16px;height:16px"></i> 4.9 Google Rating</span>
      <span class="hero-trust-item"><i data-lucide="calendar" style="width:16px;height:16px"></i> 7 Days a Week</span>
    </div>
  </div>

  <aside class="hero-form-card" id="estimate-form">
    <h2>Ready to Get Your Free Estimate?</h2>
    <p class="hero-form-tagline">No obligation. Same-day response.</p>
    <form action="<?= htmlspecialchars($formAction) ?>" method="POST" class="hero-form">
      <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
      <input type="hidden" name="_next" value="/thank-you">
      <input type="hidden" name="_form_location" value="hero">
      <input type="hidden" name="_consent_version" value="v2.1">
      <input type="hidden" name="_consent_page" value="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>">
      <div class="form-row">
        <input type="text" name="name" placeholder="Full name" required>
      </div>
      <div class="form-row">
        <input type="email" name="email" placeholder="Email address" required>
      </div>
      <div class="form-row">
        <input type="tel" name="phone" placeholder="Phone number" required>
      </div>
      <div class="form-row">
        <select name="service">
          <option value="">What do you need?</option>
          <option value="New Roof Installation">New Roof Installation</option>
          <option value="Roof Repairs">Roof Repair</option>
          <option value="Commercial Roofing">Commercial Roofing</option>
          <option value="Metal Roofing">Metal Roofing</option>
          <option value="TPO Roofing">TPO Roofing</option>
          <option value="Insurance Roofing Bids">Insurance / Storm Damage</option>
          <option value="Siding Installation & Repair">Siding</option>
          <option value="Other">Other</option>
        </select>
      </div>

      <fieldset class="form-consent-fieldset" style="border:none;padding:0;margin:var(--space-3) 0 0;">
        <label class="form-consent-item" style="display:flex;gap:var(--space-2);align-items:flex-start;margin-bottom:var(--space-2);cursor:pointer;">
          <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox" style="flex-shrink:0;width:16px;height:16px;margin-top:2px;accent-color:var(--color-accent);">
          <span style="font-size:var(--font-size-xs);color:rgba(255,255,255,0.6);line-height:1.4;">
            <strong style="color:rgba(255,255,255,0.8);">Email updates (optional):</strong> I agree to receive emails from <?= htmlspecialchars($siteName) ?> about my inquiry and services. Unsubscribe anytime.
          </span>
        </label>
        <label class="form-consent-item" style="display:flex;gap:var(--space-2);align-items:flex-start;margin-bottom:var(--space-2);cursor:pointer;">
          <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox" style="flex-shrink:0;width:16px;height:16px;margin-top:2px;accent-color:var(--color-accent);">
          <span style="font-size:var(--font-size-xs);color:rgba(255,255,255,0.6);line-height:1.4;">
            <strong style="color:rgba(255,255,255,0.8);">SMS/Text (optional):</strong> I agree to receive texts from <?= htmlspecialchars($siteName) ?>. Msg &amp; data rates may apply. Reply STOP to opt out. <strong style="color:rgba(255,255,255,0.8);">Consent is not a condition of purchase.</strong>
          </span>
        </label>
        <label class="form-consent-item" style="display:flex;gap:var(--space-2);align-items:flex-start;cursor:pointer;">
          <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required style="flex-shrink:0;width:16px;height:16px;margin-top:2px;accent-color:var(--color-accent);">
          <span style="font-size:var(--font-size-xs);color:rgba(255,255,255,0.6);line-height:1.4;">
            I agree to the <a href="/privacy-policy/" style="color:rgba(255,255,255,0.8);text-decoration:underline;">Privacy Policy</a> and <a href="/terms/" style="color:rgba(255,255,255,0.8);text-decoration:underline;">Terms of Service</a>. <span style="color:var(--color-accent);font-weight:700;">*</span>
          </span>
        </label>
      </fieldset>

      <button type="submit" class="btn btn-primary btn-block">Get My Free Estimate</button>
    </form>
  </aside>

</section>


<!-- ═══════════════════════════════════════════════════════════════
     TICKER STRIP — Trust & Proof Signals
     ═══════════════════════════════════════════════════════════════ -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <span><i data-lucide="calendar" style="width:14px;height:14px"></i> Since 1995</span>
    <span><i data-lucide="shield-check" style="width:14px;height:14px"></i> Licensed &amp; Insured</span>
    <span><i data-lucide="home" style="width:14px;height:14px"></i> Residential &amp; Commercial</span>
    <span><i data-lucide="star" style="width:14px;height:14px"></i> 4.9 Google Rating</span>
    <span><i data-lucide="clock" style="width:14px;height:14px"></i> 7 Days a Week</span>
    <span><i data-lucide="map-pin" style="width:14px;height:14px"></i> Warrenton, MO</span>
    <span><i data-lucide="cloud-rain" style="width:14px;height:14px"></i> Storm Damage Experts</span>
    <span><i data-lucide="compass" style="width:14px;height:14px"></i> 50-Mile Service Radius</span>
    <span><i data-lucide="award" style="width:14px;height:14px"></i> Free Estimates</span>
    <!-- Duplicate for seamless loop -->
    <span><i data-lucide="calendar" style="width:14px;height:14px"></i> Since 1995</span>
    <span><i data-lucide="shield-check" style="width:14px;height:14px"></i> Licensed &amp; Insured</span>
    <span><i data-lucide="home" style="width:14px;height:14px"></i> Residential &amp; Commercial</span>
    <span><i data-lucide="star" style="width:14px;height:14px"></i> 4.9 Google Rating</span>
    <span><i data-lucide="clock" style="width:14px;height:14px"></i> 7 Days a Week</span>
    <span><i data-lucide="map-pin" style="width:14px;height:14px"></i> Warrenton, MO</span>
    <span><i data-lucide="cloud-rain" style="width:14px;height:14px"></i> Storm Damage Experts</span>
    <span><i data-lucide="compass" style="width:14px;height:14px"></i> 50-Mile Service Radius</span>
    <span><i data-lucide="award" style="width:14px;height:14px"></i> Free Estimates</span>
  </div>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICES — Tinted Image Card Grid
     ═══════════════════════════════════════════════════════════════ -->
<section class="numbered-section home-services" data-num="01" aria-label="Roofing and construction services">
  <div class="container">

    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>What <span class="text-accent">Roofing &amp; Construction</span> Services Does CPA Offer in Warrenton?</h2>
      <p class="hero-answer">CPA Roofing & Construction, LLC is a licensed Missouri contractor delivering residential and commercial roofing and siding services across central and eastern Missouri. From new installations to storm damage restoration, every project is backed by <?= $yearsInBusiness ?> years of hands-on experience.</p>
      <span class="section-subtitle">Built to last — since 1995</span>
    </div>

    <div class="services-grid">
<?php
$tints = [1, 2, 3];
foreach ($homepageServices as $i => $svc):
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

    <div style="text-align:center; margin-top:var(--space-8);">
      <a href="/services/" class="btn btn-accent">View All <?= count($services) ?> Services</a>
    </div>

  </div>
</section>


<!-- Section Divider: Wave -->
<div class="divider-wave">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C200,60 400,0 600,30 C800,60 1000,0 1200,30 L1200,60 L0,60 Z" fill="var(--color-primary)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     STATS — Key Numbers
     ═══════════════════════════════════════════════════════════════ -->
<section class="stats-section" aria-label="Company statistics">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item" data-animate>
        <div class="stat-number" data-counter="<?= $yearsInBusiness ?>" data-suffix="+">0</div>
        <div class="stat-label">Years in Business</div>
      </div>
      <div class="stat-item" data-animate>
        <div class="stat-number" data-counter="2500" data-suffix="+">0</div>
        <div class="stat-label">Projects Completed</div>
      </div>
      <div class="stat-item" data-animate>
        <div class="stat-number" data-counter="4" data-suffix=".9">0</div>
        <div class="stat-label">Google Rating</div>
      </div>
      <div class="stat-item" data-animate>
        <div class="stat-number" data-counter="50" data-suffix="-mi">0</div>
        <div class="stat-label">Service Radius</div>
      </div>
    </div>
  </div>
</section>


<!-- Section Divider: Angle -->
<div class="divider-angle">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <polygon points="0,0 1200,60 0,60" fill="var(--color-primary)"/>
    <polygon points="0,0 1200,60 1200,0" fill="var(--color-white)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     MID-PAGE CTA BANNER
     ═══════════════════════════════════════════════════════════════ -->
<section class="cta-banner" aria-label="Call to action">
  <div class="container">
    <h2>Is Your Missouri Roof Ready for Storm Season?</h2>
    <p>Hail, wind, and ice cause billions in roof damage across Missouri every year. A free inspection today can save thousands in emergency repairs tomorrow. CPA Roofing responds within 48 hours — call or request your estimate now.</p>
    <div>
      <a href="#estimate-form" class="btn btn-primary btn-lg">Schedule Free Inspection</a>
<?php if (!empty($phone)): ?>
      <a href="tel:<?= phoneLink($phone) ?>" class="btn btn-outline-white btn-lg" style="margin-left:var(--space-4);">
        <i data-lucide="phone" style="width:18px;height:18px"></i> Call Now
      </a>
<?php endif; ?>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     ABOUT / PROCESS — Company Story + 4-Step Process
     ═══════════════════════════════════════════════════════════════ -->
<section class="numbered-section" data-num="02" aria-label="About CPA Roofing & Construction">
  <div class="container">
    <div class="about-split">

      <div class="about-content" data-animate>
        <span class="eyebrow-label">About Us</span>
        <h2>Why Warrenton Homeowners Have Trusted CPA Since <span class="text-accent">1995</span></h2>
        <p>Founded in 1995, CPA Roofing & Construction, LLC has spent nearly three decades building a reputation for honesty, reliability, and exceptional craftsmanship throughout Missouri. Based in Warrenton and serving communities across central and eastern Missouri, we have become the contractor of choice for homeowners and businesses who demand dependable work.</p>
        <p>We specialize in comprehensive roofing and construction solutions — residential and commercial roofing, siding, and insurance-based storm restoration. Our deep understanding of the insurance claims process means we are not just contractors — we are advocates who help clients navigate storm damage recovery and ensure they receive the support they deserve.</p>

        <div class="process-steps">
          <div class="process-step">
            <span class="process-step-num">1</span>
            <div>
              <h4>Inspect</h4>
              <p>Free roof inspection with detailed photo documentation</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step-num">2</span>
            <div>
              <h4>Guide</h4>
              <p>Walk you through options, materials, and insurance if applicable</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step-num">3</span>
            <div>
              <h4>Install</h4>
              <p>Professional installation by our licensed, insured crews</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step-num">4</span>
            <div>
              <h4>Walkthrough</h4>
              <p>Final inspection, cleanup, and warranty documentation</p>
            </div>
          </div>
        </div>
      </div>

      <div class="about-image" data-animate>
        <img src="<?= htmlspecialchars($aboutImage) ?>" alt="CPA Roofing & Construction crew at work in Warrenton, Missouri" width="600" height="450" loading="lazy" style="border-radius:var(--radius-lg);">
        <div class="about-stat-card">
          <div class="big-number"><?= $yearsInBusiness ?>+</div>
          <div class="label">Years in Business</div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     REVIEWS — Customer Testimonials
     ═══════════════════════════════════════════════════════════════ -->
<section class="reviews-section numbered-section" data-num="03" aria-label="Customer reviews">
  <div class="container">

    <div class="section-header" data-animate>
      <span class="eyebrow" style="color:var(--color-accent);">Testimonials</span>
      <h2>What Our Customers Say</h2>
      <p>Real feedback from homeowners and businesses across Warren County and central Missouri.</p>
    </div>

    <div class="reviews-grid">
<?php foreach (array_slice($reviews, 0, 3) as $review): ?>
      <div class="review-card" data-animate>
        <div class="review-stars">
<?php for ($s = 0; $s < $review['stars']; $s++): ?>
          <span class="star">&#9733;</span>
<?php endfor; ?>
        </div>
        <p class="review-text">&ldquo;<?= htmlspecialchars($review['text']) ?>&rdquo;</p>
        <div class="review-author">
          <div class="review-avatar"><?= strtoupper(substr($review['name'], 0, 1)) ?></div>
          <div>
            <div class="review-name"><?= htmlspecialchars($review['name']) ?></div>
            <div class="review-date"><?= htmlspecialchars($review['location']) ?></div>
            <div class="review-service"><?= htmlspecialchars($review['service']) ?></div>
          </div>
        </div>
      </div>
<?php endforeach; ?>
    </div>

    <div class="review-badge-strip" data-animate>
      <div class="review-badge">
        <i data-lucide="star" style="width:18px;height:18px;color:var(--color-star)"></i>
        4.9 on Google Reviews
      </div>
      <div class="review-badge">
        <i data-lucide="thumbs-up" style="width:18px;height:18px;color:var(--color-accent)"></i>
        Recommended on Facebook
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     FAQ — Common Questions
     ═══════════════════════════════════════════════════════════════ -->
<section class="numbered-section" data-num="04" aria-label="Frequently asked questions" style="background:var(--color-light);">
  <div class="container">

    <div class="section-header" data-animate>
      <span class="eyebrow">FAQ</span>
      <h2>What Are the Most Common <span class="text-accent">Roofing Questions</span> from Warrenton Homeowners?</h2>
      <p>Answers to the questions we hear most from homeowners and business owners in Warren County.</p>
    </div>

    <div class="faq-grid">
<?php foreach ($faqs as $faq): ?>
      <div class="faq-item" data-animate>
        <div class="faq-icon"><i data-lucide="help-circle" style="width:20px;height:20px"></i></div>
        <div>
          <h3><?= htmlspecialchars($faq['question']) ?></h3>
          <p><?= htmlspecialchars($faq['answer']) ?></p>
        </div>
      </div>
<?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     CLOSING CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="closing-cta" aria-label="Final call to action">
  <div class="container">
    <h2>Why Should You Choose a Roofing Contractor <span class="text-accent">Warrenton Trusts</span>?</h2>
    <p>From the first phone call to the final walkthrough, CPA Roofing & Construction delivers the craftsmanship and communication your project deserves. Licensed, insured, and available seven days a week.</p>
    <a href="#estimate-form" class="btn btn-primary btn-lg">Get Your Free Estimate</a>
  </div>
</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
