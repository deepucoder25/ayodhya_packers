<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Warehousing & Storage',
    'description' => 'Safe, secure, and clean storage warehouses for household items and corporate inventory, featuring 24/7 monitoring and fire safety protection.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Warehousing & Storage']
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
                    <h2 class="service-section-title">Clean, Secure & pest-Controlled Storage Warehouses</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we offer spacious and secure warehousing solutions for individuals, families, and businesses. Whether you are traveling abroad for a few months, renovating your home, or need extra space for your business inventory, our storage units are ideal.
                        </p>
                        <p>
                            Our warehouses are clean, moisture-free, and undergo regular pest control treatments. We provide wooden pallets to keep your cardboard boxes and furniture off the floor, protecting them against dampness.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/warehouse-storage-services.jpg') ?>" alt="warehouse storage services" class="img-fluid rounded my-3 w-100">
                        <p>
                            We maintain a detailed inventory list and label all stored items systematically, ensuring that retrieving your goods is simple and fast whenever you require them.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Storage Process</h2>
                    <p class="text-muted">How we store your items securely at our warehouse:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Inventory Pickup</h4>
                            <p>Our team packs and picks up your household goods from your home, preparing a detailed inventory list signed by both parties.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Warehouse Loading</h4>
                            <p>Upon reaching our warehouse, items are transferred onto raised wooden pallets to prevent contact with moisture.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Constant Monitoring</h4>
                            <p>Your goods are stored safely in a 24/7 CCTV-monitored facility under the supervision of security staff.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Safe Redelivery</h4>
                            <p>Whenever you request redelivery, we load the items from our warehouse and transport them directly to your new address.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-camera-video-fill"></i></div>
                            <div class="choose-content">
                                <h5>24/7 Security CCTV</h5>
                                <p>Constant security guards and video cameras monitor all storage rooms.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-bug-fill"></i></div>
                            <div class="choose-content">
                                <h5>Pest & Termite Controlled</h5>
                                <p>Routine spraying and cleanliness ensure your wooden furniture is safe.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-calendar3"></i></div>
                            <div class="choose-content">
                                <h5>Flexible Storage Duration</h5>
                                <p>Store items for as short as 1 month or for several years as needed.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-check"></i></div>
                            <div class="choose-content">
                                <h5>Insurance Valuation</h5>
                                <p>We offer full coverage options to protect against storage risks.</p>
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
                            "I stored my complete household goods for 6 months with Ayodhya Packers while relocating on a short project. When I received my items back, they were completely clean, dust-free, and in perfect shape. Reliable storage service!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">A</div>
                            <div class="user-name">
                                <h6>Animesh Banerjee</h6>
                                <span>Durgapur, West Bengal</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How secure is the storage warehouse?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-1" class="collapse">
                                <div class="faq-card-body">
                                    Our warehouse is fully secure, equipped with round-the-clock CCTV cameras, digital security access logs, security guards, and fire extinguisher installations.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What is the minimum storage duration?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-2" class="collapse">
                                <div class="faq-card-body">
                                    We offer storage solutions starting from a minimum duration of 1 month, with monthly extensions available as per your convenience.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ws-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I visit the warehouse to check on my items?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ws-3" class="collapse">
                                <div class="faq-card-body">
                                    Yes. Customers are welcome to visit our warehouse during business hours with a 24-hour prior notice to check on their stored inventory.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'warehousing-and-storage']); ?>
            </div>
        </div>
    </div>
</section>
