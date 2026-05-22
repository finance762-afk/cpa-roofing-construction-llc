<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
$currentPage     = 'thank-you';
$noindex         = true;
$pageTitle       = 'Thank You | ' . $siteName;
$pageDescription = 'Your message has been received. ' . $siteName . ' will respond within 48 hours.';
$canonicalUrl    = $siteUrl . '/thank-you';
$cssVersion      = '2';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
  .thankyou-hero {
    min-height: 40vh;
    background: var(--color-primary-dark, var(--color-primary));
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: var(--space-12) var(--space-4);
    position: relative;
  }
  .thankyou-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 100%);
    z-index: 1;
  }
  .thankyou-hero__inner {
    position: relative;
    z-index: 2;
    max-width: 600px;
  }
  .thankyou-hero__title {
    font-family: var(--font-heading);
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    color: #fff;
    text-wrap: balance;
  }
  .thankyou-content {
    padding: var(--space-12) var(--space-4);
    text-align: center;
  }
  .thankyou-content__inner {
    max-width: 600px;
    margin: 0 auto;
  }
  .thankyou-check {
    width: 72px;
    height: 72px;
    border-radius: 50%;
    background: rgba(var(--color-primary-rgb, 245, 86, 0), 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-6);
    color: var(--color-primary);
  }
  .thankyou-content h2 {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    color: var(--color-primary);
    margin-bottom: var(--space-4);
    text-wrap: balance;
  }
  .thankyou-content p {
    font-size: 1.05rem;
    color: var(--color-text);
    line-height: 1.7;
    margin-bottom: var(--space-4);
    max-width: 55ch;
    margin-left: auto;
    margin-right: auto;
  }
  .thankyou-next {
    background: var(--color-bg-alt, #f7f8fa);
    border-radius: var(--radius-md, 12px);
    padding: var(--space-6);
    margin: var(--space-6) 0;
    text-align: left;
  }
  .thankyou-next h3 {
    font-family: var(--font-heading);
    font-size: 1.15rem;
    color: var(--color-primary);
    margin-bottom: var(--space-3);
  }
  .thankyou-next ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: var(--space-3);
  }
  .thankyou-next ul li {
    font-size: 0.95rem;
    color: var(--color-text);
    padding-left: 1.5rem;
    position: relative;
    line-height: 1.6;
  }
  .thankyou-next ul li::before {
    content: '';
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--color-accent);
    position: absolute;
    left: 0;
    top: 0.55em;
  }
  .thankyou-links {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-3);
    justify-content: center;
    margin-top: var(--space-6);
  }
  .thankyou-links .btn {
    min-width: 160px;
  }
</style>

<section class="thankyou-hero">
  <div class="thankyou-hero__inner">
    <h1 class="thankyou-hero__title">Thank You for Reaching Out</h1>
  </div>
</section>

<section class="thankyou-content">
  <div class="thankyou-content__inner">
    <div class="thankyou-check">
      <i data-lucide="check-circle" style="width:36px;height:36px"></i>
    </div>
    <h2>Did We Receive Your Message?</h2>
    <p>Yes! We appreciate you contacting <?php echo htmlspecialchars($siteName); ?>. A member of our team will review your inquiry and get back to you as soon as possible.</p>

    <div class="thankyou-next">
      <h3>What Happens Next</h3>
      <ul>
        <li>Our team reviews your message and project details within 24 to 48 hours.</li>
        <li>We reach out by phone or email to discuss your project scope and schedule a site visit if needed.</li>
        <li>You receive a detailed, no-obligation estimate tailored to your property in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?>.</li>
      </ul>
    </div>

    <?php if (!empty($phone)): ?>
    <p>Need to speak with someone right away? Call us directly:</p>
    <p><a href="tel:<?php echo phoneLink($phone); ?>" class="btn btn-primary"><i data-lucide="phone" style="width:16px;height:16px"></i> <?php echo formatPhone($phone); ?></a></p>
    <?php endif; ?>

    <div class="thankyou-links">
      <a href="/" class="btn btn-secondary">Back to Home</a>
      <a href="/services/" class="btn btn-secondary">Explore Services</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
