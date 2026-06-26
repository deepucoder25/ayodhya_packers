<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Packing and Moving Services',
    'description' => 'Premium packing materials and expert handling for scratch-free, water-resistant, and completely safe relocation of your valuable belongings.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Packing & Moving']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/gallery/img9.jpg') ?>" alt="Packing & Moving - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Premium Multi-Layer Wrapping</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-box-seam"></i>
                            <span class="highlight-val">30+ Yrs</span>
                            <p>Moving Legacy</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">Multi-Layer</span>
                            <p>Export Packaging</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-check-circle-fill"></i>
                            <span class="highlight-val">100%</span>
                            <p>Transit Secured</p>
                        </div>
                    </div>

                    <h2>Safe and Reliable Relocation Solutions</h2>
                    <p>
                        A change of house or office needs much more than just transferring stuff from one place to another. It needs careful planning and execution in addition to proper packing. We offer <b>reliable packing and moving services</b> for houses, flats, offices and other business places. If you are shifting to a new place or simply moving from one place to another within the city, our services are tailor-made according to your specific moving requirements.
                    </p>
                    <h2>Complete Packing and Moving Services</h2>
                    <p>We take care of all aspects of the moving process which includes packing of your stuff, loading, transportation, unloading at the destination and rearrangement of your stuff. We assess your items, look into the accessibility at both ends and check which of your items need special care. It helps us in arranging appropriate packing materials, vehicles and manpower for hassle free moving.</p>
                    

                    <h2>Our Systematic Packing Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Sorting &amp; Plan</h4>
                            <p>We sort items by size and fragility, preparing the correct volume of bubble wrap, boxes, and protective corner guards.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Multi-Layer Wrap</h4>
                            <p>We wrap fragile glassware in bubble wrap, cover furniture with corrugated sheets, and apply stretch wrap to prevent dust and moisture.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Padded Box Packing</h4>
                            <p>We pack items in double-walled boxes, placing heavy items at the bottom and adding foam padding to fill empty spaces.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Sealing &amp; Inventory</h4>
                            <p>We seal all boxes with heavy-duty tape, label them by room, and draft a checklist for tracking during transport.</p>
                        </div>
                    </div>
                    <h4>Quality Packing Materials for Extra Protection</h4>
                    <p>We make use of strong packing materials like corrugated boxes, bubble wrap, foam sheets, stretch film, waterproof covers and edge protectors to ensure that there are minimal chances of damage to your stuff during transit. We offer extra cushioning for fragile stuff while disassembling and assembling furniture is done only if absolutely necessary. Each of the boxes is clearly marked for easy identification later on.</p>
                    <h5>Advantages of Employing Professional Packers and Movers</h5>
                    <p>When you employ professionals for packing and moving work on your behalf, then the whole process becomes easy and much safer for you. The need arises to deal with bulky appliances in the proper way, packing of delicate items in a safe manner, and loading of furniture in such a way that it becomes secure during the whole journey. Though employing professional movers will require you an investment initially, it may help you avoid unnecessary expenses.</p>
                    <span class="fs-4 fw-bold">A Recent Move</span>
                    <p>Recently, our team was called upon to assist in the relocation of a family who were moving into a new flat. They had a huge wooden wardrobe which was too big for the lift in the new flat. Rather than forcing them, we disassembled their wardrobe, packed their parts separately, moved them safely and assembled them perfectly at their new location.</p>
                    <span class="fs-5 fw-bold">Get a Free Moving Quote</span>
                    <p>Be it your local move or long distance move, <strong><?= $company3 ?></strong> has got you covered. We concentrate on careful packing, safe transit and punctual delivery of your stuff for a stress free moving experience. Just give us a call and get a free moving quotation.</p>
                    <span class="fs-2 fw-bold">Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What materials do you use for packing?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We use high-quality bubble wrap, corrugated sheets, heavy-duty carton boxes, stretch wrap, foam sheets, and strong adhesive tape.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you pack fragile items separately?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. Delicate glassware, mirrors, electronics, and showpieces are wrapped in multi-layer bubble wrap and packed in specialized boxes with fragile labels.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-pm-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I pack my personal documents and gold myself?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-pm-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes, we strongly recommend that customers personally pack and carry high-value items like gold, jewelry, personal laptops, cash, and critical legal documents.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'packing-and-moving']); ?>
            </div>
        </div>
    </div>
</section>
