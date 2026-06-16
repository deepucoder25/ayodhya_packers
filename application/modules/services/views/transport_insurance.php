<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Transport Insurance',
    'description' => 'Comprehensive transit insurance cover for your household items, furniture, and vehicles to safeguard against unforeseen transit accidents or damages.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Transport Insurance']
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
                    <h2 class="service-section-title">Safeguard Your Relocation with Transit Insurance</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we take every safety measure to ensure your goods arrive in perfect condition. However, unforeseen events like road accidents, natural disasters, or highway traffic disruptions can happen. Our transit insurance service ensures that your assets are protected financially.
                        </p>
                        <p>
                            We offer two types of transit protection: Transit Insurance (covers damages during vehicle accidents, collisions, or fires) and Comprehensive Insurance (covers damage from packing/loading handling as well). We assist you in valuing your goods and selecting the right policy.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/loading-unloading-services.jpg') ?>" alt="transport insurance services" class="img-fluid rounded my-3 w-100">
                        <p>
                            In case of any damage, our dedicated claim support team helps compile the required documents, coordinate with the insurance company, and settle the claim as quickly as possible.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Insurance Process</h2>
                    <p class="text-muted">How we secure your goods with insurance:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Goods Valuation</h4>
                            <p>We provide a valuation form where you list the estimated monetary value of all key appliances, furniture, and items to be shifted.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Premium Calculation</h4>
                            <p>Based on the total declared value, a minor premium amount (usually 1.5% to 3%) is calculated and added to the quote invoice.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Policy Activation</h4>
                            <p>We issue a valid insurance certificate before the truck departs, securing your goods against any road transit mishaps.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Fast Claim Support</h4>
                            <p>In case of transit damages, we guide you through taking photos, listing damages, filing the claim, and securing compensation.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
                            <div class="choose-content">
                                <h5>Full Accident Protection</h5>
                                <p>Secures your assets against vehicle accidents, collision, fire, and theft.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-wallet2"></i></div>
                            <div class="choose-content">
                                <h5>Hassle-Free Settlements</h5>
                                <p>Direct assistance to ensure claims are reviewed and paid out quickly.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-file-earmark-medical-fill"></i></div>
                            <div class="choose-content">
                                <h5>Transparent Policies</h5>
                                <p>No hidden clauses or surprise deductions — simple and transparent terms.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-patch-check-fill"></i></div>
                            <div class="choose-content">
                                <h5>Complete Peace of Mind</h5>
                                <p>Relax knowing that your valuable electronics and furniture are covered.</p>
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
                            "A truck carrying my goods met with a minor accident, causing scratches to my washing machine and dining table. Thankfully, I had opted for Ayodhya's transport insurance. Their team processed the claim, and I received the compensation amount within 15 days. Highly reliable!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">A</div>
                            <div class="user-name">
                                <h6>Abhijit Roy</h6>
                                <span>Siliguri, West Bengal</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ti-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What does transit insurance cover?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ti-1" class="collapse">
                                <div class="faq-card-body">
                                    It covers damage to goods caused by road accidents, vehicle collisions, vehicle overturns, fires, earthquakes, and theft during transit.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ti-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What is the insurance premium rate?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ti-2" class="collapse">
                                <div class="faq-card-body">
                                    Transit insurance premium is calculated based on the total declared value of the goods, usually ranging from 1.5% to 3% depending on the coverage type.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ti-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents are needed to file a damage claim?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ti-3" class="collapse">
                                <div class="faq-card-body">
                                    You need to provide the insurance certificate copy, the original packing list invoice, clear photos of the damaged items, and a signed damage statement.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'transport-insurance']); ?>
            </div>
        </div>
    </div>
</section>
