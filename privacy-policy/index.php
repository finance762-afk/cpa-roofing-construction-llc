<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
$currentPage     = 'legal';
$pageTitle       = 'Privacy Policy | ' . $siteName;
$pageDescription = 'Privacy Policy for ' . $siteName . '. Learn how we collect, use, and protect your personal information. Serving Warrenton, MO and surrounding areas.';
$canonicalUrl    = $siteUrl . '/privacy-policy/';
$cssVersion      = '2';
$lastUpdated     = 'April 24, 2026';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: WebPage + BreadcrumbList -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Privacy Policy",
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
        "name": "Privacy Policy",
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
  .legal-hero__breadcrumb a:hover {
    color: #fff;
  }
  .breadcrumb-sep {
    margin: 0 var(--space-2);
    opacity: 0.5;
  }
  .legal-content {
    padding: var(--space-10) var(--space-4) var(--space-12);
  }
  .content-narrow {
    max-width: 65ch;
    margin: 0 auto;
  }
  .legal-prose {
    color: var(--color-text);
    line-height: 1.8;
  }
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
  .legal-prose p {
    margin-bottom: var(--space-4);
    font-size: 0.95rem;
  }
  .legal-prose ul, .legal-prose ol {
    margin: var(--space-3) 0 var(--space-4);
    padding-left: 1.5rem;
  }
  .legal-prose li {
    margin-bottom: var(--space-2);
    font-size: 0.95rem;
    line-height: 1.7;
  }
  .legal-prose a {
    color: var(--color-accent);
    text-decoration: underline;
    text-underline-offset: 2px;
  }
  .legal-prose a:hover {
    color: var(--color-primary);
  }
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
    <h1 class="legal-hero__title">Privacy Policy</h1>
    <nav class="legal-hero__breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span><span>Privacy Policy</span>
    </nav>
  </div>
</section>

