<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
?>
<section class="welcome-section py-5 position-relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="welcome-bg-decor d-none d-lg-block" aria-hidden="true">
        <span class="decor-circle circle-1"></span>
        <span class="decor-circle circle-2"></span>
    </div>

    <div class="container position-relative welcome-z2">
        <div class="row">
            <div class="col-12">
                <div class="welcome-premium-box p-4 p-md-5 rounded-4 shadow-sm border border-light position-relative overflow-hidden">
                    <div class="row align-items-center g-4 g-lg-5">
                        <div class="col-lg-8 col-12">
                            <div class="welcome-badge mb-3 d-inline-flex align-items-center">
                                <span class="badge-icon d-flex align-items-center justify-content-center me-2" aria-hidden="true">
                                    <i class="bi bi-patch-check-fill"></i>
                                </span>
                                <span class="badge-text text-uppercase fw-bold">Welcome to <?= htmlspecialchars($company3) ?></span>
                            </div>
                            
                            <p class="mb-4">
                                Moving is not just about changing the addresses, but about relocations of all your goods including documents, furniture, and even vehicles.
                            </p>
                            
                            <p class="mb-0">
                                At <?= $company3 ?>, you can get <b>reliable shifting services</b> for your households, offices, apartments, shops, commercial premises, and others. We offer a variety of relocation options for locals and long distances, and our highly-skilled team is always ready to give you a helping hand.
                            </p>
                        </div>
                        
                        <div class="col-lg-4 col-12">
                            <div class="welcome-stats-card p-4 rounded-3 text-center border">
                                <div class="stat-icon mb-3" aria-hidden="true">
                                    <div class="icon-circle d-inline-flex align-items-center justify-content-center">
                                        <i class="bi bi-truck"></i>
                                    </div>
                                </div>
                                <h3 class="stat-number mb-2">1500+</h3>
                                <p class="stat-label mb-2 text-uppercase fw-bold text-secondary">Shifts Done</p>
                                <p class="stat-text small mb-0 text-muted">
                                    Our good reputation was created with professionalism, honest prices, and reliability.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-section py-5 position-relative overflow-hidden">
    <div class="about-bg-decor about-bg-decor-left d-none d-lg-block">
        <svg width="200" height="150" viewBox="0 0 200 150" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <pattern id="about-dots-left" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="var(--secondary-color)" opacity="0.1" />
            </pattern>
            <rect width="80" height="150" fill="url(#about-dots-left)" />
        </svg>
    </div>

    <div class="about-bg-decor about-bg-decor-right d-none d-lg-block">
        <svg width="200" height="150" viewBox="0 0 200 150" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <pattern id="about-dots-right" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="var(--primary-color)" opacity="0.1" />
            </pattern>
            <rect x="120" width="80" height="150" fill="url(#about-dots-right)" />
        </svg>
    </div>

    <div class="container position-relative about-z2">
        <div class="row align-items-center g-4 g-lg-5 mb-5">
            <div class="col-lg-6 col-12">
                <div class="about-content">
                    <div class="srv-eyebrow mb-3">
                        <span class="reviews-heading-line left">
                            <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <line x1="0" y1="2" x2="22" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                                <line x1="22" y1="2" x2="45" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="srv-eyebrow-text px-3 d-inline-flex align-items-center">
                            ABOUT US 
                            <svg width="20" height="16" viewBox="0 0 24 24" fill="var(--primary-color)" class="ms-2" aria-hidden="true">
                                <path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm12.5-11H17V5h1.5v2.5zM18 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                            </svg>
                        </span>
                        <span class="reviews-heading-line right">
                            <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <line x1="0" y1="2" x2="22" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                                <line x1="22" y1="2" x2="45" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </span>
                    </div>
                    <h2 class="srv-main-title text-start mb-3">
                        Moving Made Easy. <span class="highlight-pink-text">Every Single Time.</span>
                    </h2>
                    <div class="about-title-underline mb-4">
                        <span class="line-pink"></span>
                        <span class="line-blue"></span>
                    </div>
                    <p class="mb-3">
                       <strong><?= $company3 ?></strong> was founded with an aim of making the moving process easy for customers. Throughout our history, we helped our clients to shift to new flats, relocated offices of companies, and transported various vehicles around India.
                    </p>
                    
                    <p>
                        Our qualified team consists of packing, loading specialists, drivers, and logistics specialists. We pack and transport all your belongings carefully using quality packing materials, professional procedures, and innovative transportation techniques.
                    </p>

                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-image-showcase">
                    <div class="about-img-mask-bg"></div>
                    <img loading="lazy" src="<?= base_url('assets/images/about_modules/about.jpg') ?>" 
                         alt="Reliable Packers and Movers Service - <?= $company3 ?>" 
                         class="about-showcase-img img-fluid" width="570" height="360">
                </div>
            </div>
        </div>
        <div class="row g-4 mb-5 justify-content-center">
            <div class="col-lg-2-5 col-md-4 col-6 d-flex">
                <div class="about-value-card w-100 pink">
                    <div class="value-icon-circle">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="value-card-title">Our Commitment</h4>
                    <p class="value-card-desc">We are committed to delivering safe, timely and hassle-free moving experiences.</p>
                </div>
            </div>
            <div class="col-lg-2-5 col-md-4 col-6 d-flex">
                <div class="about-value-card w-100 blue">
                    <div class="value-icon-circle">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h4 class="value-card-title">Our Team</h4>
                    <p class="value-card-desc">Our skilled and trained professionals ensure your move is in safe hands.</p>
                </div>
            </div>
            <div class="col-lg-2-5 col-md-4 col-6 d-flex">
                <div class="about-value-card w-100 green">
                    <div class="value-icon-circle">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <h4 class="value-card-title">Our Quality</h4>
                    <p class="value-card-desc">We use premium packing materials and modern equipment for best results.</p>
                </div>
            </div>
            <div class="col-lg-2-5 col-md-4 col-6 d-flex">
                <div class="about-value-card w-100 pink">
                    <div class="value-icon-circle">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h4 class="value-card-title">Our Priority</h4>
                    <p class="value-card-desc">Customer satisfaction is our top priority – always.</p>
                </div>
            </div>
            <div class="col-lg-2-5 col-md-4 col-6 d-flex">
                <div class="about-value-card w-100 blue">
                    <div class="value-icon-circle">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h4 class="value-card-title">Our Vision</h4>
                    <p class="value-card-desc">To be India's most trusted and preferred moving company.</p>
                </div>
            </div>
        </div>
        <div class="about-stats-banner">
            <div class="about-stat-item">
                <div class="stat-icon-circle bg-secondary">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="stat-text-details">
                    <span class="stat-num-val"><?= $happyClients?></span>
                    <span class="stat-lbl-txt">Happy Customers</span>
                </div>
            </div>
            <div class="about-stat-item">
                <div class="stat-icon-circle bg-primary">
                    <i class="bi bi-box-seam-fill"></i>
                </div>
                <div class="stat-text-details">
                    <span class="stat-num-val"><?= $total_moves?></span>
                    <span class="stat-lbl-txt">Moves Completed</span>
                </div>
            </div>
            <div class="about-stat-item">
                <div class="stat-icon-circle bg-success-theme">
                    <i class="bi bi-geo-alt-fill"></i>
                </div>
                <div class="stat-text-details">
                    <span class="stat-num-val"><?= $statesCovered?></span>
                    <span class="stat-lbl-txt">States Covered</span>
                </div>
            </div>
            <div class="about-stat-item">
                <div class="stat-icon-circle bg-secondary">
                    <i class="bi bi-person-badge-fill"></i>
                </div>
                <div class="stat-text-details">
                    <span class="stat-num-val"><?= $experience?></span>
                    <span class="stat-lbl-txt"> Years of Experience</span>
                </div>
            </div>
            <div class="about-stat-item">
                <div class="stat-icon-circle bg-primary">
                    <i class="bi bi-star-fill"></i>
                </div>
                <div class="stat-text-details">
                    <span class="stat-num-val"><?= $ratingValue?>/5</span>
                    <span class="stat-lbl-txt">Customer Rating</span>
                </div>
            </div>
        </div>

    </div>
</section>
