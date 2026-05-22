  <!-- Skip to Content -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <header class="site-header" data-header>
    <nav class="navbar" aria-label="Main navigation">
      <div class="header-inner container">

        <!-- Logo -->
        <a href="/" class="site-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
          <img src="<?php echo htmlspecialchars($logoUrl); ?>" alt="<?php echo htmlspecialchars($logoAlt); ?>" width="180" height="50">
        </a>

        <!-- Desktop Nav Links -->
        <ul class="nav-links" role="menubar">
          <li role="none"><a href="/" role="menuitem"<?php echo isActivePage('home'); ?>>Home</a></li>
          <li class="nav-dropdown has-dropdown" role="none">
            <a href="/services/" role="menuitem" aria-haspopup="true"<?php echo isActivePage('services'); ?>>Services</a>
            <ul class="nav-dropdown-menu dropdown" role="menu" style="display:none">
<?php foreach ($serviceGroups as $group): ?>
              <li role="none"><a href="/services/<?php echo htmlspecialchars($group['slug']); ?>/" role="menuitem"><?php echo htmlspecialchars($group['page']); ?></a></li>
<?php endforeach; ?>
            </ul>
          </li>
          <li role="none"><a href="/service-area/" role="menuitem"<?php echo isActivePage('service-area'); ?>>Service Area</a></li>
          <li role="none"><a href="/about/" role="menuitem"<?php echo isActivePage('about'); ?>>About</a></li>
          <li role="none"><a href="/contact/" role="menuitem"<?php echo isActivePage('contact'); ?>>Contact</a></li>
        </ul>

        <!-- Desktop CTA -->
        <div class="header-cta">
<?php if (!empty($phone)): ?>
          <a href="tel:<?php echo phoneLink($phone); ?>" class="btn btn-outline-white btn-sm">
            <i data-lucide="phone" style="width:16px;height:16px"></i>
            <?php echo formatPhone($phone); ?>
          </a>
<?php endif; ?>
          <a href="/contact/" class="btn btn-accent btn-sm">Free Estimate</a>
        </div>

        <!-- Mobile Hamburger -->
        <button class="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
          <span class="hamburger-line"></span>
        </button>

      </div>
    </nav>

    <!-- Mobile Full-Screen Menu -->
    <div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobile navigation" hidden>
      <nav aria-label="Mobile navigation">
        <ul class="mobile-menu__links">
          <li><a href="/"<?php echo isActivePage('home'); ?>>Home</a></li>
          <li>
            <a href="/services/"<?php echo isActivePage('services'); ?>>Services</a>
            <ul class="mobile-menu__sub">
<?php foreach ($serviceGroups as $group): ?>
              <li><a href="/services/<?php echo htmlspecialchars($group['slug']); ?>/"><?php echo htmlspecialchars($group['page']); ?></a></li>
<?php endforeach; ?>
            </ul>
          </li>
          <li><a href="/service-area/"<?php echo isActivePage('service-area'); ?>>Service Area</a></li>
          <li><a href="/about/"<?php echo isActivePage('about'); ?>>About</a></li>
          <li><a href="/contact/"<?php echo isActivePage('contact'); ?>>Contact</a></li>
        </ul>
        <div class="mobile-menu__cta">
<?php if (!empty($phone)): ?>
          <a href="tel:<?php echo phoneLink($phone); ?>" class="btn btn-primary btn-lg">
            <i data-lucide="phone" style="width:18px;height:18px"></i> Call Now
          </a>
<?php endif; ?>
          <a href="/contact/" class="btn btn-accent btn-lg">Get Free Estimate</a>
        </div>
      </nav>
    </div>
  </header>

  <main id="main-content">
