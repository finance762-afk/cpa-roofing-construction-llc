<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'Drywall Installation in Warrenton, MO | ' . $siteName;
$pageDescription = 'Professional drywall installation in Warrenton, MO by CPA Roofing & Construction. New construction, remodels, water-resistant board, textures, and taping — licensed since 1995.';
$canonicalUrl    = $siteUrl . '/services/drywall-installation/';
$currentPage     = 'services';

$photoBase       = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';
$heroImage       = $photoBase . '1779465577835-ey009e-40848401_1098160610333172_2132106209086406656_n.jpg';
$heroImagePreload = $heroImage;

$bodyPhoto1      = $photoBase . '1779465579689-3yzlyg-40910872_1098157970333436_7289550869958230016_n.jpg';
$bodyPhoto2      = $photoBase . '1779465579984-jgnwrl-40922980_1098157833666783_5970421295001632768_n.jpg';

// ── FAQs ──────────────────────────────────────────────────────
$faqs = [
    [
        'question' => 'How long does drywall installation take for a typical Warrenton home?',
        'answer'   => 'A standard single-story home in Warrenton takes 3–5 days for hanging, taping, and sanding. Larger homes or projects requiring multiple coats of mud and custom textures may extend to 7–10 days depending on room count and ceiling height.',
    ],
    [
        'question' => 'What types of drywall do you install in Warrenton, MO?',
        'answer'   => 'We install standard 1/2-inch and 5/8-inch drywall, moisture-resistant greenboard for bathrooms and kitchens, fire-rated Type X board for garages and utility rooms, and soundproof drywall for bedrooms and home offices. Material selection depends on the room\'s function and local code requirements.',
    ],
    [
        'question' => 'Does CPA Roofing & Construction handle both drywall and finishing?',
        'answer'   => 'Yes — we handle the full scope from hanging sheets to final finishing. Our crews tape, mud, sand, and apply your chosen texture (smooth, orange peel, knockdown, or skip-trowel) so the walls are paint-ready when we leave.',
    ],
    [
        'question' => 'How much does drywall installation cost in Warrenton?',
        'answer'   => 'Most residential drywall projects in Warrenton range from $1.50 to $3.50 per square foot installed and finished. Final cost depends on board thickness, ceiling height, texture style, and whether the space is new construction or a remodel requiring demolition of existing material.',
    ],
];

// ── Schema ────────────────────────────────────────────────────
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Drywall Installation', 'item' => $siteUrl . '/services/drywall-installation/'],
    ],
];

$serviceSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Drywall Installation',
    'description' => 'Professional drywall installation services for new construction and remodels in Warrenton, MO. Includes hanging, taping, mudding, sanding, and texture application.',
    'url' => $siteUrl . '/services/drywall-installation/',
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
  background-position: center 30%;
  padding-top: 100px;
  padding-bottom: var(--space-12);
}
.inner-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(145deg, rgba(26, 26, 46, 0.93) 0%, rgba(245, 86, 0, 0.72) 100%);
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
  grid-template-columns: 1.1fr 0.9fr;
  gap: var(--space-12);
  align-items: center;
}
.service-detail .split-reverse {
  display: grid;
  grid-template-columns: 0.9fr 1.1fr;
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
  background: var(--color-card-tint-1);
  border-left: 4px solid var(--color-primary);
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
.process-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: var(--space-8);
  margin-top: var(--space-10);
}
.process-step {
  text-align: center;
  padding: var(--space-8) var(--space-4);
  background: var(--color-white);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-card);
  position: relative;
  transition: transform var(--transition-base), box-shadow var(--transition-base);
}
.process-step:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-lg);
}
.process-step-number {
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: var(--color-primary);
  color: var(--color-white);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: 800;
  font-size: var(--font-size-xl);
  margin-bottom: var(--space-4);
}
.process-step h3 { font-size: var(--font-size-xl); margin-bottom: var(--space-2); }
.process-step p { color: var(--color-gray); font-size: var(--font-size-sm); line-height: 1.6; }

