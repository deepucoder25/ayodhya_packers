<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Loading & Unloading',
    'description' => 'Reliable loading and unloading services by specialized cargo handlers to ensure risk-free handling, loading and unloading of your valuable goods.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Loading & Unloading']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/gallery/img6.jpg') ?>" alt="Loading & Unloading - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Safety First Handling</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-check"></i>
                            <span class="highlight-val">100%</span>
                            <p>Safety Record</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-people-fill"></i>
                            <span class="highlight-val">Trained</span>
                            <p>Ground Riggers</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-gear-wide-connected"></i>
                            <span class="highlight-val">Modern</span>
                            <p>Handling Gear</p>
                        </div>
                    </div>

                    <h2>Professional Loading &amp; Unloading Services</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we know that many shifting damages happen during the physical lifting, loading, and unloading of cargo. Simply placing heavy items on a truck without proper balance can lead to structural damage and cargo shifts during transit.
                    </p>
                    <p>
                        Our team employs trained loaders who utilize cargo ramps, trolleys, lifting straps, and pulleys to handle your goods safely. We pack boxes systematically inside the truck container, ensuring heavy boxes sit at the bottom and fragile items are secured on top.
                    </p>
                    <h2>How We Compare to Competitors</h2>
                    <p>Our systematic ground handling ensures your items are protected throughout the move:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Trained crew specializing in manual cargo handling.</li>
                                <li>Use of hand trucks, cargo sliders, and pulleys.</li>
                                <li>Balanced weight distribution inside truck containers.</li>
                                <li>Use of protective furniture blankets and straps.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Untrained daily wage laborers without handles.</li>
                                <li>Manual lifting only, leading to drops.</li>
                                <li>Random stacking of boxes inside the truck.</li>
                                <li>No protective truck tie-downs or straps.</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Our Stacking &amp; Handling Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Weight Assessment</h4>
                            <p>We classify boxes by weight and fragility to determine their placement order inside the transport vehicle container.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Safe Handling Lift</h4>
                            <p>We use heavy-duty lifting straps and hand trucks to move items down corridors and stairs, preventing drywall scratches.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Systematic Stacking</h4>
                            <p>Heavy goods are placed on the floor, while lighter packages and fragile crates are stacked securely on top using dividers.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Secure Tie-Down</h4>
                            <p>The cargo is strapped to the truck walls to prevent cargo shifts, followed by a careful unloading process at your new address.</p>
                        </div>
                    </div>
                    <h2>Cargo Handling Guidelines</h2>
                    <p>Help us maintain a safe and damage-free loading operation:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Ready to Load</h4>
                            <ul>
                                <li>Double-taped heavy-duty cardboard boxes.</li>
                                <li>Wooden crates for fragile glassware.</li>
                                <li>Bubble-wrapped large furniture items.</li>
                                <li>Clearly labeled room boxes.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Unsafe to Load</h4>
                            <ul>
                                <li>Loose, unboxed kitchenware or books.</li>
                                <li>Open bottles, liquids, or chemicals.</li>
                                <li>Severely overstuffed, bulging boxes.</li>
                                <li>Flammable items or pressurized cans.</li>
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
                            "The loaders from Ayodhya Packers were extremely professional. They used trolleys and ramps to load our heavy refrigerator and wooden almirah without a single scratch on our floors. Excellent stacking inside the container!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">P</div>
                            <div class="user-name">
                                <h6>Prakash Rao</h6>
                                <span>Bangalore, Karnataka</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-lu-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you use loading equipment for heavy items?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-lu-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. We use hydraulic tailgates, hand trolleys, furniture dollies, ramp plates, and lifting harness belts to transport heavy appliances safely.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-lu-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How do you protect furniture during loading?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-lu-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We wrap all furniture in thick corrugated sheets and stretch wrap, and we use protective moving blankets inside the truck to prevent rubbing and scratches during transit.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-lu-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I hire loaders only without a truck?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-lu-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes, we offer flexible services. You can hire our experienced crew solely for packing, loading, or unloading tasks if you have arranged your own transport vehicle.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'loading-and-unloading']); ?>
            </div>
        </div>
    </div>
</section>
