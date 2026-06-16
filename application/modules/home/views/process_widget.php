<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="process-section py-5 position-relative overflow-hidden">
    <div class="process-bg-grid process-bg-grid-left d-none d-lg-block">
        <svg width="80" height="120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="process-dot-pattern-left" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="#cbd5e1" opacity="0.35" />
            </pattern>
            <rect width="80" height="120" fill="url(#process-dot-pattern-left)" />
        </svg>
    </div>
    <div class="process-bg-grid process-bg-grid-right d-none d-lg-block">
        <svg width="80" height="120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="process-dot-pattern-right" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="#cbd5e1" opacity="0.35" />
            </pattern>
            <rect width="80" height="120" fill="url(#process-dot-pattern-right)" />
        </svg>
    </div>

    <div class="process-bg-decor process-bg-decor-left d-none d-xl-block">
        <svg width="220" height="90" viewBox="0 0 360 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0 80 C 100 80, 140 120, 220 115 C 280 110, 310 70, 340 85" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" stroke-dasharray="3 7" />
            <g transform="translate(340, 85)">
                <circle cx="0" cy="0" r="12" fill="var(--secondary-color)" />
                <path d="M -4 -5 C -6.2 -5 -8 -3.2 -8 -1 C -8 2 -4 6.2 -4 6.2 S 0 2 0 -1 C 0 -3.2 -1.8 -5 -4 -5 Z M -4 -2.2 C -4.7 -2.2 -5.2 -2.7 -5.2 -3.4 C -5.2 -4.1 -4.7 -4.6 -4 -4.6 C -3.3 -4.6 -2.8 -4.1 -2.8 -3.4 C -2.8 -2.7 -3.3 -2.2 -4 -2.2 Z" fill="#ffffff" transform="scale(1.3) translate(3.1, 0.8)" />
            </g>
        </svg>
    </div>

    <div class="process-bg-decor process-bg-decor-right d-none d-xl-block">
        <svg width="240" height="90" viewBox="0 0 380 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M 10 125 C 80 125, 140 125, 180 100 C 240 65, 275 10, 295 35 C 305 45, 295 65, 275 65 C 255 65, 255 45, 275 35 C 295 25, 335 20, 360 8" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" stroke-dasharray="3 7" />
            <g transform="translate(360, 8) rotate(20)">
                <path d="M14 9l-4.5-3.5H8v1.8l3 2.2V12l-3.5-1-2.5 1.5v.8l3-.3.7.8H10V14l4-1.2V9z" fill="var(--primary-color)" transform="scale(2.2) translate(-9, -8)" />
            </g>
        </svg>
    </div>

    <div class="container position-relative process-z2">
        <div class="section-header text-center mb-5">
            <div class="srv-eyebrow mb-3">
                <span class="process-heading-line left">
                    <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="2" x2="22" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                        <line x1="22" y1="2" x2="45" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <span class="srv-eyebrow-text px-3 d-inline-flex align-items-center">
                    OUR PROCESS 
                    <svg width="22" height="16" viewBox="0 0 24 18" fill="var(--secondary-color)" class="ms-2">
                        <path d="M19 8h-2V4c0-1.1-.9-2-2-2H3c-1.1 0-2 .9-2 2v9c0 1.1.9 2 2 2h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2c1.1 0 2-.9 2-2v-4l-3-4zM6 16.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm12 0c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                    </svg>
                </span>
                <span class="process-heading-line right">
                    <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="2" x2="22" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                        <line x1="22" y1="2" x2="45" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <h2 class="srv-main-title">A Smooth Move, <span class="highlight-pink-text">Every Step of the Way</span></h2>
            <p class="srv-subtitle mx-auto">We follow a streamlined process to ensure your move is hassle-free, safe and on time.</p>
        </div>

        <div class="row g-4 justify-content-center process-cards-row">
            <div class="col-xl-2 col-md-4 col-sm-6 col-6 d-flex position-relative">
                <div class="process-card w-100 pink text-center d-flex flex-column justify-content-between">
                    <div class="process-card-badge">01</div>
                    <div class="process-icon-wrap-outer">
                        <div class="process-icon-glow"></div>
                        <div class="process-icon-circle d-flex align-items-center justify-content-center">
                            <svg width="36" height="36" viewBox="0 0 48 48" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 40C12 33.3726 17.3726 28 24 28C30.6274 28 36 33.3726 36 40" />
                                <circle cx="24" cy="18" r="8" />
                                <path d="M14 18C14 12.4772 18.4772 8 24 8C29.5228 8 34 12.4772 34 18" />
                                <rect x="12" y="16" width="3" height="5" rx="1.5" fill="#ffffff" />
                                <rect x="33" y="16" width="3" height="5" rx="1.5" fill="#ffffff" />
                                <path d="M34 20c0 2-2 3.5-4 3.5" />
                                <rect x="29" y="3" width="13" height="11" rx="2.5" fill="#ffffff" stroke="none" />
                                <path d="M30 14l-2 3 3.5-3" fill="#ffffff" stroke="none" />
                                <path d="M32 7h7M32 10h5" stroke="var(--secondary-color)" stroke-width="2.2" />
                            </svg>
                        </div>
                    </div>
                    <div class="process-card-content flex-grow-1 d-flex flex-column justify-content-start mt-3 px-2">
                        <h3 class="process-card-title">Get a Free Quote</h3>
                        <p class="process-card-desc">Share your moving details with us and get a quick, no-obligation quote.</p>
                    </div>
                    <div class="process-card-stripe"></div>
                </div>
                <div class="process-card-arrow pink d-none d-xl-block">
                    <svg width="32" height="16" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0 8 H 24" stroke="var(--secondary-color)" stroke-width="2" stroke-linecap="round" stroke-dasharray="3 4" />
                        <path d="M 18 2 L 26 8 L 18 14" stroke="var(--secondary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6 col-6 d-flex position-relative">
                <div class="process-card w-100 blue text-center d-flex flex-column justify-content-between">
                    <div class="process-card-badge">02</div>
                    <div class="process-icon-wrap-outer">
                        <div class="process-icon-glow"></div>
                        <div class="process-icon-circle d-flex align-items-center justify-content-center">
                            <svg width="36" height="36" viewBox="0 0 48 48" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="13" y="10" width="22" height="31" rx="3" />
                                <path d="M19 10V6H29V10" />
                                <path d="M18 17h6M18 23h6M18 29h6M27 17h3M27 23h3" />
                                <rect x="27" y="27" width="13" height="13" rx="2" fill="var(--primary-color)" stroke="#ffffff" stroke-width="2.5" />
                                <path d="M33 27v13M27 33h13" />
                            </svg>
                        </div>
                    </div>
                    <div class="process-card-content flex-grow-1 d-flex flex-column justify-content-start mt-3 px-2">
                        <h3 class="process-card-title">Plan & Schedule</h3>
                        <p class="process-card-desc">We understand your requirements and schedule the best time for your move.</p>
                    </div>
                    <div class="process-card-stripe"></div>
                </div>
                <div class="process-card-arrow blue d-none d-xl-block">
                    <svg width="32" height="16" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0 8 H 24" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-dasharray="3 4" />
                        <path d="M 18 2 L 26 8 L 18 14" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6 col-6 d-flex position-relative">
                <div class="process-card w-100 green text-center d-flex flex-column justify-content-between">
                    <div class="process-card-badge">03</div>
                    <div class="process-icon-wrap-outer">
                        <div class="process-icon-glow"></div>
                        <div class="process-icon-circle d-flex align-items-center justify-content-center">
                            <svg width="36" height="36" viewBox="0 0 48 48" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M24 7L7 15.5L24 24L41 15.5L24 7Z" fill="rgba(255, 255, 255, 0.15)" />
                                <path d="M7 15.5V34L24 42.5V24L7 15.5Z" />
                                <path d="M41 15.5V34L24 42.5V24L41 15.5Z" />
                                <path d="M24 13L15.5 17L24 21L32.5 17L24 13Z" />
                                <path d="M24 24V42.5" />
                            </svg>
                        </div>
                    </div>
                    <div class="process-card-content flex-grow-1 d-flex flex-column justify-content-start mt-3 px-2">
                        <h3 class="process-card-title">Packing with Care</h3>
                        <p class="process-card-desc">Our experts pack your belongings using quality materials with great care.</p>
                    </div>
                    <div class="process-card-stripe"></div>
                </div>
                <div class="process-card-arrow green d-none d-xl-block">
                    <svg width="32" height="16" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0 8 H 24" stroke="var(--tertiary-color)" stroke-width="2" stroke-linecap="round" stroke-dasharray="3 4" />
                        <path d="M 18 2 L 26 8 L 18 14" stroke="var(--tertiary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6 col-6 d-flex position-relative">
                <div class="process-card w-100 pink text-center d-flex flex-column justify-content-between">
                    <div class="process-card-badge">04</div>
                    <div class="process-icon-wrap-outer">
                        <div class="process-icon-glow"></div>
                        <div class="process-icon-circle d-flex align-items-center justify-content-center">
                            <svg width="36" height="36" viewBox="0 0 48 48" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 11h26v22H5V11z" fill="rgba(255, 255, 255, 0.15)" />
                                <path d="M31 18h8l5 5v10H31V18z" />
                                <circle cx="14" cy="36" r="4.5" fill="#ffffff" stroke="none" />
                                <circle cx="34" cy="36" r="4.5" fill="#ffffff" stroke="none" />
                                <path d="M9 33h10M29 33h10" />
                                <path d="M36 18l3.5 4.5H31v-4.5h5z" fill="none" />
                            </svg>
                        </div>
                    </div>
                    <div class="process-card-content flex-grow-1 d-flex flex-column justify-content-start mt-3 px-2">
                        <h3 class="process-card-title">Safe Transportation</h3>
                        <p class="process-card-desc">We transport your items safely using our well-maintained vehicles.</p>
                    </div>
                    <div class="process-card-stripe"></div>
                </div>
                <div class="process-card-arrow pink d-none d-xl-block">
                    <svg width="32" height="16" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0 8 H 24" stroke="var(--secondary-color)" stroke-width="2" stroke-linecap="round" stroke-dasharray="3 4" />
                        <path d="M 18 2 L 26 8 L 18 14" stroke="var(--secondary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6 col-6 d-flex position-relative">
                <div class="process-card w-100 blue text-center d-flex flex-column justify-content-between">
                    <div class="process-card-badge">05</div>
                    <div class="process-icon-wrap-outer">
                        <div class="process-icon-glow"></div>
                        <div class="process-icon-circle d-flex align-items-center justify-content-center">
                            <svg width="36" height="36" viewBox="0 0 48 48" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="21" cy="11" r="4.5" />
                                <path d="M11 40V27l9-8 7 6 6-7" />
                                <rect x="26" y="24" width="13" height="13" rx="2" fill="var(--primary-color)" stroke="#ffffff" stroke-width="2.5" />
                                <path d="M32.5 24v13" />
                            </svg>
                        </div>
                    </div>
                    <div class="process-card-content flex-grow-1 d-flex flex-column justify-content-start mt-3 px-2">
                        <h3 class="process-card-title">Loading & Unloading</h3>
                        <p class="process-card-desc">Our team loads and unloads your belongings carefully and efficiently.</p>
                    </div>
                    <div class="process-card-stripe"></div>
                </div>
                <div class="process-card-arrow blue d-none d-xl-block">
                    <svg width="32" height="16" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0 8 H 24" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-dasharray="3 4" />
                        <path d="M 18 2 L 26 8 L 18 14" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-6 col-6 d-flex">
                <div class="process-card w-100 green text-center d-flex flex-column justify-content-between">
                    <div class="process-card-badge">06</div>
                    <div class="process-icon-wrap-outer">
                        <div class="process-icon-glow"></div>
                        <div class="process-icon-circle d-flex align-items-center justify-content-center">
                            <svg width="36" height="36" viewBox="0 0 48 48" fill="none" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 22v18h30V22" />
                                <path d="M5 22L24 6l19 16" fill="none" />
                                <rect x="18" y="29" width="10.5" height="11" rx="1.5" />
                                <circle cx="36" cy="34" r="8" fill="var(--tertiary-color)" stroke="#ffffff" stroke-width="2.5" />
                                <path d="M33 34.2l2 2 3.8-3.8" stroke="#ffffff" stroke-width="2.5" />
                            </svg>
                        </div>
                    </div>
                    <div class="process-card-content flex-grow-1 d-flex flex-column justify-content-start mt-3 px-2">
                        <h3 class="process-card-title">Settle In Happily</h3>
                        <p class="process-card-desc">We make sure everything is delivered safely so you can settle in with peace.</p>
                    </div>
                    <div class="process-card-stripe"></div>
                </div>
            </div>
        </div>

        <div class="process-bottom-banner mt-5">
            <div class="row g-0 align-items-center">
                <div class="col-lg-4 col-12 process-banner-left position-relative d-flex align-items-center">
                    <div class="banner-left-bg">
                        <svg viewBox="0 0 320 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="w-100 h-100">
                            <path d="M 0 0 H 250 C 250 20, 180 30, 180 60 C 180 90, 270 100, 280 120 H 0 Z" fill="var(--accent-color)" />
                            <path d="M 250 C 250 20, 180 30, 180 60 C 180 90, 270 100, 280 120" stroke="var(--secondary-color)" stroke-width="5.5" fill="none" />
                        </svg>
                    </div>
                    <div class="banner-left-watermark">
                        <svg viewBox="0 0 120 80" fill="#ffffff" opacity="0.06">
                            <rect x="5" y="25" width="15" height="3" rx="1.5" />
                            <rect x="0" y="35" width="22" height="3" rx="1.5" />
                            <rect x="8" y="45" width="12" height="3" rx="1.5" />
                            <path d="M30 20h50v35H30z" />
                            <path d="M80 28h15l10 10v17H80z" />
                            <path d="M83 31h10l5 7H83z" fill="var(--accent-color)" />
                            <circle cx="45" cy="58" r="8" />
                            <circle cx="85" cy="58" r="8" />
                        </svg>
                    </div>
                    <div class="banner-left-content position-relative z-3 py-4 ps-4">
                        <span class="banner-line-text text-white">WE MOVE MORE THAN</span>
                        <h4 class="banner-highlight-text my-1">BELONGINGS,</h4>
                        <span class="banner-line-text text-white">WE MOVE TRUST.</span>
                    </div>
                </div>

                <div class="col-lg-8 col-12 process-banner-right py-4 px-3 px-md-4">
                    <div class="row g-3 justify-content-between">
                        <div class="col-md-3 col-sm-6 col-12 d-flex align-items-start process-feature-item">
                            <div class="feature-icon-circle bg-secondary-theme">
                                <i class="bi bi-shield-fill-check text-white fs-6"></i>
                            </div>
                            <div class="feature-text-block ms-3">
                                <h5 class="feature-title">Trained & Verified Professionals</h5>
                                <p class="feature-desc">Experienced team to handle your move.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12 d-flex align-items-start process-feature-item">
                            <div class="feature-icon-circle bg-tertiary-theme">
                                <i class="bi bi-award-fill text-white fs-6"></i>
                            </div>
                            <div class="feature-text-block ms-3">
                                <h5 class="feature-title">Quality Packing Materials</h5>
                                <p class="feature-desc">We use premium packing materials for complete protection.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12 d-flex align-items-start process-feature-item">
                            <div class="feature-icon-circle bg-primary-theme">
                                <i class="bi bi-shield-fill-check text-white fs-6"></i>
                            </div>
                            <div class="feature-text-block ms-3">
                                <h5 class="feature-title">Safe & Secure Moving</h5>
                                <p class="feature-desc">Your belongings are 100% safe with us.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-12 d-flex align-items-start process-feature-item">
                            <div class="feature-icon-circle bg-secondary-theme">
                                <i class="bi bi-clock-fill text-white fs-6"></i>
                            </div>
                            <div class="feature-text-block ms-3">
                                <h5 class="feature-title">On Time, Every Time</h5>
                                <p class="feature-desc">Punctual service you can rely on.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