/* ── Why Choose Us ───────────────────────────────────────────── */
.why-section { background: var(--color-dark); color: var(--color-white); }
.why-section h2 { color: var(--color-white); }
.why-section .answer-block {
  background: rgba(255,255,255,0.08);
  border-left: 4px solid var(--color-primary);
  padding: var(--space-4) var(--space-6);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin-bottom: var(--space-8);
  color: rgba(255,255,255,0.9);
  font-size: var(--font-size-lg);
  line-height: 1.7;
}
.why-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-8);
}
.why-card {
  background: rgba(255,255,255,0.06);
  border-radius: var(--radius-lg);
  padding: var(--space-8);
  border: 1px solid rgba(255,255,255,0.08);
  transition: transform var(--transition-base), background var(--transition-base);
}
.why-card:hover {
  transform: translateY(-3px);
  background: rgba(255,255,255,0.1);
}
.why-card-icon {
  width: 52px;
  height: 52px;
  border-radius: var(--radius-md);
  background: rgba(245, 86, 0, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: var(--space-4);
  color: var(--color-primary);
}
.why-card h3 { color: var(--color-white); font-size: var(--font-size-xl); margin-bottom: var(--space-2); }
.why-card p { color: rgba(255,255,255,0.75); font-size: var(--font-size-sm); line-height: 1.65; }

/* ── FAQ Section ─────────────────────────────────────────────── */
.faq-section { background: var(--color-white); }
.faq-list {
  max-width: 780px;
  margin: var(--space-10) auto 0;
}
.faq-item {
  border-bottom: 1px solid var(--color-gray-light);
  padding: var(--space-6) 0;
}
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
  color: var(--color-primary);
  flex-shrink: 0;
  transition: transform var(--transition-base);
}
.faq-item.active h3::after {
  transform: rotate(45deg);
}
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-slow);
}
.faq-item.active .faq-answer {
  max-height: 300px;
}
.faq-answer p {
  padding-top: var(--space-4);
  color: var(--color-gray-dark);
  line-height: 1.75;
}

/* ── CTA Section ─────────────────────────────────────────────── */
.page-cta { background: var(--color-dark); text-align: center; }
.page-cta h2 { color: var(--color-white); margin-bottom: var(--space-4); }
.page-cta p { color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto var(--space-8); }

/* ── Related Services ────────────────────────────────────────── */
.related-section { background: var(--color-light); }

/* ── Section Divider ─────────────────────────────────────────── */
.divider-wave {
  width: 100%;
  height: 60px;
  display: block;
}
.divider-angle {
  width: 100%;
  height: 50px;
  display: block;
}

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
  .process-grid { grid-template-columns: repeat(2, 1fr); }
  .why-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
  .inner-hero { min-height: 42vh; }
  .process-grid { grid-template-columns: 1fr; }
}
</style>


<!-- ═══════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="inner-hero" style="background-image: url('<?= htmlspecialchars($heroImage) ?>');" aria-label="Drywall installation hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Drywall Installation</span>
    </nav>
    <h1>Drywall Installation in <span class="text-accent">Warrenton, MO</span></h1>
    <p class="hero-answer">CPA Roofing &amp; Construction, LLC is a licensed Missouri general contractor based in Warrenton, providing full-scope drywall installation for new construction, remodels, and storm damage restoration. Our crews handle hanging, taping, mudding, sanding, and texturing — delivering paint-ready walls and ceilings since 1995.</p>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICE DETAILS — SPLIT SECTIONS
     ═══════════════════════════════════════════════════════════════ -->
<svg class="divider-wave" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true">
  <path d="M0,30 C360,60 720,0 1080,30 C1260,45 1380,20 1440,30 L1440,60 L0,60Z" fill="var(--color-white)"/>
</svg>

