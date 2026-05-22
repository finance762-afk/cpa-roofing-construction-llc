<?php
// ============================================================
// Helper Functions — CPA Roofing & Construction, LLC
// ============================================================

/**
 * Check if current page matches the given page identifier.
 * Used for nav active states.
 */
function isActivePage($page) {
    global $currentPage;
    return (isset($currentPage) && $currentPage === $page) ? ' aria-current="page"' : '';
}

/**
 * Format phone number for display: (XXX) XXX-XXXX
 */
function formatPhone($phone) {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '(' . substr($digits, 1, 3) . ') ' . substr($digits, 4, 3) . '-' . substr($digits, 7);
    }
    return $phone;
}

/**
 * Get tel: link from phone number (digits only with +1 prefix).
 */
function phoneLink($phone) {
    $digits = preg_replace('/\D/', '', $phone);
    if (strlen($digits) === 10) {
        return '+1' . $digits;
    }
    return '+' . $digits;
}

/**
 * Generate a URL-safe slug from a service name.
 */
function getServiceSlug($name) {
    $slug = strtolower($name);
    $slug = preg_replace('/[^a-z0-9\s-]/', '', $slug);
    $slug = preg_replace('/[\s-]+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Generate a URL-safe slug from a city name.
 */
function getAreaSlug($city) {
    return getServiceSlug($city);
}

/**
 * Generate Service schema JSON-LD for a single service.
 */
function generateServiceSchema($service, $siteUrl, $siteName) {
    return [
        '@type'       => 'Service',
        'name'        => $service['name'],
        'description' => $service['description'],
        'url'         => $siteUrl . '/services/' . $service['slug'] . '/',
        'provider'    => [
            '@type' => 'Organization',
            'name'  => $siteName,
            '@id'   => $siteUrl . '/#organization',
        ],
    ];
}

/**
 * Generate FAQPage schema from an array of Q&A pairs.
 * Each $faq = ['question' => '...', 'answer' => '...']
 */
function generateFAQSchema($faqs) {
    $items = [];
    foreach ($faqs as $faq) {
        $items[] = [
            '@type'          => 'Question',
            'name'           => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $faq['answer'],
            ],
        ];
    }
    return [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ];
}

/**
 * Generate meta tags for a page (title, description, canonical).
 */
function generateMetaTags($title, $description, $canonical) {
    $out  = '<title>' . htmlspecialchars($title) . '</title>' . "\n";
    $out .= '  <meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
    $out .= '  <link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . "\n";
    return $out;
}

/**
 * Find a service by name from the global $services array.
 */
function findServiceByName($name) {
    global $services;
    foreach ($services as $svc) {
        if ($svc['name'] === $name) {
            return $svc;
        }
    }
    return null;
}
