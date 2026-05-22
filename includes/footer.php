  </main>

  <footer class="site-footer">
    <div class="container">

      <!-- Footer Grid -->
      <div class="footer-grid">

        <!-- Col 1: About -->
        <div class="footer-col">
          <a href="/" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
            <img src="<?php echo htmlspecialchars($logoUrl); ?>" alt="<?php echo htmlspecialchars($logoAlt); ?>" width="160" height="44" style="margin-bottom:var(--space-4);">
          </a>
          <p><?php echo htmlspecialchars($tagline); ?></p>
          <p>Serving <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> and surrounding communities since <?php echo $yearEstablished; ?>. Licensed, insured, and dedicated to protecting your property with work built to last.</p>
          <div class="footer-trust">
            <span class="trust-badge"><i data-lucide="shield-check" style="width:14px;height:14px"></i> Licensed &amp; Insured</span>
            <span class="trust-badge"><i data-lucide="clock" style="width:14px;height:14px"></i> <?php echo $yearsInBusiness; ?>+ Years</span>
            <span class="trust-badge"><i data-lucide="badge-check" style="width:14px;height:14px"></i> Free Estimates</span>
          </div>
        </div>

        <!-- Col 2: Services -->
        <div class="footer-col">
          <h4>Our Services</h4>
          <ul>
<?php
$footerServices = array_slice($services, 0, 8);
foreach ($footerServices as $svc):
?>
            <li><a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"><?php echo htmlspecialchars($svc['name']); ?></a></li>
<?php endforeach; ?>
<?php if (count($services) > 8): ?>
            <li><a href="/services/">View All Services &rarr;</a></li>
<?php endif; ?>
          </ul>
        </div>

        <!-- Col 3: More Services + Areas -->
        <div class="footer-col">
          <h4>More Services</h4>
          <ul>
<?php
$moreServices = array_slice($services, 8);
foreach ($moreServices as $svc):
?>
            <li><a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>/"><?php echo htmlspecialchars($svc['name']); ?></a></li>
<?php endforeach; ?>
          </ul>

          <h4 style="margin-top:var(--space-6)">Service Areas</h4>
          <ul>
<?php foreach ($serviceAreas as $area): ?>
            <li><a href="/service-area/"><?php echo htmlspecialchars($area['city'] ?: $address['city']); ?>, <?php echo htmlspecialchars($area['state']); ?></a></li>
<?php endforeach; ?>
          </ul>
        </div>

        <!-- Col 4: Contact -->
        <div class="footer-col">
          <h4>Contact Us</h4>
<?php if (!empty($phone)): ?>
          <div class="contact-item">
            <i data-lucide="phone" style="width:16px;height:16px;flex-shrink:0"></i>
            <a href="tel:<?php echo phoneLink($phone); ?>"><?php echo formatPhone($phone); ?></a>
          </div>
<?php endif; ?>
<?php if (!empty($email)): ?>
          <div class="contact-item">
            <i data-lucide="mail" style="width:16px;height:16px;flex-shrink:0"></i>
            <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
          </div>
<?php endif; ?>
<?php if (!empty($address['street'])): ?>
          <div class="contact-item">
            <i data-lucide="map-pin" style="width:16px;height:16px;flex-shrink:0"></i>
            <span><?php echo htmlspecialchars($businessAddress); ?></span>
          </div>
<?php else: ?>
          <div class="contact-item">
            <i data-lucide="map-pin" style="width:16px;height:16px;flex-shrink:0"></i>
            <span><?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></span>
          </div>
<?php endif; ?>
          <div class="contact-item">
            <i data-lucide="clock" style="width:16px;height:16px;flex-shrink:0"></i>
            <span>Mon&ndash;Sun: 7:00 AM &ndash; 7:00 PM</span>
          </div>
          <a href="/contact/" class="btn btn-primary" style="margin-top:var(--space-4)">Get Free Estimate</a>
        </div>

      </div>

      <!-- AEO Entity Block -->
      <div class="aeo-entity" itemscope itemtype="https://schema.org/RoofingContractor">
        <meta itemprop="name" content="<?php echo htmlspecialchars($siteName); ?>">
        <meta itemprop="url" content="<?php echo htmlspecialchars($siteUrl); ?>">
<?php if (!empty($phone)): ?>
        <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
<?php endif; ?>
        <h4>About <?php echo htmlspecialchars($siteName); ?></h4>
        <p><?php echo htmlspecialchars($siteName); ?> is a licensed roofing and construction contractor based in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?>. Since <?php echo $yearEstablished; ?>, we have provided residential and commercial roofing, siding, drywall, and insurance-based storm restoration services across central and eastern Missouri. Available seven days a week with free estimates on every project.</p>
      </div>

      <!-- Footer Legal Row -->
      <div class="footer-legal-row">
        <a href="/privacy-policy/">Privacy Policy</a>
        <span class="divider">|</span>
        <a href="/terms/">Terms of Service</a>
        <span class="divider">|</span>
        <a href="/cookie-policy/">Cookie Policy</a>
        <span class="divider">|</span>
        <a href="/accessibility/">Accessibility</a>
        <span class="divider">|</span>
        <a href="/privacy-policy/#ccpa-rights">Do Not Sell or Share My Personal Information</a>
        <span class="divider">|</span>
        <a href="/sitemap.xml">Sitemap</a>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
        <p class="footer-credit">
          <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design &amp; Hosting by Page One Insights, LLC</a>
        </p>
      </div>

    </div>
  </footer>

  <!-- Back to Top -->
  <button class="back-to-top" aria-label="Back to top">
    <i data-lucide="chevron-up" style="width:20px;height:20px"></i>
  </button>

  <!-- Mobile Floating CTA Bar -->
  <div class="mobile-cta-bar">
    <div class="mobile-cta-inner">
<?php if (!empty($phone)): ?>
      <a href="tel:<?php echo phoneLink($phone); ?>" class="btn btn-accent">
        <i data-lucide="phone" style="width:16px;height:16px"></i> Call Now
      </a>
<?php endif; ?>
      <a href="/contact/" class="btn btn-outline-white">
        <i data-lucide="file-text" style="width:16px;height:16px"></i> Free Estimate
      </a>
    </div>
  </div>

  <!-- Cookie Banner -->
  <div class="cookie-banner" id="cookie-banner" role="alert" aria-label="Cookie notice">
    <div class="cookie-banner__inner">
      <p class="cookie-banner__text">
        We use cookies to enhance your browsing experience and analyze site traffic.
        By continuing to use this site, you agree to our use of cookies.
        <a href="/cookie-policy/">Learn more</a>.
      </p>
      <button class="cookie-banner__dismiss" id="cookie-dismiss">Got it</button>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
  <script>lucide.createIcons();</script>
  <script src="/assets/js/main.js" defer></script>
  <script src="/assets/js/animations.js" defer></script>
  <script src="/assets/js/effects.js" defer></script>

  <!-- Cookie Banner Dismissal -->
  <script>
    (function() {
      var banner = document.getElementById('cookie-banner');
      var dismiss = document.getElementById('cookie-dismiss');
      if (banner && dismiss) {
        if (!localStorage.getItem('cookie_consent_dismissed')) {
          setTimeout(function() { banner.classList.add('visible'); }, 1000);
        }
        dismiss.addEventListener('click', function() {
          banner.classList.remove('visible');
          localStorage.setItem('cookie_consent_dismissed', '1');
        });
      }
    })();
  </script>

</body>
</html>
