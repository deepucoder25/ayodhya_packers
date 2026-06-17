<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Residential Relocation',
    'description' => 'Hassle-free household shifting and home relocation services. Safe and smooth door-to-door household moving at affordable rates.',
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
                    
                    <!-- 1. Hero Cover -->
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/gallery/img8.jpg') ?>" alt="Residential Shifting - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Door-to-Door Safe Relocation</span>
                    </div>

                    <!-- 2. Highlights Row -->
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-house-fill"></i>
                            <span class="highlight-val">10K+</span>
                            <p>Homes Moved</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-person-badge-fill"></i>
                            <span class="highlight-val">Dedicated</span>
                            <p>Move Supervisor</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">Scratch-Free</span>
                            <p>Transit Standard</p>
                        </div>
                    </div>

                    <h2>Elite Household Shifting &amp; Home Relocation Services</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we know that moving your home involves more than shifting boxes—it means transporting your memories and valuable household assets. From delicate family china to heavy wooden beds and sensitive appliances, every item needs individual care.
                    </p>
                    <p>
                        We manage your home relocation systematically. Our trained packers handle the wrapping, loading, and unpacking. We also deploy professional carpenters on-site to handle furniture dismantling and reassembly, ensuring a stress-free transition.
                    </p>

                    <!-- 3. Shifting Comparison Grid -->
                    <h2>How We Compare to Competitors</h2>
                    <p>Our home relocation services are designed around your family's convenience and safety:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Complete door-to-door packing and unpacking.</li>
                                <li>Customized foam padding for wooden finishes.</li>
                                <li>On-site furniture dismantling and assembly.</li>
                                <li>Dedicated move manager supervising the team.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Basic transport from building to building only.</li>
                                <li>No surface protection for furniture and tables.</li>
                                <li>No carpentry support for beds or almirahs.</li>
                                <li>Unsupervised daily laborers with no coordinator.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 4. Core Process Cards Timeline -->
                    <h2>Our Household Moving Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>In-Home Survey</h4>
                            <p>We review the volume of your goods, document fragile items, and plan the required truck size and packing supplies.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Systematic Packaging</h4>
                            <p>Our team wraps furniture in corrugated sheets, packs kitchenware in bubble wrap, and disassembles bed frames.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Balanced Loading</h4>
                            <p>We stack your goods securely inside our enclosed container truck, ensuring weight is balanced to prevent shifting in transit.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Unpacking &amp; Setup</h4>
                            <p>We unload your belongings room-by-room, reassemble the furniture, and help place heavy items where you want them.</p>
                        </div>
                    </div>

                    <!-- 5. Permitted vs Prohibited Checklist -->
                    <h2>Home Shifting Safety Guidelines</h2>
                    <p>Please review which items are accepted for packing and transport:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Standard Household Items</h4>
                            <ul>
                                <li>Beds, sofas, dining tables, and cupboards.</li>
                                <li>TVs, refrigerators, and washing machines.</li>
                                <li>Kitchen utensils, crockery, and dry groceries.</li>
                                <li>Clothes, books, linens, and suitcases.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited Items</h4>
                            <ul>
                                <li>Inflammable fuels, gas cans, or fireworks.</li>
                                <li>Gold, silver, diamonds, jewelry, or cash.</li>
                                <li>Original property deeds, certificates, or IDs.</li>
                                <li>Open liquids or leaking oils.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 6. Client Review Slice -->
                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "Shifting our 3BHK flat was incredibly smooth. The crew from Ayodhya Packers arrived on time, wrapped everything in double-walled boxes, and reassembled all the beds at our new house. Excellent, stress-free home relocation!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">V</div>
                            <div class="user-name">
                                <h6>Vijay Kumar</h6>
                                <span>Patna, Bihar</span>
                            </div>
                        </div>
                    </div>

                    <!-- 7. FAQs Accordion -->
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How many days in advance should I book my home move?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We recommend booking at least 5 to 7 days in advance to secure the moving date and allow proper coordination of packing supplies.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you help in dismantling and reassembling beds?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. Our team includes professional carpenters who disassemble double beds, almirahs, and dining tables, and reassemble them at your new home.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How do you transport fragile kitchen items?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    All plates, bowls, and glassware are wrapped individually in bubble wrap and packed inside sturdy carton boxes. We label these boxes as FRAGILE to ensure they are handled with care.
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
