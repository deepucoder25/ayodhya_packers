<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

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
        'title' => 'Office Relocation',
        'desc' => 'Minimize downtime with our seamless office relocation services.',
        'link' => 'office-relocation',
        'image' => 'office-relocation-services.jpg',
        'color' => 'pink',
        'icon' => '<i class="bi bi-building-fill"></i>'
    ],
    [
        'title' => 'Car Transportation',
        'desc' => 'Secure and reliable vehicle transport across India.',
        'link' => 'car-transportation',
        'image' => 'car-transportation-services.jpg',
        'color' => 'blue',
        'icon' => '<i class="bi bi-car-front-fill"></i>'
    ],
    [
        'title' => 'Warehousing & Storage',
        'desc' => 'Secure storage solutions for short-term and long-term needs.',
        'link' => 'warehousing-and-storage',
        'image' => 'warehouse-storage-services.jpg',
        'color' => 'green',
        'icon' => '<i class="bi bi-buildings-fill"></i>'
    ],
];

?>

<section class="services-section py-5 position-relative overflow-hidden">
    <svg width="0" height="0" style="position: absolute; z-index: -1;">
        <defs>
            <clipPath id="service-curve-clip" clipPathUnits="objectBoundingBox">
                <path d="M 0.22,0 C 0.45,0.18 0.15,0.82 0,1 H 1 V 0 Z" />
            </clipPath>
        </defs>
    </svg>

    <div class="container position-relative srv-z2">
        <div class="srv-decor srv-decor-left d-none d-lg-block">
            <svg width="260" height="150" viewBox="0 0 260 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="100" cy="80" r="10" fill="#A9CF46" />
                <circle cx="100" cy="80" r="3.5" fill="white" />
                <path d="M 110 80 C 130 80, 140 115, 170 100 C 190 90, 210 90, 230 105 C 245 115, 255 110, 260 105" 
                      stroke="#A9CF46" stroke-width="2" stroke-linecap="round" stroke-dasharray="2 6" />
            </svg>
        </div>

        <div class="srv-decor srv-decor-right d-none d-lg-block">
            <svg width="260" height="150" viewBox="0 0 260 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M 0 110 C 30 100, 60 70, 90 90 C 110 105, 130 50, 160 30" 
                      stroke="#EB268F" stroke-width="2" stroke-linecap="round" stroke-dasharray="2 6" />
                <g transform="translate(160, 30) rotate(-15)">
                    <path d="M-8-8 L8 0 L-8 8 L-4 0 Z" fill="#EB268F" />
                </g>
            </svg>
        </div>
        <div class="section-header text-center mb-5">
            <div class="srv-eyebrow mb-3">
                <span class="srv-eyebrow-line left"></span>
                <span class="srv-eyebrow-text px-3">OUR SERVICES</span>
                <span class="srv-eyebrow-line right">
                    <svg class="srv-eyebrow-plane" viewBox="0 0 16 16" width="12" height="12" fill="currentColor">
                        <path d="M0 14h16v2H0zM12.5 0l3 3-3 3-1-1 1.5-1.5H8C5.5 3.5 3.5 5.5 3.5 8S5.5 12.5 8 12.5h6v2H8C4.5 14.5 1.5 11.5 1.5 8S4.5 1.5 8 1.5h4.5L11 0z"/>
                    </svg>
                </span>
            </div>
            
            <h2 class="srv-main-title">Moving Solutions <span class="highlight-pink-text">Tailored For You</span></h2>
            
            <p class="srv-subtitle mx-auto">At <?= htmlspecialchars($company3) ?>, we provide end-to-end moving solutions designed to make your relocation smooth, safe and stress-free.</p>
        </div>

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
                                     class="srv-img" loading="lazy">
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
