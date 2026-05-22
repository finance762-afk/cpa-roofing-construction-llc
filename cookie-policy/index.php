<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
$currentPage     = 'legal';
$pageTitle       = 'Cookie Policy | ' . $siteName;
$pageDescription = 'Cookie Policy for ' . $siteName . '. Learn about the cookies used on our website, how to manage them, and your choices.';
$canonicalUrl    = $siteUrl . '/cookie-policy/';
$cssVersion      = '2';
$lastUpdated     = 'April 24, 2026';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: WebPage + BreadcrumbList -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Cookie Policy",
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
        "name": "Cookie Policy",
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
  .cookie-table {
    width: 100%;
    border-collapse: collapse;
    margin: var(--space-4) 0 var(--space-6);
    font-size: 0.85rem;
  }
  .cookie-table thead {
    background: var(--color-bg-alt, #f7f8fa);
  }
  .cookie-table th,
  .cookie-table td {
    padding: var(--space-2) var(--space-3);
    text-align: left;
    border: 1px solid var(--color-border, #e0e0e0);
    vertical-align: top;
  }
  .cookie-table th {
    font-weight: 600;
    color: var(--color-primary);
    font-size: 0.85rem;
  }
  .cookie-table td {
    color: var(--color-text);
    line-height: 1.6;
  }
  @media (max-width: 600px) {
    .cookie-table {
      font-size: 0.8rem;
    }
    .cookie-table th,
    .cookie-table td {
      padding: var(--space-1) var(--space-2);
    }
  }
</style>

<section class="legal-hero">
  <div class="legal-hero__inner">
    <h1 class="legal-hero__title">Cookie Policy</h1>
    <nav class="legal-hero__breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span><span>Cookie Policy</span>
    </nav>
  </div>
</section>

<section class="legal-content">
  <div class="content-narrow">
    <div class="legal-prose">

      <p class="legal-updated">Last Updated: <?php echo $lastUpdated; ?></p>

      <h2>What Are Cookies</h2>
      <p>Cookies are small text files that are placed on your device (computer, tablet, or mobile phone) when you visit a website. They are widely used to make websites work more efficiently, provide a better browsing experience, and give site owners usage information. This Cookie Policy explains which cookies we use on the <?php echo htmlspecialchars($siteName); ?> website at <?php echo htmlspecialchars($siteUrl); ?> (the "Site") and how you can manage your preferences.</p>

      <h2>Strictly Necessary Cookies</h2>
      <p>These cookies are essential for the Site to function correctly. They cannot be disabled without affecting the usability of the Site.</p>
      <table class="cookie-table">
        <thead>
          <tr>
            <th>Cookie Name</th>
            <th>Provider</th>
            <th>Purpose</th>
            <th>Duration</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>PHPSESSID</td>
            <td><?php echo htmlspecialchars($domain); ?></td>
            <td>Preserves the user session state across page requests. Required for forms and navigation to function properly.</td>
            <td>Session (deleted when browser closes)</td>
          </tr>
          <tr>
            <td>cookie_consent_dismissed</td>
            <td><?php echo htmlspecialchars($domain); ?></td>
            <td>Stores your cookie banner dismissal preference so the banner does not reappear on subsequent visits.</td>
            <td>Persistent (localStorage)</td>
          </tr>
        </tbody>
      </table>

      <h2>Analytics Cookies</h2>
      <p>We use Google Analytics to understand how visitors interact with our Site. These cookies collect information in an aggregated, anonymous form.</p>
      <table class="cookie-table">
        <thead>
          <tr>
            <th>Cookie Name</th>
            <th>Provider</th>
            <th>Purpose</th>
            <th>Duration</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>_ga</td>
            <td>Google LLC</td>
            <td>Registers a unique ID used to generate statistical data on how visitors use the Site. Distinguishes users.</td>
            <td>2 years</td>
          </tr>
          <tr>
            <td>_ga_[container-id]</td>
            <td>Google LLC</td>
            <td>Used by Google Analytics 4 to persist session state and track interactions across pages.</td>
            <td>2 years</td>
          </tr>
        </tbody>
      </table>
      <p>For more information about how Google uses data, see <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a> and <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>.</p>

      <h2>Functional and Third-Party Cookies</h2>
      <p>The Site uses third-party services that may set their own cookies or collect data:</p>
      <table class="cookie-table">
        <thead>
          <tr>
            <th>Service</th>
            <th>Provider</th>
            <th>Purpose</th>
            <th>Data Collected</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Google Fonts</td>
            <td>Google LLC</td>
            <td>Delivers web fonts used for site typography. Fonts are loaded from Google servers.</td>
            <td>IP address, user agent, referrer URL</td>
          </tr>
          <tr>
            <td>Google Maps</td>
            <td>Google LLC</td>
            <td>Displays interactive maps showing our service area and business location.</td>
            <td>IP address, location data, usage data</td>
          </tr>
          <tr>
            <td>Lucide Icons (CDN)</td>
            <td>unpkg.com / Cloudflare</td>
            <td>Delivers the icon library used throughout the Site for visual interface elements.</td>
            <td>IP address, user agent</td>
          </tr>
        </tbody>
      </table>

      <h2>How to Control Cookies</h2>
      <p>You can control and manage cookies in several ways:</p>
      <ul>
        <li><strong>Browser settings</strong> — Most browsers allow you to refuse or delete cookies through their settings. The method varies by browser; consult your browser's help documentation for instructions.</li>
        <li><strong>Google Analytics opt-out</strong> — Install the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a> to prevent Google Analytics from collecting data about your visits.</li>
        <li><strong>Private/incognito browsing</strong> — Use your browser's private browsing mode to prevent cookies from being stored after your session ends.</li>
      </ul>
      <p>Disabling cookies may affect your experience on the Site. Some features, such as form submissions and session persistence, may not function correctly without strictly necessary cookies.</p>

      <h2>Do Not Track and Global Privacy Control</h2>
      <p>We honor Do Not Track (DNT) signals and Global Privacy Control (GPC) signals sent by your browser. When we detect a GPC or DNT signal, we treat it as a valid opt-out request for analytics tracking and will not load analytics cookies for that session.</p>

      <h2>California Residents</h2>
      <p>If you are a California resident, you have additional rights under the CCPA/CPRA regarding cookies and tracking technologies. For full details about your rights and how to exercise them, see the <a href="/privacy-policy/#ccpa-rights">California Residents section of our Privacy Policy</a>.</p>

      <h2>Changes to This Cookie Policy</h2>
      <p>We may update this Cookie Policy from time to time. When changes occur, we will update the "Last Updated" date at the top of this page. We encourage you to review this policy periodically to stay informed about our use of cookies.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about this Cookie Policy, please contact:</p>
      <p>
        <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
        <?php echo htmlspecialchars($businessAddress); ?>
        <?php if (!empty($contactEmail)): ?><br>Email: <a href="mailto:<?php echo htmlspecialchars($contactEmail); ?>"><?php echo htmlspecialchars($contactEmail); ?></a><?php endif; ?>
        <?php if (!empty($contactPhone)): ?><br>Phone: <a href="tel:<?php echo phoneLink($contactPhone); ?>"><?php echo formatPhone($contactPhone); ?></a><?php endif; ?>
      </p>

      <div class="legal-disclaimer">
        <p>This Cookie Policy is provided as a general template. We recommend reviewing this document with a licensed Missouri attorney before publication.</p>
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