<section class="legal-content">
  <div class="content-narrow">
    <div class="legal-prose">

      <p class="legal-updated">Last Updated: <?php echo $lastUpdated; ?></p>

      <h2>Introduction</h2>
      <p><?php echo htmlspecialchars($siteName); ?>, a <?php echo htmlspecialchars($entityType); ?> organized under the laws of the State of <?php echo htmlspecialchars($stateOfFormation); ?>, located in <?php echo htmlspecialchars($businessAddress); ?> ("Company," "we," "us," or "our"), is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website at <?php echo htmlspecialchars($siteUrl); ?> (the "Site") or interact with our services.</p>
      <p>By using the Site, you consent to the data practices described in this policy. If you do not agree, please discontinue use of the Site immediately.</p>

      <h2>Information We Collect</h2>
      <h3>Information You Provide Directly</h3>
      <p>When you submit a contact form, request an estimate, or otherwise communicate with us, we may collect:</p>
      <ul>
        <li>Full name</li>
        <li>Email address</li>
        <li>Phone number</li>
        <li>Service requested or project description</li>
        <li>Free-form message content</li>
        <li>Communication consent preferences (email opt-in, SMS opt-in, terms acceptance)</li>
      </ul>

      <h3>Information Collected Automatically</h3>
      <p>When you visit the Site, certain information is collected automatically, including:</p>
      <ul>
        <li>IP address</li>
        <li>Browser type and version (user agent)</li>
        <li>Pages visited and time spent on pages</li>
        <li>Referring URL</li>
        <li>Device type and screen resolution</li>
        <li>Consent timestamp (date and time of form submission)</li>
      </ul>

      <h2>How We Use Your Information</h2>
      <p>We use the information we collect to:</p>
      <ul>
        <li>Respond to your inquiries and provide requested estimates</li>
        <li>Schedule consultations and coordinate roofing or construction services</li>
        <li>Send project updates, appointment reminders, and follow-up communications</li>
        <li>Send marketing communications if you have opted in</li>
        <li>Send SMS text messages if you have opted in</li>
        <li>Improve our website, services, and customer experience</li>
        <li>Analyze site traffic and usage patterns</li>
        <li>Comply with legal obligations and protect our rights</li>
        <li>Maintain records of consent for legal defense purposes</li>
      </ul>

      <h2>How We Share Your Information</h2>
      <p>We do not sell your personal information. We may share your information with the following categories of service providers who assist in operating our business:</p>
      <ul>
        <li><strong>Google LLC</strong> — analytics (Google Analytics), web fonts (Google Fonts), and mapping services (Google Maps). Google may collect usage data subject to <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.</li>
        <li><strong>Page One Insights, LLC</strong> — our web design, hosting, and digital services provider. Page One Insights processes lead submissions on our behalf using the following sub-processors:
          <ul>
            <li><strong>Supabase, Inc.</strong> — database hosting and data storage</li>
            <li><strong>Twilio Inc. (SendGrid)</strong> — email delivery for lead notifications</li>
            <li><strong>Twilio Inc. (SMS)</strong> — text message delivery for opted-in communications</li>
          </ul>
        </li>
        <li><strong>Hostinger International Ltd.</strong> — web hosting and server infrastructure</li>
      </ul>
      <p>We may also disclose your information if required by law, in response to a valid legal process, or to protect the safety, rights, or property of our company, users, or others.</p>

      <h2 id="ccpa-rights">California Residents — CCPA/CPRA Rights</h2>
      <p>If you are a California resident, you have specific rights under the California Consumer Privacy Act (CCPA) as amended by the California Privacy Rights Act (CPRA):</p>
      <ul>
        <li><strong>Right to Know</strong> — You may request disclosure of the categories and specific pieces of personal information we have collected about you.</li>
        <li><strong>Right to Delete</strong> — You may request deletion of personal information we have collected, subject to certain exceptions.</li>
        <li><strong>Right to Correct</strong> — You may request correction of inaccurate personal information.</li>
        <li><strong>Right to Opt-Out of Sale or Sharing</strong> — We do not sell or share your personal information for cross-context behavioral advertising. If this practice changes, we will provide a clear opt-out mechanism.</li>
        <li><strong>Right to Non-Discrimination</strong> — We will not discriminate against you for exercising your CCPA/CPRA rights.</li>
        <li><strong>Right to Limit Use of Sensitive Personal Information</strong> — You may request that we limit our use of any sensitive personal information.</li>
      </ul>
      <p>To exercise any of these rights, contact us using the information in the "Contact Us" section below. We will respond to verifiable consumer requests within 45 days.</p>

      <h2>Other State Privacy Rights</h2>
      <p>Residents of the following states may have additional or similar privacy rights under their respective state laws. If you reside in any of these states, you may contact us to exercise applicable rights including access, deletion, correction, and opt-out:</p>
      <ul>
        <li>Virginia (VCDPA)</li>
        <li>Colorado (CPA)</li>
        <li>Connecticut (CTDPA)</li>
        <li>Utah (UCPA)</li>
        <li>Texas (TDPSA)</li>
        <li>Florida (FDBR)</li>
        <li>Oregon (OCPA)</li>
        <li>Montana (MCDPA)</li>
        <li>Delaware (DPDPA)</li>
        <li>Iowa (ICDPA)</li>
        <li>Tennessee (TIPA)</li>
        <li>Indiana (ICDPA)</li>
        <li>Kentucky (KCDPA)</li>
        <li>Rhode Island (RIDPA)</li>
        <li>Maryland (MODPA)</li>
        <li>Minnesota (MCDPA)</li>
        <li>New Hampshire (NHDPA)</li>
        <li>New Jersey (NJDPA)</li>
        <li>Nebraska (NDPA)</li>
      </ul>
      <p>We honor applicable opt-out preference signals, including Global Privacy Control (GPC). To exercise your rights, contact us using the information below.</p>

      <h2>Data Retention</h2>
      <p>We retain personal information collected through contact forms and service inquiries for up to four (4) years from the date of collection, unless a longer retention period is required by law. After this period, data is securely deleted or anonymized. Consent records (including timestamps, IP addresses, and consent version) are retained for the full 4-year period for legal defense purposes.</p>

      <h2>Security</h2>
      <p>We implement commercially reasonable administrative, technical, and physical safeguards to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include encrypted data transmission (SSL/TLS), secure hosting environments, and access controls. However, no method of electronic transmission or storage is 100% secure, and we cannot guarantee absolute security.</p>

      <h2>Children's Privacy</h2>
      <p>Our Site and services are not directed to individuals under the age of 16. We do not knowingly collect personal information from children. If you believe a child has provided us with personal information, please contact us immediately and we will take steps to delete that information.</p>

      <h2>SMS Program Terms</h2>
      <p>If you opt in to receive SMS text messages from <?php echo htmlspecialchars($siteName); ?>:</p>
      <ul>
        <li>Message frequency varies based on your project and communications.</li>
        <li>Message and data rates may apply depending on your carrier and plan.</li>
        <li>Reply <strong>STOP</strong> to any message to cancel and stop receiving texts.</li>
        <li>Reply <strong>HELP</strong> for assistance or contact information.</li>
        <li>Carriers are not liable for delayed or undelivered messages.</li>
        <li>Consent to receive SMS messages is not a condition of purchasing any goods or services.</li>
      </ul>
      <p>Supported carriers include major U.S. carriers. T-Mobile is not liable for delayed or undelivered messages.</p>

      <h2>Changes to This Policy</h2>
      <p>We may update this Privacy Policy from time to time to reflect changes in our practices, technology, legal requirements, or other factors. When we make material changes, we will update the "Last Updated" date at the top of this page. We encourage you to review this policy periodically.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about this Privacy Policy, wish to exercise your privacy rights, or need to reach us regarding your personal information, please contact:</p>
      <p>
        <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
        <?php echo htmlspecialchars($businessAddress); ?>
        <?php if (!empty($contactEmail)): ?><br>Email: <a href="mailto:<?php echo htmlspecialchars($contactEmail); ?>"><?php echo htmlspecialchars($contactEmail); ?></a><?php endif; ?>
        <?php if (!empty($contactPhone)): ?><br>Phone: <a href="tel:<?php echo phoneLink($contactPhone); ?>"><?php echo formatPhone($contactPhone); ?></a><?php endif; ?>
      </p>

      <div class="legal-disclaimer">
        <p>This Privacy Policy is provided as a general template. We recommend reviewing this document with a licensed Missouri attorney before publication.</p>
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
