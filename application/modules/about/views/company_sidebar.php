<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<aside class="service-sidebar">
    <div class="sidebar-widget widget-nav-card mb-4">
        <div class="nav-card-header d-flex align-items-center gap-3 mb-3">
            <div class="nav-card-header-icon-wrap icon-purple">
                <i class="bi bi-people-fill"></i>
            </div>
            <div>
                <h3 class="nav-card-header-title">About Company</h3>
                <div class="nav-card-header-dashes">
                    <span class="dash-pink"></span>
                    <span class="dash-blue"></span>
                </div>
            </div>
        </div>
        <p class="nav-card-header-desc">
            Learn more about our company profile, core values, shifting reviews, and answers to common queries.
        </p>
        
        <div class="sidebar-nav-card-list">
            <?php
            $sidebar_links = [
                ['slug' => 'about-us',             'name' => 'About Us',             'icon' => 'bi-info-circle',       'color' => 'pink'],
                ['slug' => 'testimonials',         'name' => 'Testimonial',          'icon' => 'bi-chat-quote',        'color' => 'blue'],
                ['slug' => 'blog',                 'name' => 'Blog',                 'icon' => 'bi-journal-text',      'color' => 'green'],
                ['slug' => 'reviews',              'name' => 'Review',               'icon' => 'bi-star',              'color' => 'orange'],
                ['slug' => 'faqs',                 'name' => 'FAQs',                 'icon' => 'bi-question-circle',   'color' => 'purple'],
                ['slug' => 'packing-tips',         'name' => 'Packing Tips',         'icon' => 'bi-box-seam',          'color' => 'teal'],
                ['slug' => 'privacy-policy',       'name' => 'Privacy Policy',       'icon' => 'bi-shield-lock',       'color' => 'red'],
                ['slug' => 'terms-and-conditions', 'name' => 'Terms & Conditions',    'icon' => 'bi-file-earmark-text', 'color' => 'pink'],
            ];

            foreach ($sidebar_links as $link):
                $is_active = ($active_link === $link['slug']) ? 'active' : '';
            ?>
                <a href="<?= site_url($link['slug']) ?>" class="sidebar-nav-card-item d-flex align-items-center justify-content-between <?= $is_active ?>">
                    <div class="d-flex align-items-center gap-3">
                        <div class="nav-item-icon-wrap icon-<?= $link['color'] ?>">
                            <i class="bi <?= $link['icon'] ?>"></i>
                        </div>
                        <span class="nav-item-text"><?= $link['name'] ?></span>
                    </div>
                    <div class="nav-item-arrow-wrap">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="sidebar-widget widget-premium-cta mb-4">
        <div class="cta-accent-pink"></div>
        <div class="cta-accent-blue"></div>

        <img loading="lazy" src="<?= base_url('assets/images/city_page/support_call.png') ?>" alt="Support Agent" class="cta-support-agent">

        <div class="cta-header-group d-flex align-items-center justify-content-between mb-3">
            <img loading="lazy" src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?>" class="cta-brand-logo">
        </div>

        <h3 class="cta-premium-title">
            Need Help Moving with <span class="text-pink"><?= $company3 ?></span>?
        </h3>
        <div class="cta-underline"></div>
        <p class="cta-premium-desc">
            Get a free consultation from our moving experts. <span class="text-blue fw-semibold">Available 24/7.</span>
        </p>
        <div class="cta-support-boxes d-flex flex-column gap-3 mb-4">
            <a href="<?= $phonehtml ?>" class="cta-support-box d-flex align-items-center justify-content-between text-decoration-none">
                <div class="d-flex align-items-center gap-3">
                    <div class="cta-support-icon icon-pink d-flex align-items-center justify-content-center">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="cta-support-info">
                        <span class="cta-support-lbl">Call Support <span class="cta-badge-live">LIVE</span></span>
                        <strong class="cta-support-num"><?= $phone ?></strong>
                    </div>
                </div>
                <i class="bi bi-chevron-right cta-support-arrow text-pink"></i>
            </a>
            <?php if (isset($phone1) && !empty($phone1)): ?>
            <a href="<?= $phonehtml ?>" class="cta-support-box d-flex align-items-center justify-content-between text-decoration-none">
                <div class="d-flex align-items-center gap-3">
                    <div class="cta-support-icon icon-blue d-flex align-items-center justify-content-center">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="cta-support-info">
                        <span class="cta-support-lbl">Alternate Line</span>
                        <strong class="cta-support-num"><?= $phone ?></strong>
                    </div>
                </div>
                <i class="bi bi-chevron-right cta-support-arrow text-blue"></i>
            </a>
            <?php else: ?>
            <a href="<?= $phonehtml1?>" class="cta-support-box d-flex align-items-center justify-content-between text-decoration-none">
                <div class="d-flex align-items-center gap-3">
                    <div class="cta-support-icon icon-blue d-flex align-items-center justify-content-center">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div class="cta-support-info">
                        <span class="cta-support-lbl">Alternate Line</span>
                        <strong class="cta-support-num"><?= $phone1 ?></strong>
                    </div>
                </div>
                <i class="bi bi-chevron-right cta-support-arrow text-blue"></i>
            </a>
            <?php endif; ?>
        </div>
        <div class="cta-action-buttons d-flex gap-3">
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-footer btn-cta-whatsapp text-decoration-none d-flex align-items-center justify-content-center gap-2 flex-fill">
                <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
            <button type="button" class="btn-cta-footer btn-cta-quote d-flex align-items-center justify-content-center gap-2 flex-fill" data-bs-toggle="modal" data-bs-target="#qteModal">
                <i class="bi bi-clipboard-check"></i> Get Quote
            </button>
        </div>
    </div>
    <div class="sidebar-widget widget-what-you-get">
        <h4 class="widget-title">
            <i class="bi bi-gift-fill"></i> What You Get
        </h4>
        <div class="title-underline"></div>
        
        <div class="what-you-get-grid">
            <div class="what-you-get-card">
                <div class="icon-wrap icon-purple">
                    <i class="bi bi-heart-fill"></i>
                </div>
                <h5 class="grid-item-title">Safe Handling</h5>
                <p class="grid-item-desc">Your items are handled with utmost care</p>
            </div>
            <div class="what-you-get-card">
                <div class="icon-wrap icon-green">
                    <i class="bi bi-shield-check"></i>
                </div>
                <h5 class="grid-item-title">Transit Insurance</h5>
                <p class="grid-item-desc">Full insurance for complete peace of mind</p>
            </div>
            <div class="what-you-get-card">
                <div class="icon-wrap icon-orange">
                    <i class="bi bi-currency-rupee"></i>
                </div>
                <h5 class="grid-item-title">Affordable Rates</h5>
                <p class="grid-item-desc">Best pricing with no hidden charges</p>
            </div>
            <div class="what-you-get-card">
                <div class="icon-wrap icon-blue">
                    <i class="bi bi-clock-fill"></i>
                </div>
                <h5 class="grid-item-title">On-Time Delivery</h5>
                <p class="grid-item-desc">We value your time and deliver on time</p>
            </div>
            <div class="what-you-get-card">
                <div class="icon-wrap icon-red">
                    <i class="bi bi-headset"></i>
                </div>
                <h5 class="grid-item-title">24/7 Support</h5>
                <p class="grid-item-desc">Our support team is always here to help</p>
            </div>
            <div class="what-you-get-card">
                <div class="icon-wrap icon-teal">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h5 class="grid-item-title">Expert Team</h5>
                <p class="grid-item-desc">Experienced and trained professionals</p>
            </div>
        </div>
    </div>
</aside>
