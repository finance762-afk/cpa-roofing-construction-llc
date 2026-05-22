<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'Drywall Repair in Warrenton, MO | ' . $siteName;
$pageDescription = 'Expert drywall repair in Warrenton, MO — water damage restoration, hole patching, crack repair, and texture matching by CPA Roofing & Construction. Licensed since 1995.';
$canonicalUrl    = $siteUrl . '/services/drywall-repair/';
$currentPage     = 'services';

$photoBase       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';
$heroImage       = $photoBase . '1779465579689-3yzlyg-40910872_1098157970333436_7289550869958230016_n.jpg';
$heroImagePreload = $heroImage;

$bodyPhoto1      = $photoBase . '1779465580272-eij90s-40924666_1098161123666454_4363022886756155392_n.jpg';
$bodyPhoto2      = $photoBase . '1779465580577-bgkfq7-40932323_1098161016999798_8523916490779394048_n.jpg';

// ── FAQs ──────────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How much does drywall repair cost in Warrenton, MO?',
        'answer'   => 'Small patch repairs in Warrenton typically cost $150–$350 per area. Larger water damage restoration involving multiple sheets, mold remediation prep, and retexturing ranges from $500 to $2,000+ depending on the affected square footage and whether structural framing behind the drywall also needs attention.',
    ],
    [
        'question' => 'Can you match existing wall textures during a drywall repair?',
        'answer'   => 'Yes — texture matching is one of our core specialties. Our finishers replicate smooth, orange peel, knockdown, skip-trowel, and stipple textures so the repaired section blends invisibly with surrounding walls. We apply test patches first on older Warrenton homes where texture patterns may have shifted over decades.',
    ],
    [
        'question' => 'How long does a drywall repair take from start to finish?',
        'answer'   => 'Simple hole patches and crack repairs are typically completed same-day or next-day. Water damage repairs that require removing wet material, drying the cavity, replacing insulation, hanging new board, and finishing with three coats of mud usually take 3–5 days including dry time between coats.',
    ],
    [
        'question' => 'Does CPA handle drywall repair after storm damage in Warrenton?',
        'answer'   => 'Absolutely. Storm damage drywall repair is one of our most common services in Warrenton. When roof leaks from hail or wind damage saturate ceiling drywall, we coordinate with your roofer (or handle the roof repair ourselves) and then replace damaged sections, treat for moisture, and refinish to match the original ceiling texture.',
    ],
];

// ── Schema ────────────────────────────────────────────────────
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Drywall Repair', 'item' => $siteUrl . '/services/drywall-repair/'],
    ],
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Drywall Repair',
    'description' => 'Expert drywall repair services for water damage, holes, cracks, and storm damage restoration in Warrenton, MO. Includes patching, texture matching, and seamless finishing.',
    'url' => $siteUrl . '/services/drywall-repair/',
    'areaServed' => [
        '@type' => 'City',
        'name' => 'Warrenton',
        'containedInPlace' => ['@type' => 'State', 'name' => 'Missouri'],
    ],
    'provider' => [
        '@type' => 'GeneralContractor',
        'name' => $siteName,
        '@id' => $siteUrl . '/#organization',
    ],
];

$faqSchema = generateFAQSchema($faqs);

$schemaMarkup = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [$breadcrumbSchema, $serviceSchema, $faqSchema],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<script type="application/ld+json">
<?php echo $schemaMarkup; ?>
</script>

<style>
/* ── Inner-Page Hero ──────────────────────────────────────────── */
.inner-hero {
  position: relative;
  min-height: 52vh;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: center 40%;
  padding-top: 100px;
  padding-bottom: var(--space-12);
}
.inner-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(160deg, rgba(26, 26, 46, 0.94) 0%, rgba(0, 94, 245, 0.55) 100%);
}
.inner-hero::after {
  content: '';
  position: absolute;
  inset: 0;
  background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
}
.inner-hero .container { position: relative; z-index: 2; }
.inner-hero h1 { color: var(--color-white); margin-bottom: var(--space-4); }
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

