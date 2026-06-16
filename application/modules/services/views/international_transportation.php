<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'International Transportation',
    'description' => 'Hassle-free overseas moving and international cargo shifting with secure sea & air freight, custom clearances, and door delivery globally.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'International Transportation']
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
                    <h2 class="service-section-title">Professional Overseas Relocation & Global Logistics</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we specialize in providing end-to-end international shifting and relocation services. Relocating to a new country involves multiple complex procedures — from export-quality packaging and container loading to port handling, marine insurance, and customs clearance.
                        </p>
                        <p>
                            We partner with top global logistics networks to offer sea freight (Full Container Load / Less than Container Load) and air cargo services. Our international shifting experts prepare all shipping bills, declarations, and customs documents on your behalf.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/warehouse-storage-services.jpg') ?>" alt="international shifting services" class="img-fluid rounded my-3 w-100">
                        <p>
                            We use heavy-duty, export-grade packing materials, including wooden crates, customized pallets, and multi-layer bubble wrapping, to protect your items against moisture and sea turbulence.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our International Transportation Process</h2>
                    <p class="text-muted">How we manage your international relocation smoothly:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Customs Planning & Survey</h4>
                            <p>We assess your household items, plan the appropriate shipping container size, and guide you through country-specific customs guidelines.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Export-Quality Packing</h4>
                            <p>Our team packs your items in heavy-duty cardboard cartons, constructs custom wooden crates for fragile goods, and loads pallets.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Port Customs Clearance</h4>
                            <p>We manage all port logistics, custom documentation checks, marine insurance paperwork, and load your goods onto cargo vessels or flights.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Destination Delivery</h4>
                            <p>Our international destination partners handle customs clearance at the destination port, transport the goods, and deliver them to your door.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-file-earmark-lock-fill"></i></div>
                            <div class="choose-content">
                                <h5>Customs Documentation Handling</h5>
                                <p>Complete handling of import/export declarations, forms, and duties.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-box-fill"></i></div>
                            <div class="choose-content">
                                <h5>Export-Quality Packing</h5>
                                <p>Thick wooden crates, heavy-duty pallets, and moisture-resistant wrap.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-ship"></i></div>
                            <div class="choose-content">
                                <h5>Sea & Air Cargo Options</h5>
                                <p>Choose sea freight for budget moves or air freight for express deliveries.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-globe-americas"></i></div>
                            <div class="choose-content">
                                <h5>Trusted Global Partners</h5>
                                <p>Partners in over 150 countries handle local logistics and final delivery.</p>
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
                            "Shifting my household goods from Kolkata to London was a massive task. Ayodhya Packers handled all customs clearances and paperwork beautifully. The wooden crating for my glass items was great. Not a single break!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">V</div>
                            <div class="user-name">
                                <h6>Vikram Malhotra</h6>
                                <span>Kolkata, West Bengal</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-it-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you handle customs clearance at both ports?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-it-1" class="collapse">
                                <div class="faq-card-body">
                                    Yes. We manage customs documentation and export clearance at the origin port in India, and our destination partner manages clearance at the destination port.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-it-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How long does international sea freight shipping take?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-it-2" class="collapse">
                                <div class="faq-card-body">
                                    Sea freight usually takes between 30 to 60 days depending on the destination port, sailing schedules, and customs clearance procedures. Air cargo takes 5 to 12 days.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-it-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What items are prohibited in international household shipments?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-it-3" class="collapse">
                                <div class="faq-card-body">
                                    Perishable food items, plants, seeds, liquids, gases, aerosol cans, flammable liquids, weapons, drugs, and cash are strictly prohibited in international shipments.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'international-transportation']); ?>
            </div>
        </div>
    </div>
</section>
