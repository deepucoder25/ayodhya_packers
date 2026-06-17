<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Heavy Machinery Shifting',
    'description' => 'Safe and expert industrial relocation services. We handle heavy machinery, plant equipment, and factory inventory with specialized crane loaders and heavy trailers.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Heavy Machinery & Shifting']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/heavy-machinery.jpg') ?>" alt="Heavy Machinery Shifting - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Industrial Grade Logistics</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-gear-fill"></i>
                            <span class="highlight-val">500+</span>
                            <p>Plants Relocated</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-truck"></i>
                            <span class="highlight-val">Low-Bed</span>
                            <p>Specialist Trailers</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">Zero</span>
                            <p>On-Site Incidents</p>
                        </div>
                    </div>

                    <h2>Specialized Heavy Machinery &amp; Factory Relocation</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we possess the rigging technology, lifting hardware, and logistics expertise to handle industrial machinery relocation. Moving high-value printing presses, lathe machines, CNC centers, boilers, and turbine equipment requires certified professionals and safety engineering.
                    </p>
                    <p>
                        Our industrial crew includes certified rigging planners, crane operators, and mechanical technicians who disassemble, secure, and hoist heavy cargo. We assess warehouse layout structures, clearance heights, and route hurdles before loading to ensure a seamless shift.
                    </p>
                    <h2>How We Compare to Competitors</h2>
                    <p>Unlike standard transportation providers, we treat heavy plant assets with engineering-level care:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Heavy mobile cranes &amp; hydraulic rigging.</li>
                                <li>Low-bed and semi-low-bed heavy trailers.</li>
                                <li>Custom wooden reinforcement support frames.</li>
                                <li>On-site safety engineers supervising the move.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Manual crowbars and unsafe chain hoisting.</li>
                                <li>High-bed open trucks with clearance risks.</li>
                                <li>No custom structural supports for equipment.</li>
                                <li>Unsupervised daily laborers doing the heavy lifting.</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Our Industrial Relocation Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Rigging & Route Audit</h4>
                            <p>We review the weight specifications, draft structural hoist designs, inspect floor loading limits, and map road clearance routes.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Modular Dismantling</h4>
                            <p>Our technicians label electrical wiring, disconnect modular parts, and apply anti-humidity vacuum wraps to delicate machinery components.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Crane Loading & Lash</h4>
                            <p>We hoist the heavy machinery using chain-blocks and mobile cranes, loading it onto specialized multi-axle trailers with tie-down restraints.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Unloading & Alignment</h4>
                            <p>At the new plant, we unload the equipment, move it into position using heavy rollers/air-skates, and align it for structural erection.</p>
                        </div>
                    </div>
                    <h2>Machinery Shifting Safety Guidelines</h2>
                    <p>Please review which industrial items we relocate under standard safety procedures:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Relocated Equipment</h4>
                            <ul>
                                <li>CNC machinery and metal milling lathes.</li>
                                <li>Heavy printing presses and paper cutters.</li>
                                <li>Generators, boilers, and compressors.</li>
                                <li>Warehouse racking systems and forklifts.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited Items</h4>
                            <ul>
                                <li>Pressurized gas cylinders (non-purged).</li>
                                <li>Highly explosive chemicals or explosives.</li>
                                <li>Unsealed engine fuel tanks or raw fuel oils.</li>
                                <li>Hazardous toxic industrial waste materials.</li>
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
                            "We relocated our printing facility, including three major offset presses. Ayodhya Packers handled the heavy crane hoisting, custom framing, and low-bed transport flawlessly. Highly recommended for complex industrial relocations!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">G</div>
                            <div class="user-name">
                                <h6>Gagan Dey</h6>
                                <span>Siliguri, West Bengal</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hm-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you handle complete factory relocations?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hm-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. We provide complete factory and warehouse moving services, managing dismantling, heavy lifting, trailer transport, and installation at the new plant.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hm-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What heavy lifting equipment do you use?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hm-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Depending on requirements, we deploy mobile cranes (10-to-100 ton capacity), hydraulic forklifts, chain blocks, heavy winches, and jack systems.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hm-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you provide vacuum packing for machinery?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hm-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes, we provide specialized anti-moisture vacuum packing and heat-shrink wrap for electronic control panels and delicate components to prevent oxidation and moisture damage.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'heavy-machinery-and-shifting']); ?>
            </div>
        </div>
    </div>
</section>