/* ── Service Detail Sections ─────────────────────────────────── */
.service-detail { background: var(--color-white); }
.service-detail .split {
  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
  gap: var(--space-12);
  align-items: center;
}
.service-detail .split-reverse {
  display: grid;
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-12);
  align-items: center;
}
.service-detail .split-img {
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}
.service-detail .split-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  aspect-ratio: 4 / 3;
}
.detail-prose { max-width: 60ch; }
.detail-prose p { color: var(--color-gray-dark); line-height: 1.75; margin-bottom: var(--space-4); }
.detail-prose h2 { margin-bottom: var(--space-4); }
.detail-prose .answer-block {
  background: var(--color-card-tint-2);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-6);
  font-size: var(--font-size-lg);
  line-height: 1.7;
  color: var(--color-dark);
}
.identity-sentence { font-weight: 600; }

/* ── Process Section ─────────────────────────────────────────── */
.process-section { background: var(--color-light); }
.process-timeline {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-10);
  position: relative;
}
.process-timeline::before {
  content: '';
  position: absolute;
  top: 36px;
  left: 10%;
  right: 10%;
  height: 3px;
  background: linear-gradient(90deg, var(--color-primary), var(--color-accent));
  border-radius: 2px;
  z-index: 0;
}
.timeline-step {
  text-align: center;
  position: relative;
  z-index: 1;
}
.timeline-step-dot {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-full);
  background: var(--color-white);
  border: 3px solid var(--color-primary);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  font-size: var(--font-size-xl);
  color: var(--color-primary);
  margin-bottom: var(--space-4);
  box-shadow: var(--shadow-md);
}
.timeline-step h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); }
.timeline-step p { color: var(--color-gray); font-size: var(--font-size-sm); line-height: 1.6; max-width: 240px; margin: 0 auto; }

/* ── Why Choose Us ───────────────────────────────────────────── */
.why-section { background: var(--color-dark); color: var(--color-white); }
.why-section h2 { color: var(--color-white); }
.why-section .answer-block {
  background: rgba(255,255,255,0.08);
  border-left: 4px solid var(--color-accent);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-8);
  color: rgba(255,255,255,0.9);
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.why-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-6);
}
.why-card {
  background: rgba(255,255,255,0.06);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  border: 1px solid rgba(255,255,255,0.08);
  text-align: center;
  transition: transform var(--transition-base), background var(--transition-base);
}
.why-card:hover {
  transform: translateY(-3px);
  background: rgba(255,255,255,0.1);
}
.why-card-icon {
  width: 56px;
  height: 56px;
  border-radius: var(--radius-full);
  background: rgba(0, 94, 245, 0.2);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-4);
  color: var(--color-accent);
}
.why-card h3 { color: var(--color-white); font-size: var(--font-size-lg); margin-bottom: var(--space-2); }
.why-card p { color: rgba(255,255,255,0.75); font-size: var(--font-size-sm); line-height: 1.65; }

/* ── FAQ Section ─────────────────────────────────────────────── */
.faq-section { background: var(--color-white); }
.faq-list { max-width: 780px; margin: var(--space-10) auto 0; }
.faq-item { border-bottom: 1px solid var(--color-gray-light); padding: var(--space-6) 0; }
.faq-item:first-child { border-top: 1px solid var(--color-gray-light); }
.faq-item h3 {
  font-size: var(--font-size-lg);
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: var(--space-4);
}
.faq-item h3::after {
  content: '+';
  font-size: var(--font-size-2xl);
  color: var(--color-accent);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.faq-item.active h3::after { transform: rotate(45deg); }
.faq-answer { max-height: 0; overflow: hidden; transition: max-height var(--transition-slow); }
.faq-item.active .faq-answer { max-height: 300px; }
.faq-answer p { padding-top: var(--space-4); color: var(--color-gray-dark); line-height: 1.75; }

/* ── CTA Section ─────────────────────────────────────────────── */
.page-cta { background: var(--color-dark); text-align: center; }
.page-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.page-cta p { color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto var(--space-8); }

/* ── Related Services ────────────────────────────────────────── */
.related-section { background: var(--color-light); }

/* ── Section Dividers ────────────────────────────────────────── */
.divider-wave { width: 100%; height: 60px; display: block; }
.divider-angle { width: 100%; height: 50px; display: block; }

/* ── Damage Types Grid ───────────────────────────────────────── */
.damage-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-6);
  margin-top: var(--space-8);
}
.damage-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-6);
  box-shadow: var(--shadow-card);
  border-top: 3px solid var(--color-accent);
  transition: transform var(--transition-base);
}
.damage-card:hover { transform: translateY(-3px); }
.damage-card-icon {
  color: var(--color-accent);
  margin-bottom: var(--space-3);
}
.damage-card h3 { font-size: var(--font-size-lg); margin-bottom: var(--space-2); }
.damage-card p { color: var(--color-gray-dark); font-size: var(--font-size-sm); line-height: 1.65; }

