<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Warehousing & Storage',
    'description' => 'Secure and clean household and business storage services. Features 24/7 CCTV monitoring and flexible short/long-term storage.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Warehousing & Storage']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/warehouse-storage.jpg') ?>" alt="Warehousing & Storage - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">24/7 Monitored Storage</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-camera-video-fill"></i>
                            <span class="highlight-val">24/7</span>
                            <p>CCTV Monitored</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-bug-fill"></i>
                            <span class="highlight-val">Pest</span>
                            <p>Controlled Space</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-calendar3"></i>
                            <span class="highlight-val">Flexible</span>
                            <p>Short &amp; Long Term</p>
                        </div>
                    </div>

                    <h2>Secure, Clean &amp; Climate-Controlled Warehouses</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we provide secure and clean warehousing facilities to store your household goods or business inventory. Whether you need short-term storage during a home renovation or long-term storage during an overseas assignment, we have the right solutions.
                    </p>
                    <p>
                        Our warehouses are equipped with CCTV surveillance cameras, fire prevention systems, and 24/7 security guards. We perform regular pest control treatments and maintain clean, dry conditions to protect your goods from moisture and dust.
                    </p>
                    <h2>How We Compare to Competitors</h2>
                    <p>Our secure warehousing solutions keep your goods safe for any duration:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Clean, dry, and moisture-controlled spaces.</li>
                                <li>Regular pest control treatments.</li>
                                <li>24/7 CCTV cameras and security guards.</li>
                                <li>Barcoded inventory tracking for easy retrieval.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Damp, unventilated spaces or open yards.</li>
                                <li>No pest control, risking termite damage.</li>
                                <li>No security cameras or gate logs.</li>
                                <li>Random piling of goods with no tracking.</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Our Secure Storage Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Inventory Packing</h4>
                            <p>We pack your items in heavy-duty cardboard boxes, wrapping furniture in stretch wrap to prepare them for long-term storage.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Safe Transport</h4>
                            <p>We load your belongings onto our enclosed container truck and transport them securely to our warehouse facility.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Allocated Storage</h4>
                            <p>Your items are placed in an allocated, clean storage space, catalogued under your unique customer ID.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>On-Demand Delivery</h4>
                            <p>When you are ready, notify us. We retrieve your items, load them, and deliver them directly to your new address.</p>
                        </div>
                    </div>
                    <h2>Storage Safety Guidelines</h2>
                    <p>Please review which items are accepted for storage at our facilities:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Accepted for Storage</h4>
                            <ul>
                                <li>Beds, sofas, dining tables, and wardrobes.</li>
                                <li>TVs, refrigerators, and washing machines.</li>
                                <li>Boxed books, clothes, and kitchenware.</li>
                                <li>Office furniture and document archives.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited Items</h4>
                            <ul>
                                <li>Perishable foods, fruits, or open liquids.</li>
                                <li>Flammable fuels, gas cans, or chemicals.</li>
                                <li>Illegal goods or hazardous materials.</li>
                                <li>Pets, birds, or live plants.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "We stored our home furniture with Ayodhya Packers for 3 months during our home renovation. When we received the furniture back, everything was clean, dry, and in perfect condition. Their warehouse security is top-notch!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">A</div>
                            <div class="user-name">
                                <h6>Amit Shah</h6>
                                <span>Delhi, NCR</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How secure is the storage warehouse?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Our warehouses feature 24/7 CCTV surveillance, fire prevention systems, double-lock gates, and security guards to keep your goods safe.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What is the minimum storage duration?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We offer flexible options with no lock-in periods. You can store your goods for as little as 1 week up to several months or years.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I access my stored items during the storage period?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. You can access your stored items during business hours by notifying us 24 to 48 hours in advance, allowing our staff to assist you.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'warehousing-and-storage']); ?>
            </div>
        </div>
    </div>
</section>
