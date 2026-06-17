<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'International Shifting',
    'description' => 'Global overseas relocation services by specialized sea container shipping and air cargo logistics, managed with comprehensive customs clearance support.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'International Shifting']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <!-- 1. Hero Cover -->
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/international-moving.jpg') ?>" alt="International Shifting - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Global Relocation Partner</span>
                    </div>

                    <!-- 2. Highlights Row -->
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-globe"></i>
                            <span class="highlight-val">80+</span>
                            <p>Countries Served</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-file-earmark-text"></i>
                            <span class="highlight-val">Customs</span>
                            <p>Clearance Support</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-ship-cargo"></i>
                            <span class="highlight-val">Sea/Air</span>
                            <p>Cargo Logistics</p>
                        </div>
                    </div>

                    <h2>Seamless International Shifting &amp; Sea Cargo Services</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we take the complexity out of moving across borders. Relocating to a new country involves navigating international shipping laws, organizing sea cargo container space, managing air freight for immediate assets, and clearing customs paperwork.
                    </p>
                    <p>
                        We operate in partnership with leading global shipping lines and international logistics networks to deliver a smooth, door-to-door relocation service. We handle the paperwork, export-grade wooden crating, and terminal handling to protect your goods at every step.
                    </p>

                    <!-- 3. Shifting Comparison Grid -->
                    <h2>How We Compare to Competitors</h2>
                    <p>Moving overseas requires specialized packing and customs coordination that standard shippers cannot offer:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Export-grade wooden crates and moisture barriers.</li>
                                <li>Full container (FCL) &amp; shared container (LCL) options.</li>
                                <li>End-to-end customs clearance handling and filing.</li>
                                <li>Door-to-door delivery with international partner networks.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Standard cardboard boxes with minimal wrapping.</li>
                                <li>Standard freight options without consolidation.</li>
                                <li>No assistance with international customs clearance.</li>
                                <li>Port-to-port delivery only (leaving you to organize unloading).</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 4. Core Process Cards Timeline -->
                    <h2>Our International Relocation Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Global Audit &amp; Plan</h4>
                            <p>We assess the volume of your goods, select between sea and air cargo options, and review the customs regulations of the destination country.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Export-Grade Packing</h4>
                            <p>Our specialists wrap items in anti-moisture material, build reinforced wooden crates for fragile goods, and catalog a detailed export inventory list.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Customs &amp; Shipping</h4>
                            <p>We transport your items to the port, manage custom documentation clearance, and load them onto the container ship or cargo plane.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Overseas Delivery</h4>
                            <p>Our global delivery partner manages customs clearance at the destination port and delivers your goods safely to your new international home.</p>
                        </div>
                    </div>

                    <!-- 5. Permitted vs Prohibited Checklist -->
                    <h2>International Shifting Safety Guidelines</h2>
                    <p>Ensure you comply with international cargo shipping regulations:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Acceptable Items</h4>
                            <ul>
                                <li>Household furniture and room fixtures.</li>
                                <li>Clothes, books, and kitchenware.</li>
                                <li>Standard non-hazardous electrical appliances.</li>
                                <li>Items with valid purchase receipts.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited Items</h4>
                            <ul>
                                <li>Seeds, plants, soil, or organic agricultural goods.</li>
                                <li>Unsealed liquids, chemicals, or aerosols.</li>
                                <li>Firearms, ammunition, or fireworks.</li>
                                <li>Precious metals, cash, and high-value legal documents.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 6. Client Review Slice -->
                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "We relocated our entire household from India to the UK. Ayodhya Packers handled the heavy wooden crating, container loading, and customs documentation perfectly. Our items arrived at our doorstep in London without a scratch!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">S</div>
                            <div class="user-name">
                                <h6>Sanjay Sen</h6>
                                <span>Kolkata, West Bengal</span>
                            </div>
                        </div>
                    </div>

                    <!-- 7. FAQs Accordion -->
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-it-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How long does international sea shipping take?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-it-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Depending on the destination country, sea freight transit generally ranges from 30 to 60 days, while air freight takes about 5 to 10 days.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-it-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you handle customs clearance at the destination port?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-it-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. Through our international network of moving partners, we coordinate customs documentation, clearance, and port handling at both origin and destination.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-it-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What is the difference between FCL and LCL container shipping?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-it-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    FCL (Full Container Load) means you book an entire container for your goods only, while LCL (Less than Container Load) means your goods share container space with other cargo, which is more cost-effective for smaller volumes.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'international-transportation']); ?>
            </div>
        </div>
    </div>
</section>
