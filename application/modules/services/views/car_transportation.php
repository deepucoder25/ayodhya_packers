<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
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

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Secure & Professional Car Carrier Services in India</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we understand that your car is one of your most valuable assets. Shifting it to a new city requires a service that guarantees absolute safety, weather protection, and scratch-free handling. Our car carrier services are trusted by thousands of car owners.
                        </p>
                        <p>
                            We transport vehicles using customized open car trailers and premium enclosed car container trucks. Our drivers are highly experienced in navigating interstate routes, ensuring that your vehicle is delivered safely and on time.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/car-transportation-services.jpg') ?>" alt="car transportation services" class="img-fluid rounded my-3 w-100">
                        <p>
                            Before loading, we perform a detailed condition check and note down any existing scratches or details. The car is secured using wheel-locking straps and soft ties inside the container, preventing any movement during road transit.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Car Transportation Process</h2>
                    <p class="text-muted">How we ensure the safe shipment of your vehicle:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Inspection & Paperwork</h4>
                            <p>We perform a detailed inspection of the car's exterior, record the inventory, and collect necessary transit documents (RC, Insurance, ID copy).</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Safe Loading & Lock</h4>
                            <p>Your car is carefully driven onto the carrier ramp and locked securely in place using soft-tie wheel straps to prevent shifting.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Secure Transit</h4>
                            <p>The vehicle is transported in a containerized trailer, protected from dust, rain, and road debris, with regular tracking updates.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Door-Step Delivery</h4>
                            <p>We deliver the car directly to your new address, performing a final inspection check with you to ensure damage-free arrival.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-truck"></i></div>
                            <div class="choose-content">
                                <h5>Enclosed Container Cargo</h5>
                                <p>Protects your car from dust, rain, sunlight, and highway stones.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-check"></i></div>
                            <div class="choose-content">
                                <h5>Wheel-Lock Tie Downs</h5>
                                <p>Specialized wheel lock harnesses prevent vehicle shifts on road bumps.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-geo-alt-fill"></i></div>
                            <div class="choose-content">
                                <h5>Live Tracking Support</h5>
                                <p>Keep track of your vehicle's transit status with our support updates.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-person-check-fill"></i></div>
                            <div class="choose-content">
                                <h5>Experienced Operators</h5>
                                <p>Skilled operators handle the loading, ramp driving, and logistics.</p>
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
                            "I shipped my brand new Hyundai Creta from Kolkata to Delhi through Ayodhya Packers. I was very nervous, but their enclosed carrier delivered it completely scratch-free and on time. Excellent service!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">D</div>
                            <div class="user-name">
                                <h6>Dilip Singh</h6>
                                <span>Lucknow, Uttar Pradesh</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How is my car loaded onto the truck?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-1" class="collapse">
                                <div class="faq-card-body">
                                    We use specialized hydraulic lifts or gentle ramps to drive the vehicle into our enclosed car container trailers safely.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do I need to empty the car's fuel tank before transport?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-2" class="collapse">
                                <div class="faq-card-body">
                                    No, but we recommend keeping the fuel level at about a quarter (25%) of the tank capacity to minimize weight while allowing driving during loading/unloading.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents are required for shipping my car?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-3" class="collapse">
                                <div class="faq-card-body">
                                    You need to submit copies of the Registration Certificate (RC), valid Car Insurance policy, pollution certificate, and the owner's Government ID (Aadhaar or PAN card).
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'car-transportation']); ?>
            </div>
        </div>
    </div>
</section>