/* ── Last Updated ────────────────────────────────────────────── */
.last-updated {
  text-align: center;
  font-size: var(--font-size-sm);
  color: var(--color-gray);
  padding: var(--space-4) 0 0;
}

/* ── Responsive ──────────────────────────────────────────────── */
@media (max-width: 1024px) {
  .service-detail .split,
  .service-detail .split-reverse { grid-template-columns: 1fr; gap: var(--space-8); }
  .process-timeline { grid-template-columns: repeat(2, 1fr); }
  .process-timeline::before { display: none; }
  .why-grid { grid-template-columns: repeat(2, 1fr); }
  .damage-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .inner-hero { min-height: 42vh; }
  .process-timeline { grid-template-columns: 1fr; }
  .why-grid { grid-template-columns: 1fr; }
}
</style>


<!-- ═══════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="inner-hero" style="background-image: url('<?= htmlspecialchars($heroImage) ?>');" aria-label="Drywall repair hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Drywall Repair</span>
    </nav>
    <h1>Drywall Repair in <span class="text-accent">Warrenton, MO</span></h1>
    <p class="hero-answer">CPA Roofing &amp; Construction, LLC is a licensed Missouri contractor based in Warrenton, specializing in drywall repair for water damage, storm damage, holes, cracks, and aging walls. Our finishers match existing textures so repaired sections blend invisibly — serving Warren County and central Missouri since 1995.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICE DETAILS — SPLIT SECTIONS
     ═══════════════════════════════════════════════════════════════ -->
<svg class="divider-angle" viewBox="0 0 1440 50" preserveAspectRatio="none" aria-hidden="true">
  <path d="M0,50 L1440,0 L1440,50Z" fill="var(--color-white)"/>
</svg>

<section class="service-detail section" aria-label="Drywall repair details">
  <div class="container">

    <div class="split" data-animate>
      <div class="split-img reveal-left">
        <img src="<?= htmlspecialchars($bodyPhoto1) ?>" alt="CPA crew repairing water-damaged drywall in a Warrenton home" width="600" height="450" loading="lazy">
      </div>
      <div class="detail-prose reveal-right">
        <h2>What Types of Drywall Damage Does CPA <span class="text-accent">Repair</span> in Warrenton?</h2>
        <p class="answer-block">CPA Roofing &amp; Construction repairs all common drywall damage in Warrenton homes — water stains and saturation from roof leaks, holes from doorknobs and accidents, nail pops from settling foundations, hairline cracks along seams, and full-section replacements after storm damage or plumbing failures.</p>

        <p class="identity-sentence"><?= htmlspecialchars($siteName) ?> is a licensed Missouri general contractor based in Warrenton, providing drywall repair and interior restoration services across Warren County since <?= $yearEstablished ?>.</p>

        <p>Water damage is the most frequent drywall repair we handle in Warrenton. Central Missouri's severe thunderstorm season — April through August — drives roof leaks that saturate ceiling drywall and run down interior walls. Left untreated, wet drywall breeds mold within 48 hours. Our crews remove the damaged section, inspect and treat the framing cavity, install fresh board, and refinish to match the original ceiling or wall texture.</p>

        <p>Drywall repair near me in Warrenton also includes addressing the settling cracks common in homes built on the clay-heavy soils found throughout Warren County. These cracks typically appear at window and door corners where structural movement concentrates stress. We reinforce these joints with fiberglass mesh tape and flexible compound that moves with the home instead of re-cracking within a season.</p>
      </div>
    </div>

    <div class="split-reverse" data-animate style="margin-top: var(--space-16);">
      <div class="detail-prose reveal-left">
        <h2>How Does CPA Match <span class="text-accent">Existing Textures</span> During Drywall Repair?</h2>
        <p class="answer-block">Texture matching is the hardest part of any drywall repair — and it's where most contractors fall short. CPA's finishers apply test patches on cardboard first, adjusting compound consistency, spray pressure, and knockdown timing until the new texture is indistinguishable from the original wall surface.</p>

        <p>Warrenton homes built between the 1970s and 1990s often have hand-applied textures that can't be replicated with modern spray equipment alone. Our finishers combine spray application with hand tools — trowels, brushes, and sponges — to recreate patterns that match the original craftsman's technique. For homes in Warrenton's established neighborhoods near Warrior Lane and the Highway 47 corridor, this attention to detail is the difference between a visible patch and an invisible repair.</p>

        <p>After texturing, we prime the repaired area with PVA primer to equalize surface porosity. Without this step, the repaired section absorbs paint differently than surrounding walls, creating a visible "flash" mark even under two coats of finish paint. This primer step adds 30 minutes to the job but eliminates callbacks — a step many drywall contractors in the Warrenton area skip to save time.</p>
      </div>
      <div class="split-img reveal-right">
        <img src="<?= htmlspecialchars($bodyPhoto2) ?>" alt="Texture matching during drywall repair by CPA in Warrenton, MO" width="600" height="450" loading="lazy">
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     COMMON DAMAGE TYPES
     ═══════════════════════════════════════════════════════════════ -->
