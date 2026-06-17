<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Our Services',
    'description' => 'Explore our complete range of shifting and relocation services. From household packing and office shifting to vehicle transport and secure warehousing.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Our Services']
    ]
]);

$services = [
    [
        'title' => 'Packing & Moving',
        'desc' => 'Premium packing materials and expert handling for safe relocation.',
        'link' => 'packing-and-moving',
        'image' => 'packing-moving-services.jpg',
        'color' => 'pink',
        'icon' => '<i class="bi bi-box-seam-fill"></i>'
    ],
    [
        'title' => 'Loading & Unloading',
        'desc' => 'Expert team for safe loading and unloading of your goods.',
        'link' => 'loading-and-unloading',
        'image' => 'loading-unloading-services.jpg',
        'color' => 'blue',
        'icon' => '<i class="bi bi-truck-flatbed"></i>'
    ],
    [
        'title' => 'Residential Relocation',
        'desc' => 'Safe and efficient home shifting with complete care for your belongings.',
        'link' => 'residential-relocation',
        'image' => 'home-shifting-services.jpg',
        'color' => 'green',
        'icon' => '<i class="bi bi-house-door-fill"></i>'
    ],
    [
        'title' => 'Home Relocation',
        'desc' => 'Professional family shifting and door-to-door home relocation.',
        'link' => 'home-relocation',
        'image' => 'home-relocation.jpg',
        'color' => 'pink',
        'icon' => '<i class="bi bi-house-fill"></i>'
    ],
    [
        'title' => 'Office Relocation',
        'desc' => 'Minimize downtime with our seamless office relocation services.',
        'link' => 'office-relocation',
        'image' => 'office-relocation-services.jpg',
        'color' => 'blue',
        'icon' => '<i class="bi bi-building-fill"></i>'
    ],
    [
        'title' => 'Car Transportation',
        'desc' => 'Secure and reliable vehicle transport across India.',
        'link' => 'car-transportation',
        'image' => 'car-transportation-services.jpg',
        'color' => 'green',
        'icon' => '<i class="bi bi-car-front-fill"></i>'
    ],
    [
        'title' => 'Bike Transportation',
        'desc' => 'Secure bike shifting and two-wheeler transport using specialized carriers.',
        'link' => 'bike-transportation',
        'image' => 'bike.jpg',
        'color' => 'pink',
        'icon' => '<i class="bi bi-bicycle"></i>'
    ],
    [
        'title' => 'International Moving',
        'desc' => 'Hassle-free international cargo and global shifting services.',
        'link' => 'international-transportation',
        'image' => 'international-moving-services.jpg',
        'color' => 'blue',
        'icon' => '<i class="bi bi-globe-americas"></i>'
    ],
    [
        'title' => 'Warehousing & Storage',
        'desc' => 'Secure storage solutions for short-term and long-term needs.',
        'link' => 'warehousing-and-storage',
        'image' => 'warehouse-storage-services.jpg',
        'color' => 'green',
        'icon' => '<i class="bi bi-buildings-fill"></i>'
    ],
    [
        'title' => 'Transport Insurance',
        'desc' => 'Protect your goods against unexpected transit risks.',
        'link' => 'transport-insurance',
        'image' => 'transport-insurance-services.jpg',
        'color' => 'pink',
        'icon' => '<i class="bi bi-shield-fill-check"></i>'
    ],
    [
        'title' => 'Heavy Machinery Shifting',
        'desc' => 'Safe rigging, loading, and moving of heavy industrial machinery.',
        'link' => 'heavy-machinery-and-shifting',
        'image' => 'heavy-machinery.jpg',
        'color' => 'blue',
        'icon' => '<i class="bi bi-gear-wide-connected"></i>'
    ],
];
?>

<section class="services-section py-5 position-relative overflow-hidden bg-light">
    <div class="container position-relative srv-z2">
        <div class="row g-4 justify-content-center">
            <?php foreach ($services as $service): ?>
                <div class="col-lg-4 col-md-6 col-6 d-flex">
                    <div class="srv-card w-100 <?= $service['color'] ?> d-flex">
                        <div class="srv-card-left">
                            <div class="srv-icon d-flex align-items-center justify-content-center">
                                <?= $service['icon'] ?>
                            </div>
                            <div class="srv-card-title-wrap">
                                <h3 class="srv-card-title"><?= htmlspecialchars($service['title']) ?></h3>
                                <span class="srv-title-line"></span>
                            </div>
                            <p class="srv-card-desc"><?= htmlspecialchars($service['desc']) ?></p>
                            <a href="<?= site_url($service['link']) ?>" class="srv-card-link">
                                <span class="link-text">Learn More</span>
                                <span class="link-circle d-flex align-items-center justify-content-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                        
                        <div class="srv-card-right">
                            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="srv-wave-svg">
                                <path d="M 0.1,0 C 0.3,0.15 0.05,0.85 -0.1,1 H 1 V 0 Z" class="srv-wave-outer" />
                                <path d="M 0.16,0 C 0.36,0.15 0.11,0.85 -0.04,1 H 1 V 0 Z" class="srv-wave-inner" />
                            </svg>
                            <div class="srv-img-clip">
                                <img src="<?= base_url('assets/images/services_modules/' . $service['image']) ?>" 
                                     alt="<?= htmlspecialchars($service['title']) ?>" 
                                     class="srv-img" loading="lazy" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="srv-footer-cta mt-5">
            <div class="srv-cta-flex">
                <div class="srv-cta-item srv-cta-help">
                    <a href="<?= $phonehtml ?>" class="srv-cta-phone-pulse">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            <path d="M18 2c0 2-1 3-3 3M21 2c0 4.5-2 6.5-6 6.5M15 2c0 .8-.5 1.3-1.5 1.3" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" fill="none"/>
                        </svg>
                    </a>
                    <div class="srv-cta-help-text">
                        <h4>Need Help Choosing the Right Service?</h4>
                        <p>Our experts are here to help you 24/7!</p>
                    </div>
                </div>

                <div class="srv-cta-divider"></div>

                <div class="srv-cta-item srv-cta-feature">
                    <div class="srv-cta-icon icon-support">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="srv-cta-feature-text">
                        <strong class="feature-val text-tertiary">24/7</strong>
                        <span class="feature-lbl">Customer Support</span>
                    </div>
                </div>

                <div class="srv-cta-divider"></div>

                <div class="srv-cta-item srv-cta-feature">
                    <div class="srv-cta-icon icon-safe">
                        <i class="bi bi-shield-fill-check"></i>
                    </div>
                    <div class="srv-cta-feature-text">
                        <strong class="feature-val text-white">100%</strong>
                        <span class="feature-lbl">Safe & Secure</span>
                    </div>
                </div>

                <div class="srv-cta-divider"></div>

                <div class="srv-cta-item srv-cta-feature">
                    <div class="srv-cta-icon icon-happy">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div class="srv-cta-feature-text">
                        <strong class="feature-val text-pink"><?= $happyClients ?></strong>
                        <span class="feature-lbl">Happy Customers</span>
                    </div>
                </div>

                <div class="srv-cta-divider"></div>

                <div class="srv-cta-item srv-cta-action">
                    <a href="#" class="srv-cta-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <span>Get A Free Quote</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
