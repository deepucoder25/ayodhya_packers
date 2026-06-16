<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Heavy Machinery & Shifting',
    'description' => 'Safe and expert industrial relocation services. We handle heavy machinery, plant equipment, and factory inventory with specialized crane loaders and heavy trailers.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Heavy Machinery & Shifting']
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
                    <h2 class="service-section-title">Specialist Heavy Machinery &amp; Industrial Shifting Services</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we have the mechanical expertise and logistics capacity to handle heavy machinery and complete factory relocations. Shifting industrial machinery, lathes, milling machines, boilers, and CNC machines requires proper safety engineering, lifting gear, and specialized trailers.
                        </p>
                        <p>
                            We employ certified project managers, engineers, crane operators, and heavy-lifters to manage your relocation. We inspect structural floor capacities, clearance heights, and route hurdles before starting the job.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/office-relocation-services.jpg') ?>" alt="heavy machinery shifting" class="img-fluid rounded my-3 w-100">
                        <p>
                            We offer heavy-duty custom wooden packing, vacuum sealing, and anti-moisture wrapping to protect sensitive industrial parts and control panels against rust and travel debris.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Machinery Shifting Process</h2>
                    <p class="text-muted">How we execute complex industrial relocations:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Industrial Audit</h4>
                            <p>We audit the industrial site, map machinery weight specifications, check dimensions, and lay out lifting cranes and routes.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Machinery Dismantling</h4>
                            <p>Our mechanical crew safely dismantles modular machinery components, cataloguing all parts and wiring connections carefully.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Crane Loading & Rigging</h4>
                            <p>We use mobile cranes, fork-lifts, and chain-blocks to hoist the heavy machinery and load it securely onto flat-bed or hydraulic trailers.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Safe Transit & Erection</h4>
                            <p>After navigating safely to the new site, we unload, place, align, and help erect the machinery in its designated slot.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-gear-fill"></i></div>
                            <div class="choose-content">
                                <h5>Specialized Cranes & Lifters</h5>
                                <p>Access to mobile cranes, forklifts, hydraulic jacks, and rigs.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-box-fill"></i></div>
                            <div class="choose-content">
                                <h5>Custom Heavy Wood Packing</h5>
                                <p>Customized wooden pallets and heavy reinforcement frames protect items.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-truck"></i></div>
                            <div class="choose-content">
                                <h5>Flat-Bed & Low-Bed Trailers</h5>
                                <p>Specialized heavy transport trailers handle oversized dimensions easily.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-person-fill-gear"></i></div>
                            <div class="choose-content">
                                <h5>Safety Engineers & Supervisor</h5>
                                <p>All industrial moves are supervised by safety engineers for zero accidents.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Client Review Slice -->
                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "We shifted our entire printing press factory setup including 3 heavy offset printing presses. Ayodhya Packers handled the heavy lifting cranes, dismantling, and transport beautifully. Everything was re-erected without a glitch!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">G</div>
                            <div class="user-name">
                                <h6>Gagan Dey</h6>
                                <span>Siliguri, West Bengal</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hm-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you handle complete factory relocations?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hm-1" class="collapse">
                                <div class="faq-card-body">
                                    Yes. We provide complete factory and warehouse moving services, managing dismantling, heavy lifting, trailer transport, and installation at the new plant.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hm-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What heavy lifting equipment do you use?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hm-2" class="collapse">
                                <div class="faq-card-body">
                                    Depending on requirements, we deploy mobile cranes (10-to-100 ton capacity), hydraulic forklifts, chain blocks, heavy winches, and jack systems.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-hm-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you provide vacuum packing for machinery?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-hm-3" class="collapse">
                                <div class="faq-card-body">
                                    Yes, we provide specialized anti-moisture vacuum packing and heat-shrink wrap for electronic control panels and delicate components to prevent oxidation and moisture damage.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'heavy-machinery-and-shifting']); ?>
            </div>
        </div>
    </div>
</section>
