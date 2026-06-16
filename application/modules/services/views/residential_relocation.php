<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Residential Relocation',
    'description' => 'Full-service home shifting and household relocation services. We handle your furniture, kitchenware, and valuables with absolute safety and care.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Residential Relocation']
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
                    <h2 class="service-section-title">Reliable Home Relocation Services Tailored for Families</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we know that moving your home is a deeply emotional and stressful experience. You are not just shifting boxes, but relocation your memories and cherished belongings. Our residential relocation service guarantees a smooth, safe, and stress-free move.
                        </p>
                        <p>
                            From packing your delicate dinnerware and electronics to loading your heavy furniture and transport them safely, we cover everything. Our experts handle disassembly and reassembly of complex double beds, wardrobes, and modular items to save you the effort.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/home-shifting-services.jpg') ?>" alt="home shifting services" class="img-fluid rounded my-3 w-100">
                        <p>
                            We provide local home shifting within your city as well as domestic interstate moving services across India. No matter the distance, we focus on safety, punctuality, and competitive pricing.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Home Shifting Process</h2>
                    <p class="text-muted">A clear roadmap for shifting your home smoothly:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Pre-Move Survey</h4>
                            <p>We perform an on-site or virtual survey to list your household goods, assess packing requirements, and provide a transparent quote.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Quality Wrapping & Packing</h4>
                            <p>Our team wraps furniture, packs kitchenware in bubble wrap, places clothes in boxes, and securely seals all household items.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Loading & Transit</h4>
                            <p>We load the goods systematically onto our dedicated trucks, lashing large items to ensure maximum safety during the journey.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Unpacking & Reassembly</h4>
                            <p>After reaching your new home, we unload, unpack, and reassemble your beds and furniture, placing them exactly where you want.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-house-heart"></i></div>
                            <div class="choose-content">
                                <h5>Bespoke Home Relocations</h5>
                                <p>Flexible moving packages configured to fit your house size and budget.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-gift"></i></div>
                            <div class="choose-content">
                                <h5>Specialist Kitchen Packing</h5>
                                <p>Utmost care and bubble wrapping for glass jars, crockery, and microwave systems.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-tools"></i></div>
                            <div class="choose-content">
                                <h5>Furniture Disassembly</h5>
                                <p>Carpenter-like skills to dismantle and assemble beds, wardrobes, and TV panels.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-truck"></i></div>
                            <div class="choose-content">
                                <h5>Dedicated Transit Vehicles</h5>
                                <p>Safe transport using containerized, weatherproof trucks for interstate journeys.</p>
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
                            "We shifted our complete 2BHK flat with Ayodhya Packers. They packed everything in 4 hours and transported it safely to our new house. Their team reassembled my double bed and modular sofa perfectly. Great service!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">P</div>
                            <div class="user-name">
                                <h6>Preeti Kumari</h6>
                                <span>Siliguri, West Bengal</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you pack all kitchen utensils?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-1" class="collapse">
                                <div class="faq-card-body">
                                    Yes. We pack all kitchenware, including glassware, crockery, cups, plates, and pots, in protective bubble wrap and thick carton boxes to prevent damage.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you place items inside the rooms at my new house?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-2" class="collapse">
                                <div class="faq-card-body">
                                    Yes. Our unloading and unpacking crew will place your boxes, almirahs, beds, and refrigerators in the respective rooms according to your layout instructions.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Is transit insurance mandatory for home moves?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-3" class="collapse">
                                <div class="faq-card-body">
                                    It is optional but highly recommended, especially for long-distance domestic moves. It protects your valuable electronics and furniture against accidental road transit damages.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'residential-relocation']); ?>
            </div>
        </div>
    </div>
</section>
