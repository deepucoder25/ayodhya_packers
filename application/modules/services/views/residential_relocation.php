<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Residential Relocation Services',
    'description' => 'Hassle-free household shifting and home relocation services. Safe and smooth door-to-door household moving at affordable rates.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Residential Relocation']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/gallery/img8.jpg') ?>"
                            alt="Residential Shifting - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Door-to-Door Safe Relocation</span>
                    </div>
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

                    <p>It feels great when you have to change your residence. But moving an entire household requires
                        planning, patience and proper handling. Each and every family has some specific requirements.
                        While some families are worried about their fragile kitchen ware, there are few who are
                        concerned about expensive furniture and learning material for children's studies.
                        <strong><?= $company3 ?></strong> offers residential shifting service that makes sure your
                        entire shift happens smoothly.
                    </p>

                    <p>The move is planned by our team based on the size of the house, amount of goods and the distance
                        of the place you will be moving to.</p>

                    <p>Whatever type of home you are moving from; apartment, independent house or gated community, we
                        take care of packing, loading, transportation, unloading and placing your household items at the
                        new place. Our aim is to ensure that your goods reach the new place in the same condition in
                        which they were in the old place.</p>
                    <h3>What is Included in Residential Relocation Service?</h3>
                    <p>At first we assess the requirements of our customers. Based on that we decide what type of
                        packing material, what size of vehicle and what manpower is required for the job. Our packing
                        includes dismantling the furniture, if required, packing the electronic appliances with special
                        packing material and labelling the cartons room-wise.</p>
                    <span class="fw-bold">We use following packing material:</span>
                    <ul>
                        <li>Corrugated carton boxes</li>
                        <li>Bubble wrap for delicate items</li>
                        <li>Foam sheet for electronic appliances</li>
                        <li>Stretch film for furniture</li>
                        <li>Waterproof covers during transportation</li>
                    </ul>
                    <p>This helps to avoid any possible scratches, dents and breakages of goods during transportation.
                    </p>

                    <h2>Our Household Moving Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>In-Home Survey</h4>
                            <p>We review the volume of your goods, document fragile items, and plan the required truck
                                size and packing supplies.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Systematic Packaging</h4>
                            <p>Our team wraps furniture in corrugated sheets, packs kitchenware in bubble wrap, and
                                disassembles bed frames.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Balanced Loading</h4>
                            <p>We stack your goods securely inside our enclosed container truck, ensuring weight is
                                balanced to prevent shifting in transit.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Unpacking &amp; Setup</h4>
                            <p>We unload your belongings room-by-room, reassemble the furniture, and help place heavy
                                items where you want them.</p>
                        </div>
                    </div>
                    <h4>Why Should Families Avail Our Services?</h4>
                    <p>Home shifting is not just the transportation of your furniture. It involves many other aspects
                        like timing, packing, loading, method of transportation etc. Poor packing of your washing
                        machine or improper loading in the truck might damage your goods easily.</p>

                    <p>Yes, residential shifting is indeed an investment but repairing damaged furniture and replacement
                        of broken appliances will cost you even more money. It will also save a lot of your time,
                        especially if you are moving your home within some particular date.</p>

                    <span class="fs-5 fw-bold">A Case Study</span>
                    <p>Recently we shifted a family from a rented flat to their newly constructed house. Most of their
                        concern was about shifting of a 6-seater dining table having a glass top. We separated out the
                        glass, packed each piece separately and reassembled the table in the new place. The family
                        completed their shifting before the evening.</p>
                    <h6 class="fs-5 fw-bold">Ready for Your Residential Shift?</h6>
                    <p>At <?= $company3 ?>, we combine qualified manpower, high quality packing material and well
                        organized planning to make residential shifting simple and reliable. Contact us now for a quote
                        and let us help you to shift your house in a professional manner.</p>

                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "They labeled each and every carton room wise, which saved us lot of time during unpacking and arranging our new house. Such small things made our job easy."
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">P</div>
                            <div class="user-name">
                                <span class="fs-6 fw-bold text-dark">Priya Mishra</span>
                                <span>Sultanpur | Jan 2025</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-1"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How many days in advance should I book my home move?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We recommend booking at least 5 to 7 days in advance to secure the moving date and
                                    allow proper coordination of packing supplies.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-2"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you help in dismantling and reassembling beds?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. Our team includes professional carpenters who disassemble double beds,
                                    almirahs, and dining tables, and reassemble them at your new home.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-rr-3"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How do you transport fragile kitchen items?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-rr-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    All plates, bowls, and glassware are wrapped individually in bubble wrap and packed
                                    inside sturdy carton boxes. We label these boxes as FRAGILE to ensure they are
                                    handled with care.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'residential-relocation']); ?>
            </div>
        </div>
    </div>
</section>