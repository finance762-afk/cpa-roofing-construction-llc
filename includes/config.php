<?php
// ============================================================
// Site Configuration — CPA Roofing & Construction, LLC
// ============================================================

// ── Identity ────────────────────────────────────────────────
$slug           = 'cpa-roofing-construction-llc';
$siteName       = 'CPA Roofing & Construction, LLC';
$tagline        = 'Your Roof, Our Commitment';
$industry       = 'roofing';

// ── Contact ─────────────────────────────────────────────────
$phone          = '';
$phoneSecondary = '';
$email          = '';

// ── Address ─────────────────────────────────────────────────
$address = [
    'street' => '',
    'city'   => 'Warrenton',
    'state'  => 'MO',
    'zip'    => '63383',
];

// ── Domain & URLs ───────────────────────────────────────────
$domain  = 'cpa-roofing-construction-llc.pageone.cloud';
$siteUrl = 'https://' . $domain;

// ── SEO Keywords ────────────────────────────────────────────
$primaryKeyword    = 'roofing contractor warrenton mo';
$secondaryKeywords = [
    'roof repair warrenton mo',
    'metal roofing warrenton mo',
    'commercial roofing warrenton mo',
    'new roof installation warrenton mo',
    'tpo roofing warrenton mo',
    'roof coatings warrenton mo',
    'roofing near me warrenton',
    'commercial roof repair warrenton mo',
    'roof tear off warrenton mo',
    'insurance roofing claims warrenton mo',
    'siding installation warrenton mo',
    'roofer near me warrenton',
];

// ── Services ────────────────────────────────────────────────
$services = [
    [
        'name'        => 'Roofing Contractor Services',
        'slug'        => 'roofing-contractor-services',
        'description' => 'Full-service roofing solutions for residential and commercial properties in Warrenton, MO. Professional contractors specializing in all types of roof installations, repairs, and maintenance.',
        'keywords'    => ['roofing contractor Warrenton MO', 'professional roofer', 'roofing services', 'residential roofing'],
    ],
    [
        'name'        => 'Commercial Roofing',
        'slug'        => 'commercial-roofing',
        'description' => 'Expert commercial roofing services designed for businesses in Warrenton, MO. We handle large-scale installations and repairs for commercial properties of all sizes.',
        'keywords'    => ['commercial roofing Warrenton MO', 'commercial roof contractor', 'business roofing', 'flat roof repair'],
    ],
    [
        'name'        => 'Roof Repairs',
        'slug'        => 'roof-repairs',
        'description' => 'Professional roof repair services to fix leaks, damage, and wear. Quick response and quality repairs keep your Warrenton, MO property protected year-round.',
        'keywords'    => ['roof repair Warrenton MO', 'roof leak repair', 'emergency roof repair', 'roof damage repair'],
    ],
    [
        'name'        => 'Commercial Roof Repairs',
        'slug'        => 'commercial-roof-repairs',
        'description' => 'Specialized commercial roof repair services for businesses in Warrenton, MO. We minimize downtime with efficient, professional repairs.',
        'keywords'    => ['commercial roof repair Warrenton MO', 'business roof repair', 'commercial leak repair', 'flat roof repair'],
    ],
    [
        'name'        => 'Insurance Roofing Bids',
        'slug'        => 'insurance-roofing-bids',
        'description' => 'Insurance claim roofing assessments and bids for Warrenton, MO property owners. We work with insurance companies to ensure fair coverage for roof damage.',
        'keywords'    => ['insurance roofing bids Warrenton MO', 'roof damage claims', 'insurance roof assessment', 'storm damage roof'],
    ],
    [
        'name'        => 'New Roof Installation',
        'slug'        => 'new-roof-installation',
        'description' => 'New roof installation services for homes and businesses in Warrenton, MO. Quality materials and expert craftsmanship for lasting protection.',
        'keywords'    => ['roof installation Warrenton MO', 'new roof contractor', 'residential roof installation', 'commercial roof installation'],
    ],
    [
        'name'        => 'Siding Installation & Repair',
        'slug'        => 'siding-installation-repair',
        'description' => 'Professional siding services for residential and commercial properties in Warrenton, MO. Durable siding solutions enhance curb appeal and protect your building.',
        'keywords'    => ['siding contractor Warrenton MO', 'siding installation', 'siding repair', 'exterior siding'],
    ],
    [
        'name'        => 'Roof Tear-Offs',
        'slug'        => 'roof-tear-offs',
        'description' => 'Complete roof tear-off and removal services in Warrenton, MO. We safely remove old roofing materials in preparation for new installation.',
        'keywords'    => ['roof tear off Warrenton MO', 'roof removal', 'old roof removal', 'roof replacement'],
    ],
    [
        'name'        => 'TPO Roofing',
        'slug'        => 'tpo-roofing',
        'description' => 'Thermoplastic polyolefin (TPO) roofing installation and repair in Warrenton, MO. Energy-efficient and durable TPO systems for commercial properties.',
        'keywords'    => ['TPO roof Warrenton MO', 'TPO roofing contractor', 'flat roof TPO', 'commercial TPO roof'],
    ],
    [
        'name'        => 'Metal Roofing',
        'slug'        => 'metal-roofing',
        'description' => 'Durable metal roofing solutions for residential and commercial buildings in Warrenton, MO. Long-lasting protection with modern aesthetic appeal.',
        'keywords'    => ['metal roof Warrenton MO', 'metal roofing contractor', 'standing seam metal roof', 'metal roof installation'],
    ],
    [
        'name'        => 'Roof Coatings',
        'slug'        => 'roof-coatings',
        'description' => 'Protective roof coating services that extend roof life and improve energy efficiency in Warrenton, MO. Affordable protection against weather and UV damage.',
        'keywords'    => ['roof coating Warrenton MO', 'roof sealant', 'reflective roof coating', 'roof protection'],
    ],
    [
        'name'        => 'Drywall Installation',
        'slug'        => 'drywall-installation',
        'description' => 'Professional drywall installation for residential and commercial interiors in Warrenton, MO. Quality craftsmanship for finished walls and ceilings.',
        'keywords'    => ['drywall installation Warrenton MO', 'drywall contractor', 'interior drywall', 'commercial drywall'],
    ],
    [
        'name'        => 'Drywall Repair',
        'slug'        => 'drywall-repair',
        'description' => 'Expert drywall repair services for water damage, holes, and cracks in Warrenton, MO. Professional finishing for seamless results.',
        'keywords'    => ['drywall repair Warrenton MO', 'drywall patch repair', 'water damage drywall', 'interior repair'],
    ],
];

