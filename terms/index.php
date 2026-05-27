<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php'; require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php'; ?>
<?php
$currentPage     = 'legal';
$pageTitle       = 'Terms of Service | ' . $siteName;
$pageDescription = 'Terms of Service for ' . $siteName . '. Review the terms governing your use of our website and roofing and construction services in Warrenton, MO.';
$canonicalUrl    = $siteUrl . '/terms/';
$cssVersion      = '2';
$lastUpdated     = 'April 24, 2026';
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<!-- Schema: WebPage + BreadcrumbList -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Terms of Service",
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
        "name": "Terms of Service",
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
    <h1 class="legal-hero__title">Terms of Service</h1>
    <nav class="legal-hero__breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a><span class="breadcrumb-sep">/</span><span>Terms of Service</span>
    </nav>
  </div>
</section>

<section class="legal-content">
  <div class="content-narrow">
    <div class="legal-prose">

      <p class="legal-updated">Last Updated: <?php echo $lastUpdated; ?></p>

      <h2>Acceptance of Terms</h2>
      <p>By accessing and using the website of <?php echo htmlspecialchars($siteName); ?> ("Company," "we," "us," or "our"), a <?php echo htmlspecialchars($entityType); ?> organized under the laws of the State of <?php echo htmlspecialchars($stateOfFormation); ?>, located in <?php echo htmlspecialchars($businessAddress); ?>, you ("User," "you," or "your") agree to be bound by these Terms of Service ("Terms"). If you do not agree to these Terms, you must not use the Site.</p>

      <h2>Description of Services</h2>
      <p><?php echo htmlspecialchars($siteName); ?> provides roofing, construction, and siding services for residential and commercial properties in Warrenton, Missouri and surrounding areas. Our website provides information about our services, allows visitors to request estimates, and facilitates communication with our team. The Site does not constitute an offer to perform services in any jurisdiction where such services would be unlawful.</p>

      <h2>Use of Website</h2>
      <p>You agree to use the Site only for lawful purposes and in compliance with these Terms. You must not:</p>
      <ul>
        <li>Use the Site in any way that violates applicable federal, state, or local laws or regulations</li>
        <li>Attempt to gain unauthorized access to any part of the Site, its servers, or connected systems</li>
        <li>Use automated tools, bots, or scrapers to collect data from the Site without our written permission</li>
        <li>Introduce viruses, trojans, worms, or other malicious code</li>
        <li>Interfere with or disrupt the integrity or performance of the Site</li>
        <li>Impersonate or misrepresent your identity or affiliation with any person or entity</li>
      </ul>

      <h2>Intellectual Property</h2>
      <p>All content on the Site, including but not limited to text, graphics, logos, images, photographs, designs, and software, is the property of <?php echo htmlspecialchars($siteName); ?> or its content suppliers and is protected by United States and international copyright, trademark, and intellectual property laws. You may not reproduce, distribute, modify, create derivative works of, publicly display, or otherwise use any content from the Site without our prior written consent.</p>

      <h2>User Submissions</h2>
      <p>When you submit information through our contact forms, including your name, email address, phone number, and project details, you represent that the information is accurate and that you have the right to provide it. You understand that submissions are processed through our web services provider (Page One Insights, LLC) and stored in a secure database for the purpose of responding to your inquiry.</p>
      <p>We reserve the right to refuse service to anyone for any reason at any time.</p>

      <h2>Estimates and Pricing</h2>
      <p>Any estimates, quotes, or pricing information provided through the Site, by phone, or in person are approximations based on the information available at the time. Final pricing may vary based on site conditions, material availability, scope changes, and other factors discovered during project execution. Estimates do not constitute a binding contract until a separate written agreement is signed by both parties.</p>

      <h2>Service Disclaimers</h2>
      <p>The Site and its content are provided on an "as is" and "as available" basis without warranties of any kind, either express or implied. We disclaim all warranties, including but not limited to implied warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>
      <p>We do not warrant that:</p>
      <ul>
        <li>The Site will be available at all times or operate without interruption or errors</li>
        <li>Defects will be corrected</li>
        <li>The Site or its servers are free of viruses or harmful components</li>
        <li>Information on the Site is complete, accurate, or current</li>
      </ul>

      <h2>Limitation of Liability</h2>
      <p>To the fullest extent permitted by law, <?php echo htmlspecialchars($siteName); ?>, its members, managers, employees, agents, and affiliates shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, data, or goodwill, arising from or related to your use of the Site, even if we have been advised of the possibility of such damages.</p>
      <p>Our total liability for any claim arising from or related to the Site shall not exceed the amount you paid us, if any, during the twelve (12) months preceding the claim.</p>

      <h2>Indemnification</h2>
      <p>You agree to indemnify, defend, and hold harmless <?php echo htmlspecialchars($siteName); ?>, its members, managers, employees, and agents from and against any and all claims, damages, losses, liabilities, costs, and expenses (including reasonable attorneys' fees) arising from your use of the Site, your violation of these Terms, or your violation of any rights of a third party.</p>

      <h2>Governing Law</h2>
      <p>These Terms shall be governed by and construed in accordance with the laws of the State of <?php echo htmlspecialchars($stateOfFormation); ?>, without regard to conflict of law principles. Any legal action arising from these Terms or your use of the Site shall be brought exclusively in the state or federal courts located in <?php echo htmlspecialchars($stateOfFormation); ?>, and you consent to the personal jurisdiction of such courts.</p>

      <h2>Changes to These Terms</h2>
      <p>We reserve the right to modify these Terms at any time. Changes become effective immediately upon posting to the Site. Your continued use of the Site after changes are posted constitutes your acceptance of the revised Terms. We encourage you to review these Terms periodically.</p>

      <h2>Severability</h2>
      <p>If any provision of these Terms is found to be invalid, illegal, or unenforceable by a court of competent jurisdiction, the remaining provisions shall continue in full force and effect. The invalid provision shall be modified to the minimum extent necessary to make it valid and enforceable while preserving the original intent.</p>

      <h2>Entire Agreement</h2>
      <p>These Terms, together with our <a href="/privacy-policy/">Privacy Policy</a> and <a href="/cookie-policy/">Cookie Policy</a>, constitute the entire agreement between you and <?php echo htmlspecialchars($siteName); ?> regarding your use of the Site. These Terms supersede all prior agreements, communications, and understandings, whether written or oral, relating to the subject matter herein.</p>

      <h2>Contact Us</h2>
      <p>If you have questions about these Terms of Service, please contact:</p>
      <p>
        <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
        <?php echo htmlspecialchars($businessAddress); ?>
        <?php if (!empty($contactEmail)): ?><br>Email: <a href="mailto:<?php echo htmlspecialchars($contactEmail); ?>"><?php echo htmlspecialchars($contactEmail); ?></a><?php endif; ?>
        <?php if (!empty($contactPhone)): ?><br>Phone: <a href="tel:<?php echo phoneLink($contactPhone); ?>"><?php echo formatPhone($contactPhone); ?></a><?php endif; ?>
      </p>

      <div class="legal-disclaimer">
        <p>These Terms of Service are provided as a general template. We recommend reviewing this document with a licensed Missouri attorney before publication.</p>
      </div>

    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