<section class="service-detail section" aria-label="Drywall installation details">
  <div class="container">

    <div class="split" data-animate>
      <div class="detail-prose reveal-left">
        <h2>What Does Professional Drywall Installation <span class="text-accent">Include</span> in Warrenton?</h2>
        <p class="answer-block">Professional drywall installation in Warrenton covers board selection, hanging, joint taping, mud application, sanding, and final texture. CPA Roofing &amp; Construction handles every step in-house so homeowners receive paint-ready walls without coordinating multiple subcontractors.</p>

        <p class="identity-sentence"><?= htmlspecialchars($siteName) ?> is a licensed Missouri contractor based in Warrenton, serving Warren County and surrounding communities with interior construction services since <?= $yearEstablished ?>.</p>

        <p>New-construction drywall installation in Warrenton starts with accurate measurements and material ordering. We assess stud spacing, ceiling height, and room layout before selecting board thickness — standard half-inch for most interior walls, 5/8-inch Type X where fire ratings are required by Warren County code, and moisture-resistant greenboard for bathrooms, laundry rooms, and kitchens.</p>

        <p>After hanging, our finishers apply three coats of joint compound over taped seams, inside corners, and fastener dimples. Each coat is sanded smooth before the next, resulting in a Level 4 or Level 5 finish depending on the project scope. This multi-pass approach eliminates visible seams and shadow lines — the difference between an amateur job and a professional one.</p>
      </div>
      <div class="split-img reveal-right">
        <img src="<?= htmlspecialchars($bodyPhoto1) ?>" alt="CPA crew installing drywall in a Warrenton, MO home" width="600" height="450" loading="lazy">
      </div>
    </div>

    <div class="split-reverse" data-animate style="margin-top: var(--space-16);">
      <div class="split-img reveal-left">
        <img src="<?= htmlspecialchars($bodyPhoto2) ?>" alt="Drywall taping and mudding by CPA Roofing & Construction in Warrenton" width="600" height="450" loading="lazy">
      </div>
      <div class="detail-prose reveal-right">
        <h2>Which Drywall Textures Are Available for <span class="text-accent">Warrenton Homes</span>?</h2>
        <p class="answer-block">CPA installs smooth, orange peel, knockdown, skip-trowel, and hand-applied textures for Warrenton homeowners. Each texture is matched to the existing walls during remodels or chosen fresh for new construction — we bring sample boards so you see the finish before we apply it.</p>

        <p>Texture selection depends on room function, lighting, and personal preference. Smooth finishes work well in modern Warrenton homes built along Highway 47, while knockdown and skip-trowel textures hide minor imperfections and add character to older properties throughout the Warren County area. For remodels, texture matching matters — our finishers replicate the existing pattern so the new section blends seamlessly with original walls.</p>

        <p>Water-resistant drywall installation is standard practice for any Warrenton bathroom or kitchen project. We use mold-resistant greenboard or purple board in moisture-prone areas, paired with proper vapor barriers. Central Missouri's humid summers and freeze-thaw winters create conditions that punish improperly installed drywall — especially in basements and crawl-space-adjacent rooms common in Warrenton's older housing stock near downtown and the Historic District.</p>
      </div>
    </div>

  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     PROCESS
     ═══════════════════════════════════════════════════════════════ -->
<svg class="divider-angle" viewBox="0 0 1440 50" preserveAspectRatio="none" aria-hidden="true">
  <path d="M0,50 L1440,0 L1440,50Z" fill="var(--color-light)"/>
</svg>

