<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="why-choose-section py-5 position-relative overflow-hidden" id="why-choose-us">
    <!-- Background Decor -->
    <div class="why-choose-decor d-none d-lg-block" aria-hidden="true">
        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="40" stroke="var(--primary-color, #0098DB)" stroke-width="2" stroke-dasharray="4 6" opacity="0.15" />
        </svg>
    </div>

    <div class="container position-relative why-choose-z">
        <div class="row g-4 g-lg-5 align-items-center">
            <!-- Left Column: Introduction (col-lg-6 col-12) -->
            <div class="col-lg-6 col-12">
                <div class="why-choose-intro">
                    <div class="srv-eyebrow mb-3" aria-hidden="true">
                        <span class="reviews-heading-line left">
                            <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="0" y1="2" x2="22" y2="2" stroke="var(--primary-color, #0098DB)" stroke-width="1.8" stroke-linecap="round" />
                                <line x1="22" y1="2" x2="45" y2="2" stroke="var(--secondary-color, #EB268F)" stroke-width="1.8" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="srv-eyebrow-text px-3 text-uppercase">Why Choose Us</span>
                    </div>
                    
                    <h2>Why Choose Us?</h2>
                    
                    <div class="about-title-underline mb-4" aria-hidden="true">
                        <span class="line-pink"></span>
                        <span class="line-blue"></span>
                    </div>
                    
                    <p>
                        Choosing the best moving company is quite necessary for having a smooth experience during shifting. Our team at <strong><?= htmlspecialchars($company3) ?></strong> offers efficient services in the whole relocation process without making any compromise with the quality.
                    </p>
                    
                    <p>
                        We are a trustworthy name in the packing and moving industry due to our years of experience and many successfully relocated clients.
                    </p>
                    <span class="fs-6 mb-4 fw-bold">Hundreds of Satisfied Customers</span>
                    <p><?= $company3 ?> have helped in relocating the possessions of several clients. Customer satisfaction is always the main concern of all our services, and hence we have gained their trust because of our reliability and efficiency.</p>
                    
                    <div class="why-choose-cta mt-4">
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#qteModal" id="why-choose-cta-btn">
                            <span>Get Free Quotation</span>
                            <i class="bi bi-arrow-right-short ms-2" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Right Column: 5 Boxes stacked in 5 rows (col-lg-6 col-12) -->
            <div class="col-lg-6 col-12">
                <div class="why-choose-grid">
                    <!-- Reason 1 -->
                    <div class="why-choose-card">
                        <div class="why-choose-icon pink" aria-hidden="true">
                            <i class="bi bi-tag-fill"></i>
                        </div>
                        <div class="why-choose-text-wrap">
                            <span class="fw-bold fs-6">Transparent Pricing with No Hidden Charges</span>
                            <p>Clear Quotations without any hidden charges.</p>
                        </div>
                    </div>
                    
                    <!-- Reason 2 -->
                    <div class="why-choose-card">
                        <div class="why-choose-icon blue" aria-hidden="true">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="why-choose-text-wrap">
                            <span class="fw-bold fs-6">Trusted and Professional Moving Staff</span>
                            <p>Expert movers who would take care of packing, loading, transporting and unpacking all of your belongings.</p>
                        </div>
                    </div>
                    
                    <!-- Reason 3 -->
                    <div class="why-choose-card">
                        <div class="why-choose-icon green" aria-hidden="true">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <div class="why-choose-text-wrap">
                            <span class="fw-bold fs-6">High-Quality Packing Material</span>
                            <p>High-grade cartons and packing materials such as bubble wrap and foam sheets.</p>
                        </div>
                    </div>
                    
                    <!-- Reason 4 -->
                    <div class="why-choose-card">
                        <div class="why-choose-icon pink" aria-hidden="true">
                            <i class="bi bi-alarm-fill"></i>
                        </div>
                        <div class="why-choose-text-wrap">
                            <span class="fw-bold fs-6">Timely Pickups and Deliveries</span>
                            <p>Timely pick-ups and deliveries to help you with your schedule and make your move easy and convenient.</p>
                        </div>
                    </div>
                    
                    <!-- Reason 5 -->
                    <div class="why-choose-card">
                        <div class="why-choose-icon blue" aria-hidden="true">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <div class="why-choose-text-wrap">
                            <span class="fw-bold fs-6">Vehicle Transportation Services</span>
                            <p>Safe and secure transport of your cars and bikes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
