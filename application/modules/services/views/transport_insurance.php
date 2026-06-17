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
                    
                    <!-- 1. Hero Cover -->
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/transport-insurance.jpg') ?>" alt="Transport Insurance - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">100% Financial Protection</span>
                    </div>

                    <!-- 2. Highlights Row -->
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">100%</span>
                            <p>Financial Guard</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-wallet2"></i>
                            <span class="highlight-val">Fast</span>
                            <p>Claim Settlement</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-file-earmark-medical"></i>
                            <span class="highlight-val">Zero</span>
                            <p>Hidden Clauses</p>
                        </div>
                    </div>

                    <h2>Relocation Peace of Mind with Transit Insurance</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we take every safety precaution to protect your goods. However, transit routes can involve risks beyond our control, such as road accidents, vehicle collisions, fires, or natural disasters. Our transit insurance protects you financially against these risks.
                    </p>
                    <p>
                        We offer comprehensive transit coverage. Our claim support team helps you fill out the valuation list, calculate the premium, activate the policy before the truck departs, and manage the documentation for quick claims if needed.
                    </p>

                    <!-- 3. Shifting Comparison Grid -->
                    <h2>How We Compare to Competitors</h2>
                    <p>Our structured transit protection gives you complete financial security:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Formal written insurance certificate from top insurers.</li>
                                <li>Itemized valuation sheet for clear tracking.</li>
                                <li>Dedicated claims support coordinator on our team.</li>
                                <li>Prompt, transparent claim processing.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>No written policy or formal insurance documentation.</li>
                                <li>No formal valuation process.</li>
                                <li>No support staff to assist with filing claims.</li>
                                <li>No compensation for scratches or minor damage.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 4. Core Process Cards Timeline -->
                    <h2>Our Insurance Claim Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Item Valuation</h4>
                            <p>Before packing, you list the estimated monetary value of all electronic appliances, furniture, and boxed items on our form.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Premium Billing</h4>
                            <p>The insurance premium (typically 1.5% to 3%) is calculated based on the total declared value and added to your quote invoice.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Policy Activation</h4>
                            <p>We issue a valid insurance policy certificate before loading, ensuring your goods are covered for the entire transit route.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Claim Coordination</h4>
                            <p>In case of transit damages, we guide you through taking photos, listing items, filing the claim, and securing compensation.</p>
                        </div>
                    </div>

                    <!-- 5. Permitted vs Prohibited Checklist -->
                    <h2>Insurance Coverage Guidelines</h2>
                    <p>Please review which items are covered under our transit insurance policy:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Covered Items</h4>
                            <ul>
                                <li>Listed TVs, fridges, and washing machines.</li>
                                <li>Declared beds, cupboards, tables, and chairs.</li>
                                <li>Boxed household goods logged on the checklist.</li>
                                <li>Transported cars, bikes, and scooters.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Not Covered / Excluded</h4>
                            <ul>
                                <li>Undeclared gold, diamonds, jewelry, or cash.</li>
                                <li>Original property deeds, IDs, and certificates.</li>
                                <li>Items not listed on the packing checklist.</li>
                                <li>Pre-existing damage (noted during inspection).</li>
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
                            "A minor accident damaged our dining table and washing machine during transit. Thankfully, we had opted for Ayodhya's insurance. Their claims team assisted us, and we received the claim settlement in 15 days. Excellent service!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">A</div>
                            <div class="user-name">
                                <h6>Abhijit Roy</h6>
                                <span>Siliguri, West Bengal</span>
                            </div>
                        </div>
                    </div>

                    <!-- 7. FAQs Accordion -->
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ti-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What does transit insurance cover?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ti-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    It covers damage to goods caused by road accidents, vehicle collisions, vehicle overturns, fires, earthquakes, and theft during transit.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ti-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What is the insurance premium rate?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ti-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Transit insurance premium is calculated based on the total declared value of the goods, usually ranging from 1.5% to 3% depending on the coverage type.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ti-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents are needed to file a damage claim?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ti-3" class="collapse" data-bs-parent=".service-faq-container">
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
