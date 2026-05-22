<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
// ── Page Setup ─────────────────────────────────────────────────
$pageTitle       = 'Contact CPA Roofing & Construction | Free Estimates | Warrenton, MO';
$pageDescription = 'Contact CPA Roofing & Construction in Warrenton, MO for a free roofing estimate. Licensed contractor since 1995 — residential, commercial, and insurance storm restoration. Available 7 days a week.';
$canonicalUrl    = $siteUrl . '/contact/';
$currentPage     = 'contact';

$photoBase = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/photos/';

$heroImage       = $photoBase . '1779465599237-qyem5o-41262329_1098158137000086_7850474401974714368_n.jpg';
$heroImagePreload = $heroImage;

// ── Schema ────────────────────────────────────────────────────
$schemaMarkup = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => $siteUrl . '/contact/'],
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
  background: linear-gradient(135deg, rgba(26, 26, 46, 0.92) 0%, rgba(0, 94, 245, 0.65) 100%);
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

/* ── Contact Grid ─────────────────────────────────────────────── */
.contact-grid {
  display: grid;
  grid-template-columns: 1.3fr 0.7fr;
  gap: var(--space-12);
  align-items: flex-start;
}

/* ── Contact Form ─────────────────────────────────────────────── */
.contact-form-card {
  background: var(--color-white);
  border-radius: var(--radius-lg);
  padding: var(--space-10);
  box-shadow: var(--shadow-lg);
}
.contact-form-card h2 {
  text-wrap: balance;
  margin-bottom: var(--space-2);
}
.contact-form-card .form-subtitle {
  color: var(--color-gray);
  margin-bottom: var(--space-8);
}
.contact-form .form-row {
  margin-bottom: var(--space-4);
}
.contact-form .form-row-split {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: var(--space-4);
}
.contact-form label {
  display: block;
  font-size: var(--font-size-sm);
  font-weight: 600;
  color: var(--color-dark);
  margin-bottom: var(--space-1);
}
.contact-form input,
.contact-form select,
.contact-form textarea {
  width: 100%;
  padding: var(--space-3) var(--space-4);
  border: 2px solid var(--color-gray-light);
  border-radius: var(--radius-md);
  background: var(--color-white);
  color: var(--color-dark);
  font-family: var(--font-body);
  font-size: var(--font-size-base);
  transition: border-color var(--transition-fast);
}
.contact-form input:focus,
.contact-form select:focus,
.contact-form textarea:focus {
  border-color: var(--color-accent);
  outline: none;
  box-shadow: 0 0 0 3px rgba(0, 94, 245, 0.1);
}
.contact-form textarea {
  resize: vertical;
  min-height: 120px;
}
.contact-form .btn-block {
  width: 100%;
  padding: var(--space-4);
  font-size: var(--font-size-base);
  margin-top: var(--space-2);
}

/* ── Consent Fieldset ─────────────────────────────────────────── */
.form-consent-fieldset {
  border: none;
  padding: 0;
  margin: var(--space-6) 0 var(--space-4);
}
.form-consent-legend {
  font-size: var(--font-size-sm);
  font-weight: 700;
  color: var(--color-dark);
  margin-bottom: var(--space-4);
}
.form-consent-item {
  display: flex;
  gap: var(--space-3);
  align-items: flex-start;
  margin-bottom: var(--space-4);
  cursor: pointer;
}
.consent-checkbox {
  flex-shrink: 0;
  width: 18px;
  height: 18px;
  margin-top: 3px;
  accent-color: var(--color-accent);
  cursor: pointer;
}
.consent-label {
  font-size: var(--font-size-xs);
  color: var(--color-gray);
  line-height: 1.5;
}
.consent-label strong {
  color: var(--color-dark);
}
.consent-label a {
  color: var(--color-accent);
  text-decoration: underline;
}
.form-consent-required {
  border-top: 1px solid var(--color-gray-light);
  padding-top: var(--space-4);
}
.required-star {
  color: var(--color-danger);
  font-weight: 700;
}

/* ── Contact Info Sidebar ─────────────────────────────────────── */
.contact-info-sidebar h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.contact-info-sidebar .answer-block {
  margin-bottom: var(--space-6);
}
.info-cards {
  display: flex;
  flex-direction: column;
  gap: var(--space-4);
}
.info-card {
  padding: var(--space-6);
  border-radius: var(--radius-lg);
  display: flex;
  gap: var(--space-4);
  align-items: flex-start;
}
.info-card-icon {
  flex-shrink: 0;
  width: 48px;
  height: 48px;
  border-radius: var(--radius-full);
  background: rgba(245, 86, 0, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--color-primary);
}
.info-card-icon i, .info-card-icon svg {
  width: 22px;
  height: 22px;
}
.info-card h3 {
  font-size: var(--font-size-base);
  margin-bottom: var(--space-1);
  color: var(--color-dark);
}
.info-card p {
  color: var(--color-gray);
  font-size: var(--font-size-sm);
  margin: 0;
  line-height: 1.5;
}
.info-card a {
  color: var(--color-accent);
  font-weight: 600;
}

