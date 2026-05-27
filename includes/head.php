<?php
/**
 * head.php — CPA Roofing & Construction, LLC
 *
 * Page variables (set before including):
 *   $pageTitle, $pageDescription, $canonicalUrl, $currentPage
 *   $heroImagePreload (optional), $noindex (optional)
 *   $cssVersion (from config.php)
 */

// Fallback defaults
if (!isset($pageTitle))       $pageTitle       = $siteName . ' | ' . ucwords($primaryKeyword);
if (!isset($pageDescription)) $pageDescription = $siteName . ' provides expert roofing, construction, and siding services in ' . $address['city'] . ', ' . $address['state'] . '. Licensed contractor since ' . $yearEstablished . '. Call for a free estimate.';
if (!isset($canonicalUrl))    $canonicalUrl    = $siteUrl . '/';
if (!isset($currentPage))     $currentPage     = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <?php echo generateMetaTags($pageTitle, $pageDescription, $canonicalUrl); ?>
<?php if (!empty($noindex)): ?>
  <meta name="robots" content="noindex,nofollow">
<?php endif; ?>

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($logoUrl); ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale" content="en_US">

  <!-- Fonts: 3-font system (heading + body + accent) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="font" href="https://fonts.gstatic.com/s/robotoslab/v34/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjo0oSmb2Rm.woff2" type="font/woff2" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700;800;900&family=Inter:opsz,wght@14..32,400..900&family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- DNS Prefetch -->
  <link rel="dns-prefetch" href="//db.pageone.cloud">

  <!-- Favicon (files need to be generated post-design) -->
  <!-- <link rel="icon" type="image/png" href="/assets/images/favicon.png"> -->
  <!-- <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg"> -->

  <!-- Stylesheet -->
  <link rel="stylesheet" href="/assets/css/framework.css?v=<?php echo $cssVersion ?? '2'; ?>">

<?php if (!empty($heroImagePreload)): ?>
  <!-- Hero image preload -->
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroImagePreload); ?>">
<?php endif; ?>

  <!-- Google Analytics (replace with actual client GA4 ID post-launch) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo $googleAnalyticsId; ?>');
  </script> -->

  <!-- LocalBusiness Schema (homepage) -->
<?php if ($currentPage === 'home'): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "RoofingContractor",
    "@id": "<?php echo $siteUrl; ?>/#organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "url": "<?php echo $siteUrl; ?>/",
    "logo": "<?php echo htmlspecialchars($logoUrl); ?>",
    "image": "<?php echo htmlspecialchars($logoUrl); ?>",
    "description": "<?php echo htmlspecialchars(substr($content['description'] ?? $pageDescription, 0, 300)); ?>",
<?php if (!empty($phone)): ?>
    "telephone": "<?php echo htmlspecialchars($phone); ?>",
<?php endif; ?>
<?php if (!empty($email)): ?>
    "email": "<?php echo htmlspecialchars($email); ?>",
<?php endif; ?>
    "address": {
      "@type": "PostalAddress",
<?php if (!empty($address['street'])): ?>
      "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
<?php endif; ?>
      "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
      "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
      "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
      "addressCountry": "US"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 38.8114,
      "longitude": -91.1415
    },
    "foundingDate": "<?php echo $yearEstablished; ?>",
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
        "opens": "07:00",
        "closes": "19:00"
      }
    ],
    "areaServed": [
<?php foreach ($serviceAreas as $i => $area): ?>
      {
        "@type": "City",
        "name": "<?php echo htmlspecialchars($area['city'] ?: $address['city']); ?>",
        "containedInPlace": {
          "@type": "State",
          "name": "<?php echo htmlspecialchars($area['state']); ?>"
        }
      }<?php echo ($i < count($serviceAreas) - 1) ? ',' : ''; ?>

<?php endforeach; ?>
    ],
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Roofing & Construction Services",
      "itemListElement": [
<?php foreach ($services as $i => $svc): ?>
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "<?php echo htmlspecialchars($svc['name']); ?>",
            "description": "<?php echo htmlspecialchars($svc['description']); ?>"
          }
        }<?php echo ($i < count($services) - 1) ? ',' : ''; ?>

<?php endforeach; ?>
      ]
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "87",
      "bestRating": "5",
      "worstRating": "1"
    },
    "sameAs": [
<?php
$sameAs = [];
if (!empty($socialLinks)) {
    foreach ($socialLinks as $link) {
        $sameAs[] = '"' . htmlspecialchars($link) . '"';
    }
}
if (!empty($googleBusinessProfileUrl)) {
    $sameAs[] = '"' . htmlspecialchars($googleBusinessProfileUrl) . '"';
}
echo implode(",\n      ", $sameAs);
?>
    ]
  }
  </script>
<?php endif; ?>

</head>
<body>