// ── Service Grouping (page structure) ───────────────────────
$serviceGroups = [
    [
        'page'     => 'Drywall Installation',
        'slug'     => 'drywall-installation',
        'solo'     => true,
        'services' => ['Drywall Installation'],
    ],
    [
        'page'     => 'Drywall Repair',
        'slug'     => 'drywall-repair',
        'solo'     => true,
        'services' => ['Drywall Repair'],
    ],
    [
        'page'     => 'Roofing Services',
        'slug'     => 'roofing-services',
        'solo'     => false,
        'services' => [
            'Commercial Roofing',
            'Roof Repairs',
            'Commercial Roof Repairs',
            'Insurance Roofing Bids',
            'New Roof Installation',
            'Roof Tear-Offs',
            'TPO Roofing',
            'Metal Roofing',
            'Roof Coatings',
        ],
    ],
    [
        'page'     => 'Additional Services',
        'slug'     => 'additional-services',
        'solo'     => false,
        'services' => [
            'Siding Installation & Repair',
            'Roofing Contractor Services',
        ],
    ],
];

// ── Service Areas ───────────────────────────────────────────
$serviceAreas = [
    [
        'city'    => 'Warrenton',
        'state'   => 'MO',
        'zip'     => '63383',
        'primary' => true,
    ],
];

// ── Social Links ────────────────────────────────────────────
$socialLinks = [];

// ── Analytics ───────────────────────────────────────────────
$googleAnalyticsId = 'G-XXXXXXXXXX';

// ── Brand Colors ────────────────────────────────────────────
$colors = [
    'primary'   => '#f55600',
    'secondary' => '#f5f5f5',
    'accent'    => '#005ef5',
];

// ── Business History ────────────────────────────────────────
$yearEstablished = 1995;
$yearsInBusiness = (int) date('Y') - $yearEstablished;

// ── Form Action ─────────────────────────────────────────────
$formAction = 'https://design.pageone.cloud/api/leads/cpa-roofing-construction-llc';

// ── Logo ────────────────────────────────────────────────────
$logoUrl     = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/cpa-roofing-construction-llc/logo/1779465444410-tft9zg-Logo_for_client_transparent.png';
$logoAlt     = 'CPA Roofing & Construction, LLC logo';

// ── CSS Version (increment on every styles.css change) ──────
$cssVersion = '1';
