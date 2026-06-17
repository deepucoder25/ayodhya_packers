<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Bike Transportation',
    'description' => 'Secure bike shifting and motorcycle carrier services using specialized multi-layer protective packing and enclosed containers to deliver your two-wheeler damage-free.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Bike Transportation']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/gallery/img1.jpg') ?>" alt="Bike Shifting Services - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">100% Insured Shifting</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-bicycle"></i>
                            <span class="highlight-val">15K+</span>
                            <p>Bikes Delivered</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-box-seam-fill"></i>
                            <span class="highlight-val">Multi-Layer</span>
                            <p>Premium Packing</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">0%</span>
                            <p>Damage History</p>
                        </div>
                    </div>

                    <h2>Safe and Professional Two-Wheeler Shifting Services</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we understand that your motorcycle or scooter is a highly valued personal asset. Moving it between states or cities requires specialized handling, high-quality protective wrapping, and structured carrier vehicles to prevent scratches, dents, and mechanical damage.
                    </p>
                    <p>
                        We use thick bubble wraps, foam sheet paddings, and durable corrugated layers to completely isolate the engine body, handlebars, mirrors, and exhaust pipe. Your vehicle is safely loaded onto specialized enclosed carrier trailers and held securely with heavy-duty wheel chocks and tie-down straps for smooth transit.
                    </p>
                    <h2>How We Compare to Competitors</h2>
                    <p>Unlike standard cargo transporters, we manage bike relocation through safety-focused procedures:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Multi-layer custom bubble and foam wrap.</li>
                                <li>Specialized wheel clamps and tie-down anchors.</li>
                                <li>Pre-shifting vehicle condition reports.</li>
                                <li>Full transit insurance against road hazards.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Open trucks exposing bikes to rain and highway dust.</li>
                                <li>Coarse ropes that scratch paint and damage mirrors.</li>
                                <li>No formal vehicle condition checklist.</li>
                                <li>No transit insurance coverage for the bike.</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Our Bike Relocation Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Condition Inspection</h4>
                            <p>We document your bike's pre-load condition, note existing scratches, log fuel levels, and verify vehicle registration papers (RC and Insurance).</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Multi-Layer Wrapping</h4>
                            <p>Our packaging experts wrap mirrors, indicators, handles, and painted body structures using high-density bubble wrap and cardboard sheets.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Secure Trailer Loading</h4>
                            <p>The bike is loaded inside a high-security enclosed vehicle carrier, clamped at the wheels, and strapped down to prevent movement.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Doorstep Delivery</h4>
                            <p>We unload your bike at your new residence, conduct a joint inspection check, and hand over the keys scratch-free.</p>
                        </div>
                    </div>
                    <h2>Bike Shifting Safety Guidelines</h2>
                    <p>Please review what items and steps are necessary prior to loading:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Recommended Steps</h4>
                            <ul>
                                <li>Keep fuel tank at minimum (10% to 15%).</li>
                                <li>Provide clear copies of RC and Insurance.</li>
                                <li>Remove helmets and keys for separate carriage.</li>
                                <li>Lock the steering handle during transport.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited Actions</h4>
                            <ul>
                                <li>Leaving personal baggage inside dickey/seat.</li>
                                <li>Shipping vehicles with full fuel tanks.</li>
                                <li>Leaving high-value original files inside bike box.</li>
                                <li>Shipping keys or remote tags attached to the vehicle.</li>
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
                            "I shipped my sports bike from Mumbai to Pune. The packaging was top-notch with bubble wraps and cardboard sheets. Delivered in perfect condition without a single mark on the fuel tank. Highly recommended!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">A</div>
                            <div class="user-name">
                                <h6>Anand Sharma</h6>
                                <span>Indore, Madhya Pradesh</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bk-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How is my bike protected from scratches?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bk-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We use three layers of protective wrapping: first a foam wrap, followed by heavy-duty bubble wrap, and finally a sturdy corrugated sheet outer layer to shield all sensitive parts.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bk-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Is transit insurance mandatory for bike shipping?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bk-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    While optional, we strongly recommend taking transit insurance. It covers financial liabilities in case of unforeseen road hazards or collision damage during transit.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bk-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I transport my bike with a full tank of fuel?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bk-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    No, for safety regulations, we require the fuel tank to be almost empty (only about 1-2 liters left) to prevent leakage and fire hazards inside the carrier.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'bike-transportation']); ?>
            </div>
        </div>
    </div>
</section>
