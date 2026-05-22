<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
$currentPage     = '404';
$noindex         = true;
$pageTitle       = 'Page Not Found | ' . $siteName;
$pageDescription = 'The page you are looking for could not be found. Return to ' . $siteName . ' homepage or browse our roofing and construction services in Warrenton, MO.';
$canonicalUrl    = $siteUrl . '/404';
$cssVersion      = '2';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
  .error-hero {
    min-height: 40vh;
    background: var(--color-primary-dark, var(--color-primary));
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: var(--space-12) var(--space-4);
    position: relative;
  }
  .error-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 100%);
    z-index: 1;
  }
  .error-hero__inner {
    position: relative;
    z-index: 2;
    max-width: 600px;
  }
  .error-hero__code {
    font-family: var(--font-heading);
    font-size: clamp(4rem, 10vw, 8rem);
    font-weight: 900;
    color: #fff;
    line-height: 1;
    margin-bottom: var(--space-2);
    opacity: 0.9;
  }
  .error-hero__title {
    font-family: var(--font-heading);
    font-size: clamp(1.5rem, 4vw, 2.25rem);
    color: #fff;
    margin-bottom: var(--space-4);
    text-wrap: balance;
  }
  .error-content {
    padding: var(--space-12) var(--space-4);
    text-align: center;
  }
  .error-content__inner {
    max-width: 600px;
    margin: 0 auto;
  }
  .error-content p {
    font-size: 1.05rem;
    color: var(--color-text);
    line-height: 1.7;
    margin-bottom: var(--space-6);
  }
  .error-links {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-3);
    justify-content: center;
    margin-top: var(--space-6);
  }
  .error-links .btn {
    min-width: 160px;
  }
  .error-icon {
    width: 48px;
    height: 48px;
    color: var(--color-accent);
    margin: 0 auto var(--space-4);
  }
</style>

<section class="error-hero">
  <div class="error-hero__inner">
    <div class="error-hero__code">404</div>
    <h1 class="error-hero__title">Page Not Found</h1>
  </div>
</section>

<section class="error-content">
  <div class="error-content__inner">
    <div class="error-icon">
      <i data-lucide="search-x" style="width:48px;height:48px"></i>
    </div>
    <p>The page you requested has been moved, removed, or may never have existed. This happens sometimes when links change or URLs are mistyped.</p>
    <p>Try heading back to our homepage or check out the links below to find what you need.</p>
    <div class="error-links">
      <a href="/" class="btn btn-primary">Back to Home</a>
      <a href="/services/" class="btn btn-secondary">Our Services</a>
      <a href="/contact/" class="btn btn-secondary">Contact Us</a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