<section class="process-section section" aria-label="Installation process">
  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label">Our Process</span>
      <h2>How Does CPA Handle Drywall Installation in <span class="text-accent">Warrenton</span>?</h2>
      <p class="answer-block" style="max-width:680px; margin:0 auto;">Our four-step drywall installation process covers the full scope from initial measurement through final texture application. Each project in Warrenton follows this sequence to ensure consistent, paint-ready results every time.</p>
    </div>

    <div class="process-grid">
      <div class="process-step reveal-up reveal-delay-1" data-animate>
        <div class="process-step-number">1</div>
        <h3>Measure &amp; Plan</h3>
        <p>We measure every wall and ceiling, calculate board counts, and confirm stud spacing. Material orders include waste allowance so the job never stalls waiting for sheets.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-2" data-animate>
        <div class="process-step-number">2</div>
        <h3>Hang &amp; Fasten</h3>
        <p>Sheets are cut and hung ceiling-first, then walls. We use coarse-thread screws at code-specified intervals and stagger joints to prevent cracking along seams.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-3" data-animate>
        <div class="process-step-number">3</div>
        <h3>Tape, Mud &amp; Sand</h3>
        <p>Three coats of joint compound over paper tape, with sanding between coats. Inside corners, butt joints, and screw dimples all receive individual attention.</p>
      </div>
      <div class="process-step reveal-up reveal-delay-4" data-animate>
        <div class="process-step-number">4</div>
        <h3>Texture &amp; Inspect</h3>
        <p>Your chosen texture is applied — smooth, knockdown, orange peel, or skip-trowel. We do a final walk-through under raking light to catch any imperfections before handoff.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     WHY CHOOSE US
     ═══════════════════════════════════════════════════════════════ -->
<svg class="divider-wave" viewBox="0 0 1440 60" preserveAspectRatio="none" aria-hidden="true">
  <path d="M0,0 C480,60 960,0 1440,30 L1440,60 L0,60Z" fill="var(--color-dark)"/>
</svg>

<section class="why-section section" aria-label="Why choose CPA for drywall">
  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label">Why CPA</span>
      <h2>Why Do Warrenton Homeowners Choose CPA for <span class="text-accent">Drywall Installation</span>?</h2>
      <p class="answer-block">CPA Roofing &amp; Construction has installed drywall across hundreds of Warrenton properties since 1995. Our crews handle hanging through finishing in-house — no subcontracted labor, no scheduling gaps between trades, and a single point of accountability from first sheet to final texture.</p>
    </div>

    <div class="why-grid">
      <div class="why-card reveal-left reveal-delay-1" data-animate>
        <div class="why-card-icon"><i data-lucide="clock" style="width:24px;height:24px"></i></div>
        <h3><?= $yearsInBusiness ?>+ Years in Warrenton</h3>
        <p>Established in <?= $yearEstablished ?>, we've worked on homes across Warren County — from new builds along Industrial Drive to remodels in Warrenton's original neighborhoods near Main Street. That local experience means we understand the building conditions specific to this area.</p>
      </div>
      <div class="why-card reveal-right reveal-delay-2" data-animate>
        <div class="why-card-icon"><i data-lucide="users" style="width:24px;height:24px"></i></div>
        <h3>In-House Crews, No Subs</h3>
        <p>Every drywall installer on your project is a CPA employee, not a subcontractor pulled from a job board. This means consistent workmanship, direct oversight, and faster scheduling since we're not waiting on third-party availability.</p>
      </div>
      <div class="why-card reveal-left reveal-delay-3" data-animate>
        <div class="why-card-icon"><i data-lucide="shield-check" style="width:24px;height:24px"></i></div>
        <h3>Licensed &amp; Insured in Missouri</h3>
        <p>We carry full general liability and workers' compensation coverage. Every drywall installation project in Warrenton meets current Missouri building code requirements — critical for new construction permits and insurance-based storm restoration work.</p>
      </div>
      <div class="why-card reveal-right reveal-delay-4" data-animate>
        <div class="why-card-icon"><i data-lucide="sparkles" style="width:24px;height:24px"></i></div>
        <h3>Paint-Ready Results</h3>
        <p>We don't cut corners on finishing. Three coats of mud, proper dry time between passes, and a final inspection under raking light ensure zero visible seams or screw pops. Your painter receives walls that need zero prep beyond primer.</p>
      </div>
    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     FAQ
     ═══════════════════════════════════════════════════════════════ -->
