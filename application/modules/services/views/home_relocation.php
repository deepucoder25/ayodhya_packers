<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Home Relocation',
    'description' => 'Hassle-free household shifting and home relocation services. Safe and smooth door-to-door household moving at affordable rates.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Home Relocation']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/gallery/img8.jpg') ?>" alt="Home Relocation Shifting - <?= $company3 ?>" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Door-to-Door Safe Relocation</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-house-fill"></i>
                            <span class="highlight-val">12K+</span>
                            <p>Homes Relocated</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-person-badge-fill"></i>
                            <span class="highlight-val">Professional</span>
                            <p>Move Coordinator</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-box-seam-fill"></i>
                            <span class="highlight-val">Double-Wall</span>
                            <p>Safe Packaging</p>
                        </div>
                    </div>

                    <h2>Reliable and Stress-Free Household Relocation Services</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we recognize that moving your home is not just about moving boxes—it means transporting your memories and valuable household possessions. From delicate kitchenware and expensive smart TVs to heavy wooden beds and almirahs, every item demands specific care.
                    </p>
                    <p>
                        We handle your home relocation systematically. Our trained team manages wrapping, loading, transport, and unloading. We also deploy on-site carpenters to handle furniture dismantling and reassembly, ensuring a seamless, worry-free moving experience for your family.
                    </p>
                    <h2>How We Compare to Competitors</h2>
                    <p>Our home relocation services are designed around safety, convenience, and transparency:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Complete door-to-door packing and unpacking.</li>
                                <li>Double-wall cardboard cartons and bubble wrap.</li>
                                <li>Furniture dismantling and assembly by experts.</li>
                                <li>Dedicated move manager supervising on-site.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Basic transport only, without packing support.</li>
                                <li>No surface protection for furniture and finishes.</li>
                                <li>No carpentry support for beds or almirahs.</li>
                                <li>Unsupervised daily laborers with no manager.</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Our Household Moving Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Pre-Move Survey</h4>
                            <p>We review the volume of your goods, document fragile items, and plan the required packing supplies and truck size.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Specialized Packing</h4>
                            <p>Our team wraps furniture in foam padding, packs kitchenware in bubble wrap, and disassembles bed frames.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Secure Loading</h4>
                            <p>We stack your goods securely inside our enclosed container truck, ensuring weight is balanced to prevent shifting.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Unpacking &amp; Setup</h4>
                            <p>We unload your belongings room-by-room, reassemble the furniture, and help place heavy items where you want them.</p>
                        </div>
                    </div>
                    <h2>Home Shifting Safety Guidelines</h2>
                    <p>Please review which items are accepted for packing and transport:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Standard Household Items</h4>
                            <ul>
                                <li>Beds, sofas, dining tables, and almirahs.</li>
                                <li>TVs, refrigerators, and washing machines.</li>
                                <li>Kitchen utensils, crockery, and dry groceries.</li>
                                <li>Clothes, books, linens, and suitcases.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited Items</h4>
                            <ul>
                                <li>Inflammable fuels, gas cans, or fireworks.</li>
                                <li>Gold, silver, diamonds, jewelry, or cash.</li>
                                <li>Original property deeds, certificates, or IDs.</li>
                                <li>Open liquids or leaking oils.</li>
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
                            "Shifting our 3BHK flat was extremely smooth. The crew from Ayodhya Packers arrived on time, wrapped everything in double-walled boxes, and reassembled all the beds at our new house. Excellent, stress-free home relocation!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">R</div>
                            <div class="user-name">
                                <h6>Rajesh Gupta</h6>
                                <span>Delhi, NCR</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hr-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How many days in advance should I book my home move?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hr-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We recommend booking at least 5 to 7 days in advance to secure the moving date and allow proper coordination of packing supplies.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hr-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you help in dismantling and reassembling beds?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hr-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. Our team includes professional carpenters who disassemble double beds, almirahs, and dining tables, and reassemble them at your new home.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hr-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How do you transport fragile kitchen items?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hr-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    All plates, bowls, and glassware are wrapped individually in bubble wrap and packed inside sturdy carton boxes. We label these boxes as FRAGILE to ensure they are handled with care.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'home-relocation']); ?>
            </div>
        </div>
    </div>
</section>
