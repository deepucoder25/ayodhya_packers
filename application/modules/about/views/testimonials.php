<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Client Testimonials',
    'description' => 'Read the authentic experiences of families, corporates, and professionals who chose ' . $company3 . ' for their relocation needs.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Client Testimonials']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2>What Our Customers Say</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, client satisfaction is our primary reward. Over our <?= $experience ?>+ year legacy, we have successfully relocated thousands of families, offices, and vehicles across India. Below are some reviews and testimonials from our valued clients.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Excellent Household Shifting</h3>
                                <p>
                                    "I shifted my entire household goods from Delhi to Bangalore. The crew arrived on time and packed everything carefully using double-layered bubble wrap. Not even a single glass item broke during the transit. Highly recommended!"
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Ramanuj Sharma</strong>
                                        <small>Delhi to Bangalore</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Safe Car &amp; Bike Carrier Service</h3>
                                <p>
                                    "We relocated our Hyundai i20 and Royal Enfield from Mumbai to Gurgaon. <?= $company3 ?> used a dedicated car carrier and delivered both vehicles door-to-door without a single scratch. Very transparent pricing as well."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Priya Nair</strong>
                                        <small>Mumbai to Gurgaon</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Smooth Office Relocation</h3>
                                <p>
                                    "We had to move our IT office branch with 45 work stations from Pune to Hyderabad. The planning and execution by <?= $company3 ?> was flawless. We resumed our operations on Monday morning without any downtime."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Vikram Malhotra</strong>
                                        <small>Pune to Hyderabad</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <h3>Reliable Local Shifting</h3>
                                <p>
                                    "Shifted our 3 BHK flat within Kolkata. The team completed the loading, transport, and unloading in just under 6 hours. Their pricing was highly competitive and the crew was incredibly polite and helpful."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Amitava Bose</strong>
                                        <small>Local Kolkata Shifting</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Stress-Free Pet Relocation</h3>
                                <p>
                                    "Extremely thankful to <?= $company3 ?> for safely shifting my Labrador from Siliguri to Chennai. They handled the documentation, custom travel crate, and kept feeding and walking him during breaks. Amazing care!"
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Dr. Rajesh Patel</strong>
                                        <small>Siliguri to Chennai</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>IBA Approved Billing &amp; Shifting</h3>
                                <p>
                                    "As a bank employee, I needed IBA approved packers and movers for my official transfer from Patna to Lucknow. <?= $company3 ?> provided accurate quotation, consignment note, and bills. Claim settlement was smooth."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Siddharth Sen</strong>
                                        <small>Patna to Lucknow</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-feedback-cta">
                        <h5>Leave Your Feedback</h5>
                        <p>
                            Have you recently relocated with us? We would love to hear about your experience. Your reviews help us improve our services and guide other families in choosing the right relocation partner.
                        </p>
                        <a href="<?= site_url('reviews') ?>" class="btn">
                            <i class="bi bi-pencil-square me-1"></i> Write a Customer Review
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'testimonials']); ?>
            </div>
        </div>
    </div>
</section>