<svg class="divider-angle" viewBox="0 0 1440 50" preserveAspectRatio="none" aria-hidden="true">
  <path d="M0,0 L0,50 L1440,50 L1440,20Z" fill="var(--color-white)"/>
</svg>

<section class="faq-section section" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-title" style="text-align:center;">
      <span class="eyebrow-label">FAQ</span>
      <h2>What Questions Do Warrenton Homeowners Ask About <span class="text-accent">Drywall Installation</span>?</h2>
      <p class="answer-block" style="max-width:680px; margin:0 auto;">These are the questions we hear most from Warrenton residents planning new drywall projects. If your question isn't listed, call us or submit a free estimate request — we respond within 48 hours.</p>
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
<section class="page-cta section" aria-label="Get a free drywall estimate">
  <div class="container">
    <h2>Ready to Start Your <span class="text-accent">Drywall Installation</span> in Warrenton?</h2>
    <p class="answer-block">CPA Roofing &amp; Construction provides free, no-obligation estimates for every drywall installation project in Warrenton, MO. Call now or request your estimate online — we'll have a scope and price to you within 48 hours.</p>
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
      <p class="answer-block" style="max-width:680px; margin:0 auto;">Beyond drywall installation, CPA Roofing &amp; Construction handles roofing, siding, and drywall repair across central Missouri. Explore these related services below.</p>
    </div>

    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">

      <article class="service-card-with-image card-tint-1 reveal-up reveal-delay-1" data-animate>
        <div class="service-card__image">
          <img src="<?= htmlspecialchars($photoBase) ?>1779465579689-3yzlyg-40910872_1098157970333436_7289550869958230016_n.jpg" alt="Drywall repair by CPA Roofing in Warrenton, MO" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="paintbrush"></i></div>
          <h3>Drywall Repair</h3>
          <p class="service-card__desc">Seamless patching for water damage, holes, and cracks in Warrenton homes.</p>
          <ul>
            <li>Invisible patch &amp; texture match</li>
            <li>Water damage restoration</li>
            <li>Same-day small repairs</li>
          </ul>
          <a href="/services/drywall-repair/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-2 reveal-up reveal-delay-2" data-animate>
        <div class="service-card__image">
          <img src="<?= htmlspecialchars($photoBase) ?>1779465600430-8y0lga-477796834_1135389874947305_1317857861976220959_n.jpg" alt="New roof installation by CPA Roofing in Warrenton" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="home"></i></div>
          <h3>New Roof Installation</h3>
          <p class="service-card__desc">Complete roof installations for homes and businesses across Warrenton.</p>
          <ul>
            <li>Shingle, metal &amp; flat options</li>
            <li>Manufacturer-backed warranties</li>
            <li>Licensed crews, clean jobsites</li>
          </ul>
          <a href="/services/roofing-services/" class="service-card__cta">Learn more</a>
        </div>
      </article>

      <article class="service-card-with-image card-tint-3 reveal-up reveal-delay-3" data-animate>
        <div class="service-card__image">
          <img src="<?= htmlspecialchars($photoBase) ?>1779465577564-f2w9k5-40841389_1098160560333177_1829770370060648448_n.jpg" alt="Siding installation by CPA Roofing in Warrenton" width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><i data-lucide="hammer"></i></div>
          <h3>Siding Installation &amp; Repair</h3>
          <p class="service-card__desc">Vinyl, fiber cement, and engineered wood siding for lasting curb appeal.</p>
          <ul>
            <li>Storm &amp; rot resistant materials</li>
            <li>Improves insulation &amp; value</li>
            <li>Color-matched to your home</li>
          </ul>
          <a href="/services/additional-services/" class="service-card__cta">Learn more</a>
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