<section class="section" style="background: var(--color-light);" aria-label="Common drywall damage types">
  <div class="container">
    <div class="section-title" style="text-align:center;" data-animate>
      <span class="eyebrow-label">Common Issues</span>
      <h2>What Drywall Problems Are Most Common in <span class="text-accent">Warrenton Homes</span>?</h2>
      <p class="answer-block" style="max-width:680px; margin:0 auto;">Warrenton's climate — hot, humid summers and freeze-thaw winters — creates specific conditions that accelerate drywall deterioration. These are the three damage categories we repair most often across Warren County.</p>
    </div>

    <div class="damage-grid">
      <div class="damage-card reveal-up reveal-delay-1" data-animate>
        <div class="damage-card-icon"><i data-lucide="cloud-rain" style="width:28px;height:28px"></i></div>
        <h3>Water &amp; Storm Damage</h3>
        <p>Roof leaks from hail, wind-driven rain, and ice dams saturate ceiling drywall and wall cavities. We remove wet material, dry and treat the cavity, then install and finish new drywall — coordinating with roof repairs when needed.</p>
      </div>
      <div class="damage-card reveal-up reveal-delay-2" data-animate>
        <div class="damage-card-icon"><i data-lucide="move-diagonal" style="width:28px;height:28px"></i></div>
        <h3>Cracks &amp; Nail Pops</h3>
        <p>Foundation settling on Warren County's clay soils causes hairline cracks at corners, seam separation, and nail/screw pops. We reinforce with mesh tape and flexible compound that accommodates seasonal movement without re-cracking.</p>
      </div>
      <div class="damage-card reveal-up reveal-delay-3" data-animate>
        <div class="damage-card-icon"><i data-lucide="circle-dot" style="width:28px;height:28px"></i></div>
        <h3>Holes &amp; Impact Damage</h3>
        <p>Doorknob holes, furniture impacts, and accidental damage are fast fixes. We cut a clean opening, install a patch with backing, apply three coats of compound, and texture-match the surrounding wall — most small repairs finished same-day.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     PROCESS
     ═══════════════════════════════════════════════════════════════ -->
<svg class="divider-wave" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true">
  <path d="M0,30 C360,0 720,60 1080,30 C1260,15 1380,40 1440,30 L1440,60 L0,60Z" fill="var(--color-light)"/>
</svg>

