<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Packing & Moving',
    'description' => 'Premium packing materials and expert handling for scratch-free, water-resistant, and completely safe relocation of your valuable belongings.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Packing & Moving']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/gallery/img9.jpg') ?>" alt="Packing & Moving - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Premium Multi-Layer Wrapping</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-box-seam"></i>
                            <span class="highlight-val">30+ Yrs</span>
                            <p>Moving Legacy</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">Multi-Layer</span>
                            <p>Export Packaging</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-check-circle-fill"></i>
                            <span class="highlight-val">100%</span>
                            <p>Transit Secured</p>
                        </div>
                    </div>

                    <h2>High-End Packing &amp; Moving Services</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we know that the safety of your move is determined by the quality of the packing. Simply bundling items inside cardboard boxes is not enough. Relocating requires specialized wraps to protect items from moisture, dust, road vibrations, and highway bumps.
                    </p>
                    <p>
                        We use premium packaging materials including double-walled corrugated boxes, air-bubble wraps, foam sheets, edge guards, and stretch film. Our crew is trained in custom-wrapping delicate glassware, electronics, and polished wooden furniture.
                    </p>
                    <h2>How We Compare to Competitors</h2>
                    <p>Our premium packing methods ensure your goods are protected against transit risks:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Multi-layer packing with bubble wrap and stretch film.</li>
                                <li>Heavy-duty double-walled corrugated boxes.</li>
                                <li>Custom wooden crates for fragile glassware and TV.</li>
                                <li>Waterproof tapes and moisture-proof packing.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Single-layer newspaper or thin plastic wrap.</li>
                                <li>Thin, recycled boxes that collapse easily.</li>
                                <li>No specialized wooden crating for delicate items.</li>
                                <li>Standard tape that peels off in hot weather.</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Our Systematic Packing Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Sorting &amp; Plan</h4>
                            <p>We sort items by size and fragility, preparing the correct volume of bubble wrap, boxes, and protective corner guards.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Multi-Layer Wrap</h4>
                            <p>We wrap fragile glassware in bubble wrap, cover furniture with corrugated sheets, and apply stretch wrap to prevent dust and moisture.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Padded Box Packing</h4>
                            <p>We pack items in double-walled boxes, placing heavy items at the bottom and adding foam padding to fill empty spaces.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Sealing &amp; Inventory</h4>
                            <p>We seal all boxes with heavy-duty tape, label them by room, and draft a checklist for tracking during transport.</p>
                        </div>
                    </div>
                    <h2>Packing Safety Guidelines</h2>
                    <p>Please review which household items are packed by our moving specialists:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Standard Cargo Items</h4>
                            <ul>
                                <li>Kitchenware, crockery, and fragile glass.</li>
                                <li>Refrigerators, washing machines, and TVs.</li>
                                <li>Beds, wardrobes, sofas, and dining sets.</li>
                                <li>Clothing, books, toys, and linens.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited Items</h4>
                            <ul>
                                <li>Kerosene, gasoline, cylinders, or matches.</li>
                                <li>Precious gold, diamonds, jewelry, or cash.</li>
                                <li>Firearms, bullets, or explosive chemicals.</li>
                                <li>Corrosive acids or liquid paint cans.</li>
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
                            "The packing crew was outstanding. They wrapped our glassware, chinaware, and smart TV with care. Not a single item was broken or scratched during our long-distance shift. Truly professional packing!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">R</div>
                            <div class="user-name">
                                <h6>Rohtash Kumar</h6>
                                <span>Patna, Bihar</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What materials do you use for packing?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We use high-quality bubble wrap, corrugated sheets, heavy-duty carton boxes, stretch wrap, foam sheets, and strong adhesive tape.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you pack fragile items separately?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. Delicate glassware, mirrors, electronics, and showpieces are wrapped in multi-layer bubble wrap and packed in specialized boxes with fragile labels.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I pack my personal documents and gold myself?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes, we strongly recommend that customers personally pack and carry high-value items like gold, jewelry, personal laptops, cash, and critical legal documents.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'packing-and-moving']); ?>
            </div>
        </div>
    </div>
</section>
