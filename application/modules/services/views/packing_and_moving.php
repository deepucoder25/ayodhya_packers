<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
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

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Professional Packing & Moving Services for Ultimate Protection</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we know that the key to a successful move lies in how well your goods are packed. Our professional packing and moving services are designed to protect your household items, electronics, glassware, and furniture throughout the shifting process.
                        </p>
                        <p>
                            We use only high-grade packaging materials such as bubble wraps, corrugated sheets, heavy-duty cartons, stretch wrap, and foam sheets. Our trained packing staff knows how to wrap delicate chinaware, protect wood finishes, and secure electronic appliances for zero-damage transit.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/home-shifting-services.jpg') ?>" alt="packing and moving services" class="img-fluid rounded my-3 w-100">
                        <p>
                            Whether you are shifting locally within the city or moving across the country, we offer customized packing solutions to suit your budget and requirements. With our expertise, you can enjoy peace of mind knowing that your valuables are in the safest hands.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Packing & Moving Process</h2>
                    <p class="text-muted">How we ensure the safety of your goods during packing & shifting:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Sorting & Assessment</h4>
                            <p>We categorize items based on their fragility, size, and weight to determine the appropriate packing materials needed.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Multi-Layer Wrapping</h4>
                            <p>Delicate items are wrapped in bubble wrap and foam, while furniture is protected with thick corrugated sheets and stretch wrap.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Secure Box Packing</h4>
                            <p>Wrapped items are carefully placed inside high-strength carton boxes, with heavy items at the bottom and lighter items on top.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Taping & Labelling</h4>
                            <p>Boxes are securely taped and labelled with contents and room names, making it easy to organize and unpack at your new home.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-box-seam"></i></div>
                            <div class="choose-content">
                                <h5>5-Star Packaging Materials</h5>
                                <p>We use premium bubble wrap, cardboard boxes, and waterproof tape.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-people-fill"></i></div>
                            <div class="choose-content">
                                <h5>Experienced Packers</h5>
                                <p>Trained crew specialize in handling fragile items and glassware.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-tag-fill"></i></div>
                            <div class="choose-content">
                                <h5>Systematic Inventory</h5>
                                <p>We make detailed checklists for all packed boxes to prevent losses.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-fill-check"></i></div>
                            <div class="choose-content">
                                <h5>Damage Protection</h5>
                                <p>Transit insurance is available to secure high-value items.</p>
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
                            "The packing crew from Ayodhya Packers was exceptional. They packed my kitchen items, glassware, and TV with so much care. Not a single scratch on any of my furniture. Truly a professional team!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">R</div>
                            <div class="user-name">
                                <h6>Rohtash Kumar</h6>
                                <span>Patna, Bihar</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What materials do you use for packing?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-1" class="collapse">
                                <div class="faq-card-body">
                                    We use high-quality bubble wrap, corrugated sheets, heavy-duty carton boxes, stretch wrap, foam sheets, and strong adhesive tape.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you pack fragile items separately?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-2" class="collapse">
                                <div class="faq-card-body">
                                    Yes. Delicate glassware, mirrors, electronics, and showpieces are wrapped in multi-layer bubble wrap and packed in specialized boxes with fragile labels.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I pack my personal documents and gold myself?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-3" class="collapse">
                                <div class="faq-card-body">
                                    Yes, we strongly recommend that customers personally pack and carry high-value items like gold, jewelry, personal laptops, cash, and critical legal documents.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'packing-and-moving']); ?>
            </div>
        </div>
    </div>
</section>