<section class="process-section section" aria-label="Repair process">
  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label">Our Process</span>
      <h2>How Does CPA Handle Drywall Repairs in <span class="text-accent">Warrenton</span>?</h2>
      <p class="answer-block" style="max-width:680px; margin:0 auto;">Every drywall repair in Warrenton follows our four-step process — from damage assessment through final texture match. This systematic approach ensures the repaired area is invisible once painted, regardless of damage severity.</p>
    </div>

    <div class="process-timeline">
      <div class="timeline-step reveal-up reveal-delay-1" data-animate>
        <div class="timeline-step-dot">1</div>
        <h3>Assess &amp; Quote</h3>
        <p>We inspect the damage, check for moisture or mold behind the wall, and provide a fixed-price quote. No surprises — what we quote is what you pay.</p>
      </div>
      <div class="timeline-step reveal-up reveal-delay-2" data-animate>
        <div class="timeline-step-dot">2</div>
        <h3>Remove &amp; Prep</h3>
        <p>Damaged drywall is cut back to clean edges. We inspect framing, treat any mold or moisture, and install backing boards for the new patch.</p>
      </div>
      <div class="timeline-step reveal-up reveal-delay-3" data-animate>
        <div class="timeline-step-dot">3</div>
        <h3>Patch &amp; Finish</h3>
        <p>New drywall is installed and finished with three coats of compound, sanding between each pass. Seams, corners, and fasteners all receive individual attention.</p>
      </div>
      <div class="timeline-step reveal-up reveal-delay-4" data-animate>
        <div class="timeline-step-dot">4</div>
        <h3>Texture &amp; Prime</h3>
        <p>We replicate your existing wall texture, apply PVA primer to equalize porosity, and verify the repair under raking light before handoff.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     WHY CHOOSE US
     ═══════════════════════════════════════════════════════════════ -->
<svg class="divider-angle" viewBox="0 0 1440 50" preserveAspectRatio="none" aria-hidden="true">
  <path d="M0,0 L1440,20 L1440,50 L0,50Z" fill="var(--color-dark)"/>
</svg>

<section class="why-section section" aria-label="Why choose CPA for drywall repair">
  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label">Why CPA</span>
      <h2>Why Do Warrenton Property Owners Trust CPA for <span class="text-accent">Drywall Repair</span>?</h2>
      <p class="answer-block">CPA Roofing &amp; Construction has repaired drywall in hundreds of Warrenton homes and commercial buildings since 1995. As a full-service general contractor, we handle the root cause — roof leaks, plumbing failures, storm damage — and the drywall repair together, eliminating the need to coordinate multiple trades.</p>
    </div>

    <div class="why-grid">
      <div class="why-card reveal-scale reveal-delay-1" data-animate>
        <div class="why-card-icon"><i data-lucide="layers" style="width:24px;height:24px"></i></div>
        <h3>Root-Cause Repair</h3>
        <p>We fix the leak or damage source first, then repair the drywall — so the problem doesn't return six months later.</p>
      </div>
      <div class="why-card reveal-scale reveal-delay-2" data-animate>
        <div class="why-card-icon"><i data-lucide="eye" style="width:24px;height:24px"></i></div>
        <h3>Invisible Patches</h3>
        <p>Three-coat finishing and meticulous texture matching make repaired sections undetectable once painted.</p>
      </div>
      <div class="why-card reveal-scale reveal-delay-3" data-animate>
        <div class="why-card-icon"><i data-lucide="shield-check" style="width:24px;height:24px"></i></div>
        <h3>Licensed &amp; Insured</h3>
        <p>Full general liability and workers' comp coverage. Every repair meets Missouri building standards.</p>
      </div>
      <div class="why-card reveal-scale reveal-delay-4" data-animate>
        <div class="why-card-icon"><i data-lucide="zap" style="width:24px;height:24px"></i></div>
        <h3>Fast Turnaround</h3>
        <p>Small patches done same-day. Water damage repairs completed in 3–5 days including full dry time and finishing.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     FAQ
     ═══════════════════════════════════════════════════════════════ -->
<svg class="divider-wave" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true">
  <path d="M0,0 C480,60 960,0 1440,30 L1440,60 L0,60Z" fill="var(--color-white)"/>
</svg>

<section class="faq-section section" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Do Warrenton Homeowners Ask About <span class="text-accent">Drywall Repair</span>?</h2>
      <p class="answer-block" style="max-width:680px; margin:0 auto;">These are the most common drywall repair questions we hear from Warrenton residents. If your situation isn't covered here, request a free estimate — we respond within 48 hours with a scope and price.</p>
    </div>

    <div class="faq-list">