/* ── Service Area Note ────────────────────────────────────────── */
.contact-area-note {
  text-align: center;
  background: var(--color-light);
}
.contact-area-note h2 {
  text-wrap: balance;
  margin-bottom: var(--space-4);
}
.contact-area-note .answer-block {
  max-width: 640px;
  margin: 0 auto var(--space-6);
}

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
@media (max-width: 768px) {
  .inner-hero { min-height: 40vh; }
  .contact-grid { grid-template-columns: 1fr; }
  .contact-form .form-row-split { grid-template-columns: 1fr; }
  .contact-form-card { padding: var(--space-6); }
}
</style>


<!-- ═══════════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════════ -->
<section class="inner-hero" style="background-image: url('<?= htmlspecialchars($heroImage) ?>');" aria-label="Contact page hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <span>Contact</span>
    </nav>
    <h1>Contact <span class="text-accent">CPA Roofing &amp; Construction</span></h1>
    <p class="hero-answer">Reach CPA Roofing &amp; Construction for a free roofing, siding, or drywall estimate in Warrenton, MO and surrounding communities. Our team is available seven days a week and responds to every inquiry within 48 hours. Fill out the form below or use our contact details to get started on your project.</p>
  </div>
</section>


<!-- Section Divider -->
<div class="divider-wave">
  <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C200,60 400,0 600,30 C800,60 1000,0 1200,30 L1200,60 L0,60 Z" fill="var(--color-white)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════
     CONTACT FORM + INFO SIDEBAR
     ═══════════════════════════════════════════════════════════════ -->
<section aria-label="Contact form and business information">
  <div class="container">
    <div class="contact-grid">

      <!-- Contact Form -->
      <div class="contact-form-card" data-animate>
        <h2>How Can We Help with Your <span class="text-accent">Roofing Project</span>?</h2>
        <p class="form-subtitle">Fill out the form and we will get back to you within 48 hours with a free estimate.</p>

        <form action="<?= htmlspecialchars($formAction) ?>" method="POST" class="contact-form">
          <!-- Honeypot -->
          <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
          <!-- Hidden fields -->
          <input type="hidden" name="_next" value="/thank-you">
          <input type="hidden" name="_consent_version" value="v2.1">
          <input type="hidden" name="_consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <div class="form-row form-row-split">
            <div>
              <label for="contact-name">Your Name <span class="required-star">*</span></label>
              <input type="text" id="contact-name" name="name" placeholder="Full name" required>
            </div>
            <div>
              <label for="contact-email">Email <span class="required-star">*</span></label>
              <input type="email" id="contact-email" name="email" placeholder="your.email@gmail.com" required>
            </div>
          </div>

          <div class="form-row form-row-split">
            <div>
              <label for="contact-phone">Phone <span class="required-star">*</span></label>
              <input type="tel" id="contact-phone" name="phone" placeholder="(555) 123-4567" required>
            </div>
            <div>
              <label for="contact-service">Service Needed</label>
              <select id="contact-service" name="service">
                <option value="">Select a service</option>
<?php foreach ($services as $svc): ?>
                <option value="<?= htmlspecialchars($svc['name']) ?>"><?= htmlspecialchars($svc['name']) ?></option>
