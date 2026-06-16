<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Loading & Unloading',
    'description' => 'Damage-free loading and unloading of goods by our experienced, strong, and highly trained professionals using modern handling equipment.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Loading & Unloading']
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
                    <h2 class="service-section-title">Professional Loading & Unloading for Zero-Risk Shifting</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we recognize that loading and unloading are the most critical phases of the moving process. Many damages occur during manual lifting or improper stacking in trucks. Our trained and verified crew handles this task with absolute care and synchronization.
                        </p>
                        <p>
                            We use modern tools like hand trucks, dollies, ramps, slide sheets, and safety straps to lift and shift heavy objects like wardrobes, double beds, refrigerators, and heavy industrial machinery safely.
                        </p>
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/loading-unloading-services.jpg') ?>" alt="loading and unloading services" class="img-fluid rounded my-3 w-100">
                        <p>
                            When loading, our loaders arrange your boxes systematically — placing heavier boxes at the bottom and lighter, fragile ones securely on top. When unloading, everything is carefully lowered, placed inside your new rooms, and arranged as per your instructions.
                        </p>
                    </div>

                    <!-- How We Process Section -->
                    <h2 class="service-section-title mt-5">Our Loading & Unloading Process</h2>
                    <p class="text-muted">A step-by-step loading and unloading process designed for complete safety:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Clear Path Check</h4>
                            <p>We inspect staircases, corridors, doorways, and lift sizes to ensure a smooth, accident-free passage for large items.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Safe Lifting & Carriage</h4>
                            <p>Our strong loaders carry furniture and heavy items safely, using shoulder dolly straps and hand trucks to avoid scratches.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Optimized Loading & Stacking</h4>
                            <p>Goods are stacked inside the truck and tied securely using lashings to prevent any shift or slide during transport.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Careful Unloading & Placement</h4>
                            <p>At the destination, we unload and place items in their designated rooms, ensuring a stress-free settling-in experience.</p>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h2 class="service-section-title mt-5">Why Choose Us</h2>
                    <div class="why-choose-grid">
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-people-fill"></i></div>
                            <div class="choose-content">
                                <h5>Skilled & Strong Crew</h5>
                                <p>Loaders are trained in heavy-lifting techniques and safe handling procedures.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-wrench-adjustable"></i></div>
                            <div class="choose-content">
                                <h5>Modern Handling Equipment</h5>
                                <p>We utilize ramps, dollies, slide sheets, and lift straps for bulky objects.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-grid-3x3-gap-fill"></i></div>
                            <div class="choose-content">
                                <h5>Lashing & Protection</h5>
                                <p>Belt bindings inside the truck prevent shifts and collisions during transit.</p>
                            </div>
                        </div>
                        <div class="choose-item-card">
                            <div class="choose-icon-wrap"><i class="bi bi-shield-check"></i></div>
                            <div class="choose-content">
                                <h5>Zero Injury / Zero Damage</h5>
                                <p>Safe lifting methods prevent damage to walls, stairs, and your furniture.</p>
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
                            "I was worried about moving my double door fridge and wooden almirah from the third floor without a lift. But Ayodhya's loading team did it so smoothly. No damage to my items or the building walls. Extremely impressed!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">S</div>
                            <div class="user-name">
                                <h6>Sunil Sharma</h6>
                                <span>Varanasi, Uttar Pradesh</span>
                            </div>
                        </div>
                    </div>

                    <!-- FAQs Accordion -->
                    <h2 class="service-section-title mt-5">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-lu-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you use equipment for loading heavy items?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-lu-1" class="collapse">
                                <div class="faq-card-body">
                                    Yes. We use trolley pullers, hand dollies, slides, lifters, and safety belts to load refrigerators, safes, and heavy wardrobes safely.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-lu-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you disassemble large furniture before loading?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-lu-2" class="collapse">
                                <div class="faq-card-body">
                                    Yes. Large items like king-size beds, modular wardrobes, and dining tables are carefully disassembled, wrapped, loaded, and reassembled at the destination.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#faq-lu-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you stack items randomly inside the truck?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-lu-3" class="collapse">
                                <div class="faq-card-body">
                                    No. Stacking follows a strict hierarchy. Heavy items and stable furniture go at the bottom, and lighter, fragile cardboard boxes are placed securely on top.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'loading-and-unloading']); ?>
            </div>
        </div>
    </div>
</section>
