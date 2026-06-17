<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Car Transportation',
    'description' => 'Secure car shifting and carrier services using specialized car shipping trailers and enclosed containers to deliver your vehicle damage-free.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Car Transportation']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/car-transportation.jpg') ?>" alt="Car Shifting Services - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">100% Insured Shifting</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">12K+</span>
                            <p>Cars Delivered</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-truck"></i>
                            <span class="highlight-val">Enclosed</span>
                            <p>Car Carrier Fleet</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-patch-check-fill"></i>
                            <span class="highlight-val">0%</span>
                            <p>Damage History</p>
                        </div>
                    </div>

                    <h2>Elite Car Carrier Services in India</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we recognize that your car is more than just a vehicle—it represents a major lifestyle asset. Moving it across states requires a specialized shipping infrastructure that ensures scratch-free transit and complete protection from weather, dust, and highway debris.
                    </p>
                    <p>
                        We operate a dedicated fleet of customized multi-car carriers and single-vehicle enclosed container trucks. Your car is securely loaded, strapped, and monitored throughout the journey, providing you with maximum peace of mind.
                    </p>
                    <h2>How We Compare to Competitors</h2>
                    <p>Unlike standard cargo transporters, we manage car relocation through strict, safety-first procedures:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Enclosed, dust-proof container carriers.</li>
                                <li>Specialized wheel-lock tie-down harnesses.</li>
                                <li>Pre-car-loading detailed condition reporting.</li>
                                <li>Full transit insurance with prompt claim support.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Open trucks exposed to rain, dust, and rocks.</li>
                                <li>Rope ties that can damage the car bumper.</li>
                                <li>No formal vehicle condition documentation.</li>
                                <li>No formal transit insurance coverage.</li>
                            </ul>
                        </div>
                    </div>
                    <h2>Our Car Relocation Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Exterior Inspection</h4>
                            <p>Our specialists perform a comprehensive exterior inspection, log existing scratches on a checklist, and collect copies of RC and car insurance.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Safe Ramp Loading</h4>
                            <p>Your vehicle is driven up a low-angle ramp into the carrier, securing the chassis to prevent bouncing or sliding on road curves.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Enclosed Transit</h4>
                            <p>We transport your vehicle inside sealed, high-security containers, shielding it from high winds, highway rocks, rain, and road dirt.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Doorstep Delivery</h4>
                            <p>The vehicle is unloaded safely at your new home. Together, we verify the delivery condition checklist to confirm scratch-free arrival.</p>
                        </div>
                    </div>
                    <h2>Vehicle Shifting Safety Guidelines</h2>
                    <p>Please review what items can be loaded inside the vehicle during transport:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Acceptable Items</h4>
                            <ul>
                                <li>Family sedans, hatchbacks, and SUVs.</li>
                                <li>Luxury cars and electric vehicles.</li>
                                <li>Vehicle toolkits, spare tires, and jacks.</li>
                                <li>Quarter tank of fuel (for loading/unloading).</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited Items</h4>
                            <ul>
                                <li>Personal luggage, clothes, and boxes in the trunk.</li>
                                <li>Valuable jewelry, documents, or laptop bags.</li>
                                <li>Combustible gas cans, liquids, or loose fuel.</li>
                                <li>Perishable foods or plants inside the car.</li>
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
                            "I shipped my brand new SUV from Kolkata to Delhi. I was very nervous, but Ayodhya Packers used an enclosed carrier to deliver it completely scratch-free and on time. Their checklist documentation was very detailed and professional!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">D</div>
                            <div class="user-name">
                                <h6>Dilip Singh</h6>
                                <span>Lucknow, Uttar Pradesh</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How is my car loaded onto the truck?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We use specialized hydraulic lifts or gentle ramps to drive the vehicle into our enclosed car container trailers safely.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do I need to empty the car's fuel tank before transport?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    No, but we recommend keeping the fuel level at about a quarter (25%) of the tank capacity to minimize weight while allowing driving during loading/unloading.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents are required for shipping my car?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    You need to submit copies of the Registration Certificate (RC), valid Car Insurance policy, pollution certificate, and the owner's Government ID (Aadhaar or PAN card).
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'car-transportation']); ?>
            </div>
        </div>
    </div>
</section>