<?php endforeach; ?>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <label for="contact-message">Message</label>
            <textarea id="contact-message" name="message" rows="4" placeholder="Tell us about your project, damage, timeline, or questions..."></textarea>
          </div>

          <!-- ═══ SEPARATE CONSENT CHECKBOXES (TCPA 2025/2026 + Texas TCPA) ═══ -->
          <fieldset class="form-consent-fieldset">
            <legend class="form-consent-legend">Communication Consent</legend>

            <label class="form-consent-item">
              <input type="checkbox" name="email_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>Email updates (optional):</strong> I agree to receive emails from
                <?= htmlspecialchars($siteName) ?> about my inquiry, services, promotions, and news. I understand I can unsubscribe anytime via the link in any email<?php if (!empty($email)): ?>
                or by emailing <?= htmlspecialchars($email) ?><?php endif; ?>. Message frequency varies.
              </span>
            </label>

            <label class="form-consent-item">
              <input type="checkbox" name="sms_opt_in" value="yes" class="consent-checkbox">
              <span class="consent-label">
                <strong>SMS/Text messages (optional):</strong> I agree to receive text messages from
                <?= htmlspecialchars($siteName) ?> at the phone number I provided. Message types may include appointment reminders, service updates, and promotional
                offers. Message frequency varies. Message and data rates may apply. Reply STOP to unsubscribe, HELP for help.
                <strong>Consent is not a condition of purchase.</strong>
              </span>
            </label>

            <label class="form-consent-item form-consent-required">
              <input type="checkbox" name="terms_accepted" value="yes" class="consent-checkbox" required>
              <span class="consent-label">
                I have read and agree to the
                <a href="/privacy-policy/">Privacy Policy</a>
                and
                <a href="/terms/">Terms of Service</a>. <span class="required-star">*</span>
              </span>
            </label>
          </fieldset>

          <button type="submit" class="btn btn-primary btn-block">Send Message</button>
        </form>
      </div>

      <!-- Info Sidebar -->
      <div class="contact-info-sidebar" data-animate>
        <h2>What Is the Fastest Way to Reach <span class="text-accent">CPA Roofing</span>?</h2>
        <p class="answer-block">The fastest way to reach CPA Roofing &amp; Construction is to fill out the contact form on this page or call us directly. We are based in Warrenton, MO and available seven days a week, Monday through Sunday from 7:00 AM to 7:00 PM. Every inquiry receives a response within 48 hours.</p>

        <div class="info-cards">

<?php if (!empty($phone)): ?>
          <div class="info-card card-tint-1">
            <div class="info-card-icon"><i data-lucide="phone"></i></div>
            <div>
              <h3>Phone</h3>
              <p><a href="tel:<?= phoneLink($phone) ?>"><?= formatPhone($phone) ?></a></p>
              <p>Available 7 days a week</p>
            </div>
          </div>
<?php endif; ?>

<?php if (!empty($email)): ?>
          <div class="info-card card-tint-2">
            <div class="info-card-icon"><i data-lucide="mail"></i></div>
            <div>
              <h3>Email</h3>
              <p><a href="mailto:<?= htmlspecialchars($email) ?>"><?= htmlspecialchars($email) ?></a></p>
              <p>We respond within 48 hours</p>
            </div>
          </div>
<?php endif; ?>

          <div class="info-card card-tint-<?= (!empty($phone) && !empty($email)) ? '3' : (!empty($phone) || !empty($email) ? '2' : '1') ?>">
            <div class="info-card-icon"><i data-lucide="map-pin"></i></div>
            <div>
              <h3>Location</h3>
              <p><?= htmlspecialchars($address['city']) ?>, <?= htmlspecialchars($address['state']) ?> <?= htmlspecialchars($address['zip']) ?></p>
              <p>Serving a 50-mile radius</p>
            </div>
          </div>

          <div class="info-card card-tint-<?= (!empty($phone) && !empty($email)) ? '1' : (!empty($phone) || !empty($email) ? '3' : '2') ?>">
            <div class="info-card-icon"><i data-lucide="clock"></i></div>
            <div>
              <h3>Business Hours</h3>
              <p>Monday &ndash; Sunday</p>
              <p>7:00 AM &ndash; 7:00 PM</p>
            </div>
          </div>

          <div class="info-card card-tint-<?= (!empty($phone) && !empty($email)) ? '2' : (!empty($phone) || !empty($email) ? '1' : '3') ?>">
            <div class="info-card-icon"><i data-lucide="calendar"></i></div>
            <div>
              <h3>Free Estimates</h3>
              <p>Every estimate is free with zero obligation. We inspect, explain, and quote the same day.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════
     SERVICE AREA NOTE
     ═══════════════════════════════════════════════════════════════ -->
<section class="contact-area-note" aria-label="Service area information">
  <div class="container" data-animate>
    <span class="eyebrow-label">Service Area</span>
    <h2>Where Does CPA Roofing <span class="text-accent">Provide Estimates</span>?</h2>
    <p class="answer-block">CPA Roofing &amp; Construction provides free on-site estimates throughout Warrenton, MO and all communities within a 50-mile radius. That includes Wright City, Wentzville, Troy, Moscow Mills, Jonesburg, Montgomery City, Foristell, and the broader Warren County area along the I-70 corridor and Highway 47.</p>
    <a href="/service-area/" class="btn btn-accent">View Full Service Area</a>
  </div>
</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