<?php foreach ($faqs as $i => $faq): ?>
      <div class="faq-item reveal-up" data-animate>
        <h3><?= htmlspecialchars($faq['question']) ?></h3>
        <div class="faq-answer">
          <p><?= htmlspecialchars($faq['answer']) ?></p>
        </div>
      </div>
<?php endforeach; ?>
    </div>

    <p class="last-updated">Last Updated: <?php echo date('F Y'); ?></p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     CTA
     ═══════════════════════════════════════════════════════════════ -->
<section class="page-cta section" aria-label="Get a free drywall repair estimate">
  <div class="container">
    <h2>Need <span class="text-accent">Drywall Repair</span> in Warrenton?</h2>
    <p class="answer-block">CPA Roofing &amp; Construction provides free, no-obligation estimates for every drywall repair project in Warrenton, MO — from small patches to full water damage restoration. Call now or submit your request online.</p>
<?php if (!empty($phone)): ?>
    <a href="tel:<?= phoneLink($phone) ?>" class="btn btn-primary btn-lg" style="margin-right:var(--space-4);">
      <i data-lucide="phone" style="width:18px;height:18px"></i> Call Now
    </a>
<?php endif; ?>
    <a href="/contact/" class="btn btn-accent btn-lg">Get Your Free Estimate</a>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     RELATED SERVICES
     ═══════════════════════════════════════════════════════════════ -->
<section class="related-section section" aria-label="Related construction services">
  <div class="container">
    <div class="section-title" style="text-align:center;" data-animate>
      <span class="eyebrow-label">More Services</span>
      <h2>What Other Services Does CPA Offer in <span class="text-accent">Warrenton</span>?</h2>
      <p class="answer-block" style="max-width:680px; margin:0 auto;">Drywall repair often follows roof leaks or storm damage. CPA Roofing &amp; Construction handles the full restoration — from the roof down to the finished wall. Explore these related services.</p>
    </div>

    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">

      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1" data-animate>
        <div class="service-card__image">
          <img src="<?= htmlspecialchars($photoBase) ?>1779465577835-ey009e-40848401_1098160610333172_2132106209086406656_n.jpg" alt="Drywall installation by CPA Roofing in Warrenton, MO" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="layout"></i></div>
          <h3>Drywall Installation</h3>
          <p class="service-card__desc">Full-scope drywall for new builds, remodels, and storm restoration in Warrenton.</p>
          <ul>
            <li>Smooth, textured &amp; skip-trowel</li>
            <li>Water-resistant board available</li>
            <li>Tape, mud &amp; sand included</li>
          </ul>
          <a href="/services/drywall-installation/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2" data-animate>
        <div class="service-card__image">
          <img src="<?= htmlspecialchars($photoBase) ?>1779465576127-6yqxml-40685019_1098160703666496_7573720096833536000_n.jpg" alt="Roof repair by CPA Roofing in Warrenton" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="wrench"></i></div>
          <h3>Roof Repairs</h3>
          <p class="service-card__desc">Fast leak fixes and damage repair to keep your property protected.</p>
          <ul>
            <li>Same-day emergency response</li>
            <li>Leak detection &amp; flashing repair</li>
            <li>Extends existing roof life</li>
          </ul>
          <a href="/services/roofing-services/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3" data-animate>
        <div class="service-card__image">
          <img src="<?= htmlspecialchars($photoBase) ?>1779465578117-ahpx0j-40855264_1098160506999849_1343386300408922112_n.jpg" alt="Insurance roofing bid by CPA Roofing in Warrenton" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="file-text"></i></div>
          <h3>Insurance Roofing Bids</h3>
          <p class="service-card__desc">We handle the insurance paperwork so you focus on your family.</p>
          <ul>
            <li>Free storm damage inspections</li>
            <li>Direct adjuster coordination</li>
            <li>Maximize your claim payout</li>
          </ul>
          <a href="/services/roofing-services/" class="service-card__cta">Learn more</a>
        </div>
      </article>

    </div>
  </div>
</section>


<!-- FAQ Toggle Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.faq-item h3').forEach(function(heading) {
    heading.addEventListener('click', function() {
      var item = this.parentElement;
      var wasActive = item.classList.contains('active');
      document.querySelectorAll('.faq-item').forEach(function(el) { el.classList.remove('active'); });
      if (!wasActive) item.classList.add('active');
    });
  });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
