<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
$currentPage     = 'legal';
$pageTitle       = 'Accessibility | ' . $siteName;
$pageDescription = 'Accessibility statement for ' . $siteName . '. Learn about our commitment to WCAG 2.1 AA standards and accessible web design for all users.';
$canonicalUrl    = $siteUrl . '/accessibility/';
$cssVersion      = '2';
$lastUpdated     = 'April 24, 2026';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: WebPage + BreadcrumbList -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Accessibility Statement",
  "url": "<?php echo htmlspecialchars($canonicalUrl); ?>",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "@id": "<?php echo $siteUrl; ?>/#organization"
  },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo $siteUrl; ?>/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Accessibility",
        "item": "<?php echo htmlspecialchars($canonicalUrl); ?>"
      }
    ]
  }
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<style>
  .legal-hero {
    min-height: 40vh;
    background: var(--color-primary-dark, var(--color-primary));
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: var(--space-12) var(--space-4);
    position: relative;
  }
  .legal-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.3) 100%);
    z-index: 1;
  }
  .legal-hero__inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
  }
  .legal-hero__title {
    font-family: var(--font-heading);
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    color: #fff;
    text-wrap: balance;
  }
  .legal-hero__breadcrumb {
    margin-top: var(--space-3);
    font-size: 0.9rem;
    color: rgba(255,255,255,0.7);
  }
  .legal-hero__breadcrumb a {
    color: rgba(255,255,255,0.85);
    text-decoration: underline;
    text-underline-offset: 2px;
  }
  .legal-hero__breadcrumb a:hover { color: #fff; }
  .breadcrumb-sep { margin: 0 var(--space-2); opacity: 0.5; }
  .legal-content {
    padding: var(--space-10) var(--space-4) var(--space-12);
  }
  .content-narrow { max-width: 65ch; margin: 0 auto; }
  .legal-prose { color: var(--color-text); line-height: 1.8; }
  .legal-prose h2 {
    font-family: var(--font-heading);
    font-size: 1.4rem;
    color: var(--color-primary);
    margin: var(--space-8) 0 var(--space-3);
    text-wrap: balance;
  }
  .legal-prose h3 {
    font-family: var(--font-heading);
    font-size: 1.15rem;
    color: var(--color-primary-dark, var(--color-primary));
    margin: var(--space-6) 0 var(--space-2);
  }
  .legal-prose p { margin-bottom: var(--space-4); font-size: 0.95rem; }
  .legal-prose ul, .legal-prose ol { margin: var(--space-3) 0 var(--space-4); padding-left: 1.5rem; }
  .legal-prose li { margin-bottom: var(--space-2); font-size: 0.95rem; line-height: 1.7; }
  .legal-prose a { color: var(--color-accent); text-decoration: underline; text-underline-offset: 2px; }
  .legal-prose a:hover { color: var(--color-primary); }
  .legal-updated {
    font-size: 0.9rem;
    color: var(--color-text-light, #666);
    margin-bottom: var(--space-6);
    padding-bottom: var(--space-4);
    border-bottom: 1px solid var(--color-border, #e0e0e0);
  }
  .legal-disclaimer {
    margin-top: var(--space-8);
    padding: var(--space-4);
    background: var(--color-bg-alt, #f7f8fa);
    border-radius: var(--radius-md, 8px);
    font-size: 0.85rem;
    color: var(--color-text-light, #666);
    font-style: italic;
  }
</style>

<section class="legal-hero">
  <div class="legal-hero__inner">
    <h1 class="legal-hero__title">Accessibility Statement</h1>
    <nav class="legal-hero__breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span><span>Accessibility</span>
    </nav>
  </div>
</section>

<section class="legal-content">
  <div class="content-narrow">
    <div class="legal-prose">

      <p class="legal-updated">Last Updated: <?php echo $lastUpdated; ?></p>

      <h2>Our Commitment</h2>
      <p><?php echo htmlspecialchars($siteName); ?> is committed to ensuring digital accessibility for people with disabilities. We continually work to improve the user experience for everyone who visits our website and strive to conform to the Web Content Accessibility Guidelines (WCAG) 2.1, Level AA standards published by the World Wide Web Consortium (W3C).</p>
      <p>We believe every person deserves full and equal access to information about our roofing and construction services, regardless of ability, device, or assistive technology.</p>

      <h2>Accessibility Features</h2>
      <p>We have implemented the following features and practices to make our Site accessible:</p>

      <h3>Semantic HTML Structure</h3>
      <p>All pages use proper HTML5 semantic elements including header, nav, main, section, article, and footer. This allows screen readers and assistive technologies to navigate the page structure accurately and efficiently.</p>

      <h3>Skip-to-Content Link</h3>
      <p>A "Skip to main content" link is provided at the top of every page. This link is visually hidden but becomes visible when focused via keyboard, allowing keyboard users to bypass repeated navigation and jump directly to the page content.</p>

      <h3>ARIA Landmarks and Attributes</h3>
      <p>We use ARIA (Accessible Rich Internet Applications) landmarks and attributes throughout the Site, including navigation labels, expanded/collapsed states for interactive elements, current page indicators, and role attributes for menus and buttons.</p>

      <h3>Keyboard Navigation</h3>
      <p>All interactive elements on the Site, including links, buttons, form fields, and dropdown menus, are fully operable using a keyboard alone. Tab order follows a logical sequence, and no keyboard traps exist.</p>

      <h3>Focus Indicators</h3>
      <p>Visible focus indicators are displayed on all interactive elements when navigated via keyboard. We use a distinct outline style that meets contrast requirements to ensure focused elements are clearly identifiable.</p>

      <h3>Color Contrast</h3>
      <p>Text and interactive elements maintain color contrast ratios that meet or exceed WCAG 2.1 AA requirements: a minimum of 4.5:1 for normal text and 3:1 for large text. We test contrast during development and when brand colors are selected.</p>

      <h3>Alternative Text for Images</h3>
      <p>All meaningful images on the Site include descriptive alternative text (alt attributes) that convey the purpose and content of the image. Decorative images that do not convey information use empty alt attributes (alt="") so they are ignored by screen readers.</p>

      <h3>Responsive Design and Zoom</h3>
      <p>The Site is fully responsive and functions correctly at zoom levels up to 200% without loss of content or functionality. Layout adapts to different screen sizes, from mobile phones to large desktop monitors.</p>

      <h3>Reduced Motion Support</h3>
      <p>We respect the "prefers-reduced-motion" operating system and browser setting. When this setting is active, all animations and transitions are reduced to near-zero duration, ensuring the Site is comfortable for users with vestibular disorders or motion sensitivity.</p>

      <h3>Form Labels and Instructions</h3>
      <p>All form inputs are associated with descriptive labels. Required fields are clearly indicated. Error messages and validation feedback are provided in a way that is accessible to screen readers and other assistive technologies.</p>

      <h2>Known Limitations</h2>
      <p>While we strive for full accessibility, some areas may have limitations:</p>
      <ul>
        <li><strong>Third-party embeds</strong> — Content loaded from external services (such as Google Maps, analytics scripts, or CDN-hosted libraries) is controlled by their respective providers and may not fully conform to WCAG 2.1 AA. We select providers with demonstrated accessibility commitments and monitor for issues.</li>
        <li><strong>PDF documents</strong> — If PDF documents are provided in the future, we will work to ensure they meet accessibility standards or provide equivalent HTML alternatives.</li>
      </ul>

      <h2>Feedback</h2>
      <p>We welcome your feedback on the accessibility of the <?php echo htmlspecialchars($siteName); ?> website. If you encounter an accessibility barrier, have difficulty using any part of the Site, or have suggestions for improvement, please contact us:</p>
      <p>
        <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
        <?php echo htmlspecialchars($businessAddress); ?>
        <?php if (!empty($contactEmail)): ?><br>Email: <a href="mailto:<?php echo htmlspecialchars($contactEmail); ?>"><?php echo htmlspecialchars($contactEmail); ?></a><?php endif; ?>
        <?php if (!empty($contactPhone)): ?><br>Phone: <a href="tel:<?php echo phoneLink($contactPhone); ?>"><?php echo formatPhone($contactPhone); ?></a><?php endif; ?>
      </p>
      <p>We make every effort to respond to accessibility feedback within five (5) business days and to resolve reported issues as quickly as possible.</p>

      <h2>Enforcement</h2>
      <p>This statement is provided in accordance with the Americans with Disabilities Act (ADA) Title III requirements for places of public accommodation and Section 508 of the Rehabilitation Act, which requires that electronic and information technology be accessible to people with disabilities.</p>
      <p>We are committed to ongoing compliance and will continue to monitor and update the Site to maintain conformance with WCAG 2.1 Level AA standards as our website evolves.</p>

      <div class="legal-disclaimer">
        <p>This Accessibility Statement is provided as a general template. We recommend reviewing this document with a licensed Missouri attorney before publication.</p>
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
