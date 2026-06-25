<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="reviews-section py-5 position-relative overflow-hidden">
    <div class="reviews-bg-grid reviews-bg-grid-left d-none d-lg-block">
        <svg aria-hidden="true" width="80" height="120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="reviews-dot-pattern-left" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="#cbd5e1" opacity="0.35" />
            </pattern>
            <rect width="80" height="120" fill="url(#reviews-dot-pattern-left)" />
        </svg>
    </div>
    <div class="reviews-bg-grid reviews-bg-grid-right d-none d-lg-block">
        <svg aria-hidden="true" width="80" height="120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="reviews-dot-pattern-right" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="#cbd5e1" opacity="0.35" />
            </pattern>
            <rect width="80" height="120" fill="url(#reviews-dot-pattern-right)" />
        </svg>
    </div>

    <div class="reviews-bg-decor reviews-bg-decor-left d-none d-xl-block">
        <svg aria-hidden="true" width="220" height="90" viewBox="0 0 360 140" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0 80 C 100 80, 140 120, 220 115 C 280 110, 310 70, 340 85" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" stroke-dasharray="3 7" />
            <g transform="translate(340, 85)">
                <circle cx="0" cy="0" r="14" fill="var(--primary-color)" />
                <text x="-6" y="8" font-family="'Outfit', sans-serif" font-weight="900" font-size="24" fill="#ffffff">“</text>
            </g>
        </svg>
    </div>

    <div class="reviews-bg-decor reviews-bg-decor-right d-none d-xl-block">
        <svg aria-hidden="true" width="160" height="100" viewBox="0 0 160 100" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 75 C40 75, 45 55, 65 40 C85 25, 105 55, 125 40 C135 32, 140 30, 145 35" fill="none" stroke="var(--tertiary-color)" stroke-width="3" stroke-dasharray="5 5" stroke-linecap="round"/>
            <g transform="translate(135,35) rotate(-20)">
                <path d="M0 0 L18 4 L30 0 L18 -4 Z" fill="var(--tertiary-color)"/>
                <path d="M14 0 L6 18 L12 18 L18 2" fill="var(--tertiary-color)"/>
                <path d="M14 0 L6 -18 L12 -18 L18 -2" fill="var(--tertiary-color)"/>
                <path d="M8 0 L-2 8 L2 8 L10 1" fill="var(--tertiary-color)"/>
                <path d="M8 0 L-2 -8 L2 -8 L10 -1" fill="var(--tertiary-color)"/>
            </g>
        </svg>
    </div>

    <div class="container position-relative about-z2">
        <div class="section-header text-center mb-5">
            <div class="srv-eyebrow mb-3">
                <span class="reviews-heading-line left">
                    <svg aria-hidden="true" width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="2" x2="22" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                        <line x1="22" y1="2" x2="45" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <span class="srv-eyebrow-text px-3 d-inline-flex align-items-center">
                    TESTIMONIALS 
                    <svg aria-hidden="true" width="20" height="16" viewBox="0 0 24 24" fill="var(--primary-color)" class="ms-2">
                        <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z" />
                    </svg>
                </span>
                <span class="reviews-heading-line right">
                    <svg aria-hidden="true" width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="2" x2="22" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                        <line x1="22" y1="2" x2="45" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <h2 class="srv-main-title">What Our <span class="highlight-pink-text">Happy Customers</span> Say</h2>
            <p class="srv-subtitle mx-auto">Hear from our clients who have experienced our stress-free, professional packing and moving services.</p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-lg-4 d-flex">
                <div class="score-card w-100">
                    <div class="score-card-watermark d-none d-sm-block">
                        <svg aria-hidden="true" width="180" height="140" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <pattern id="score-card-dots" x="0" y="0" width="12" height="12" patternUnits="userSpaceOnUse">
                                <circle cx="2" cy="2" r="1" fill="#ffffff" opacity="0.08" />
                            </pattern>
                            <rect width="180" height="140" fill="url(#score-card-dots)" />
                        </svg>
                    </div>
                    <svg aria-hidden="true" class="score-card-bg-wave" viewBox="0 0 300 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0 30 C 80 65, 220 15, 300 30 L 300 120 L 0 120 Z" fill="var(--primary-color)" />
                    </svg>
                    <div class="score-card-content">
                        <div class="score-card-top">
                            <div class="score-header">
                                <div class="score-icon-circle">
                                    <i class="bi bi-star"></i>
                                </div>
                                <div class="score-header-text">
                                    <span class="score-header-title">Customer</span>
                                    <span class="score-header-subtitle">Satisfaction</span>
                                </div>
                            </div>
                            <div class="score-rating-display">
                                <span class="score-rating-num"><?= $ratingValue ?></span>
                                <span class="score-rating-max">/5</span>
                            </div>
                            <div class="score-stars-row">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="score-review-desc">Based on <?= $ratingCount ?> Reviews</p>
                        </div>
                        <div class="score-card-bottom">
                            <div class="score-footer-grid">
                                <div class="score-footer-col">
                                    <span class="col-partner">Google</span>
                                    <span class="col-rating">4.9</span>
                                    <div class="col-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="score-footer-col">
                                    <span class="col-partner">Facebook</span>
                                    <span class="col-rating">4.8</span>
                                    <div class="col-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="score-footer-col">
                                    <span class="col-partner">Trustpilot</span>
                                    <span class="col-rating">4.9</span>
                                    <div class="col-stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="reviews-slider-outer">
                    <button class="slider-nav-btn prev-btn" id="rev-prev-btn" aria-label="Previous review">
                        <i class="bi bi-chevron-left" aria-hidden="true"></i>
                    </button>
                    
                    <div class="reviews-slider-viewport">
                        <div class="reviews-slider-track" id="rev-slider-track">
                            
                            <div class="testimonial-card pink col-md-6 col-12 flex-shrink-0">
                                <div>
                                    <div class="card-top-row">
                                        <span class="card-quote-icon">“</span>
                                        <div class="card-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <p class="card-text-body">
                                            The team arrived on time and carefully packed up everything. The entire household moving process went smoothly with nothing being damaged on transit. I will not hesitate to refer them to anyone moving.
                                        </p>
                                    </div>
                                </div>
                                <div class="card-user-info">
                                    <div class="card-avatar-wrap">
                                        <svg aria-hidden="true" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="30" cy="30" r="30" fill="url(#avatar-grad-1)"/>
                                            <circle cx="30" cy="25" r="11" fill="#fed8cc"/>
                                            <path d="M18 20 C 18 14, 42 14, 42 20 C 42 14, 18 14, 18 20 Z" fill="#2d1c18"/>
                                            <path d="M16 48 C 16 38, 44 38, 44 48" fill="#e85b82" stroke="#fed8cc" stroke-width="1.5"/>
                                            <defs>
                                                <linearGradient id="avatar-grad-1" x1="0" y1="0" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0%" stop-color="#ffa0bd"/>
                                                    <stop offset="100%" stop-color="#ff608d"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="card-user-details">
                                        <h4 class="card-user-name">Rahul Mishra <i class="bi bi-patch-check-fill"></i></h4>
                                        <span class="card-user-loc"><i class="bi bi-geo-alt-fill"></i> Lucknow</span>
                                    </div>
                                </div>
                                <div class="card-bottom-stripe"></div>
                                <div class="card-floating-badge">
                                    <i class="bi bi-house-door-fill"></i>
                                </div>
                            </div>

                            <div class="testimonial-card blue col-md-6 col-12 flex-shrink-0">
                                <div>
                                    <div class="card-top-row">
                                        <span class="card-quote-icon">“</span>
                                        <div class="card-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <p class="card-text-body">
                                           I had some concerns regarding the transportation of my fragile furniture and kitchenware. But everything was taken care of efficiently by the team. Everything was delivered in the specified time and was organized properly. Highly impressed with their packing box shifting and logistics. They packed my fragile glass items with triple-layer bubble wraps. Truly professionals!
                                        </p>
                                    </div>
                                </div>
                                <div class="card-user-info">
                                    <div class="card-avatar-wrap">
                                        <svg aria-hidden="true" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="30" cy="30" r="30" fill="url(#avatar-grad-2)"/>
                                            <path d="M12 28 C 12 15, 48 15, 48 28 C 48 38, 44 48, 44 48 L 16 48 C 16 48, 12 38, 12 28 Z" fill="#2d1c18"/>
                                            <circle cx="30" cy="27" r="11" fill="#fed8cc"/>
                                            <path d="M19 22 C 22 17, 38 17, 41 22 C 43 25, 40 20, 30 20 C 20 20, 17 25, 19 22 Z" fill="#2d1c18"/>
                                            <path d="M19 22 C 19 22, 23 23, 25 26 C 25 26, 22 25, 19 22 Z" fill="#2d1c18"/>
                                            <path d="M41 22 C 41 22, 37 23, 35 26 C 35 26, 38 25, 41 22 Z" fill="#2d1c18"/>
                                            <path d="M16 48 C 16 39, 44 39, 44 48" fill="#0098DB" stroke="#fed8cc" stroke-width="1.5"/>
                                            <defs>
                                                <linearGradient id="avatar-grad-2" x1="0" y1="0" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0%" stop-color="#80d0ff"/>
                                                    <stop offset="100%" stop-color="#0098DB"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="card-user-details">
                                        <h4 class="card-user-name">Neha Singh <i class="bi bi-patch-check-fill"></i></h4>
                                        <span class="card-user-loc"><i class="bi bi-geo-alt-fill"></i> Ayodhya</span>
                                    </div>
                                </div>
                                <div class="card-bottom-stripe"></div>
                                <div class="card-floating-badge">
                                    <i class="bi bi-box-seam-fill"></i>
                                </div>
                            </div>

                            <div class="testimonial-card green col-md-6 col-12 flex-shrink-0">
                                <div>
                                    <div class="card-top-row">
                                        <span class="card-quote-icon">“</span>
                                        <div class="card-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <p class="card-text-body">
                                            All the office stuff, computers, furniture etc were packed and transported without disturbing our daily operations. They did everything efficiently.
                                        </p>
                                    </div>
                                </div>
                                <div class="card-user-info">
                                    <div class="card-avatar-wrap">
                                        <svg aria-hidden="true" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="30" cy="30" r="30" fill="url(#avatar-grad-3)"/>
                                            <circle cx="30" cy="26" r="11" fill="#fedcbe"/>
                                            <path d="M19 22 C 19 16, 41 16, 41 22 C 41 14, 19 14, 19 22 Z" fill="#1f2421"/>
                                            <path d="M19 22 C 22 18, 38 18, 41 22" stroke="#1f2421" stroke-width="3" stroke-linecap="round"/>
                                            <rect x="22" y="23" width="7" height="5" rx="2" stroke="#1f2421" stroke-width="1.5" fill="none"/>
                                            <rect x="31" y="23" width="7" height="5" rx="2" stroke="#1f2421" stroke-width="1.5" fill="none"/>
                                            <line x1="29" y1="25" x2="31" y2="25" stroke="#1f2421" stroke-width="1.5"/>
                                            <path d="M16 48 C 16 39, 44 39, 44 48" fill="#A9CF46" stroke="#fedcbe" stroke-width="1.5"/>
                                            <defs>
                                                <linearGradient id="avatar-grad-3" x1="0" y1="0" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0%" stop-color="#d4fc79"/>
                                                    <stop offset="100%" stop-color="#96e6a1"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="card-user-details">
                                        <h4 class="card-user-name">Amit Verma <i class="bi bi-patch-check-fill"></i></h4>
                                        <span class="card-user-loc"><i class="bi bi-geo-alt-fill"></i> Kanpur</span>
                                    </div>
                                </div>
                                <div class="card-bottom-stripe"></div>
                                <div class="card-floating-badge">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </div>

                            <div class="testimonial-card pink col-md-6 col-12 flex-shrink-0">
                                <div>
                                    <div class="card-top-row">
                                        <span class="card-quote-icon">“</span>
                                        <div class="card-stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <p class="card-text-body">
                                            They have provided me with an honest quote, and their employees were polite and helpful. Besides, the moving process was completed much sooner than I thought.
                                        </p>
                                    </div>
                                </div>
                                <div class="card-user-info">
                                    <div class="card-avatar-wrap">
                                        <svg aria-hidden="true" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="30" cy="30" r="30" fill="url(#avatar-grad-4)"/>
                                            <circle cx="30" cy="25" r="11" fill="#e0f2fe"/>
                                            <path d="M16 48 C 16 38, 44 38, 44 48" fill="#e85b82" stroke="#e0f2fe" stroke-width="1.5"/>
                                            <defs>
                                                <linearGradient id="avatar-grad-4" x1="0" y1="0" x2="60" y2="60" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0%" stop-color="#ffd3b6"/>
                                                    <stop offset="100%" stop-color="#ffaaa5"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="card-user-details">
                                        <h4 class="card-user-name">Priya Sharma <i class="bi bi-patch-check-fill"></i></h4>
                                        <span class="card-user-loc"><i class="bi bi-geo-alt-fill"></i> Prayagraj</span>
                                    </div>
                                </div>
                                <div class="card-bottom-stripe"></div>
                                <div class="card-floating-badge">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <button class="slider-nav-btn next-btn" id="rev-next-btn" aria-label="Next review">
                        <i class="bi bi-chevron-right" aria-hidden="true"></i>
                    </button>

                    <div class="slider-dots-container" id="rev-dots-track"></div>
                </div>
            </div>
        </div>

        <div class="reviews-bottom-features mx-auto mb-5">
            <div class="reviews-features-inner">
                <div class="feature-badge-wrap">
                    <div class="trust-badge-icon-wrap me-3">
                        <div class="trust-badge-icon-inner bg-secondary-theme">
                            <i class="bi bi-shield-check text-white"></i>
                        </div>
                    </div>
                    <div class="trust-badge-text">
                        <span class="trust-text-small">Trusted By</span>
                        <span class="trust-text-large highlight-pink-text">Thousands</span>
                        <span class="trust-text-small">of Happy Customers</span>
                    </div>
                </div>
                
                <div class="feature-vertical-divider d-none d-lg-block"></div>
                
                <div class="feature-items-grid">
                    <div class="feature-grid-item">
                        <div class="feature-circle-icon bg-secondary">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="feature-col-details">
                            <h5 class="feature-col-title">Safe &amp; Secure</h5>
                            <p class="feature-col-desc">100% Safety Assured</p>
                        </div>
                    </div>
                    
                    <div class="feature-grid-item">
                        <div class="feature-circle-icon bg-primary">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <div class="feature-col-details">
                            <h5 class="feature-col-title">Experienced<br>Professionals</h5>
                            <p class="feature-col-desc">Trained &amp; Verified<br>Experts</p>
                        </div>
                    </div>
                    
                    <div class="feature-grid-item">
                        <div class="feature-circle-icon bg-tertiary">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="feature-col-details">
                            <h5 class="feature-col-title">24/7 Support</h5>
                            <p class="feature-col-desc">We're Always<br>Here to Help</p>
                        </div>
                    </div>
                    
                    <div class="feature-grid-item">
                        <div class="feature-circle-icon bg-secondary">
                            <i class="bi bi-hand-thumbs-up"></i>
                        </div>
                        <div class="feature-col-details">
                            <h5 class="feature-col-title">On Time,<br>Every Time</h5>
                            <p class="feature-col-desc">Punctuality is Our<br>Promise</p>
                        </div>
                    </div>
                </div>
                
                <div class="feature-vertical-divider d-none d-lg-block"></div>
                
                <div class="feature-stat-wrap">
                    <div class="stat-watermark">
                        <svg aria-hidden="true" width="80" height="60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <pattern id="stat-dots" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                                <circle cx="1.5" cy="1.5" r="0.8" fill="var(--accent-color)" opacity="0.06" />
                            </pattern>
                            <rect width="80" height="60" fill="url(#stat-dots)" />
                        </svg>
                    </div>
                    <div class="moves-stat-num"><?= $total_moves ?></div>
                    <div class="moves-stat-lbl">Successful Moves</div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const view = document.querySelector('.reviews-slider-viewport');
    const dots = document.getElementById('rev-dots-track');
    const cards = document.querySelectorAll('.testimonial-card');
    if (!view || !cards.length) return;

    const getStep = () => cards[0].offsetWidth + 24;
    
    document.getElementById('rev-prev-btn').onclick = () => view.scrollBy({ left: -getStep(), behavior: 'smooth' });
    document.getElementById('rev-next-btn').onclick = () => view.scrollBy({ left: getStep(), behavior: 'smooth' });

    const updateDots = () => {
        if (!dots) return;
        const visible = window.innerWidth >= 768 ? 2 : 1;
        const count = Math.max(1, cards.length - visible + 1);
        dots.innerHTML = '';
        for (let i = 0; i < count; i++) {
            const d = document.createElement('div');
            d.className = 'slider-dot-item';
            d.onclick = () => view.scrollTo({ left: i * getStep(), behavior: 'smooth' });
            dots.appendChild(d);
        }
        updateActive();
    };

    const updateActive = () => {
        const idx = Math.round(view.scrollLeft / getStep());
        document.querySelectorAll('.slider-dot-item').forEach((d, i) => d.classList.toggle('active', i === idx));
        document.getElementById('rev-prev-btn').classList.toggle('disabled', view.scrollLeft <= 10);
        document.getElementById('rev-next-btn').classList.toggle('disabled', view.scrollLeft >= view.scrollWidth - view.clientWidth - 10);
    };

    view.onscroll = updateActive;
    window.onresize = updateDots;
    updateDots();
});
</script>
