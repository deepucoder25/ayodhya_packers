<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Home Shifting Services',
    'description' => 'Hassle-free household shifting and home relocation services. Safe and smooth door-to-door household moving at affordable rates.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Home Relocation']
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
                            alt="Home Relocation Shifting - <?= $company3 ?>"
                            onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Door-to-Door Safe Relocation</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-house-fill"></i>
                            <span class="highlight-val">12K+</span>
                            <p>Homes Relocated</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-person-badge-fill"></i>
                            <span class="highlight-val">Professional</span>
                            <p>Move Coordinator</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-box-seam-fill"></i>
                            <span class="highlight-val">Double-Wall</span>
                            <p>Safe Packaging</p>
                        </div>
                    </div>

                    <h2>Need Reliable Home Relocation Service?</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we recognize that moving your home is not just about
                        moving boxes—it means transporting your memories and valuable household possessions. From
                        delicate kitchenware and expensive smart TVs to heavy wooden beds and almirahs, every item
                        demands specific care.
                    </p>
                    <p>
                        We handle your home relocation systematically. Our trained team manages wrapping, loading,
                        transport, and unloading. We also deploy on-site carpenters to handle furniture dismantling and
                        reassembly, ensuring a seamless, worry-free moving experience for your family.
                    </p>
                    <h3>How Does Our Home Shifting Service Work?</h3>
                    <p>Each relocation is unique and has its peculiarities. For this reason, before the actual moving
                        day, our professionals evaluate the number of household items, furniture, appliances, fragile
                        items, and accessibility of the sites. This information allows us to prepare the optimal
                        vehicle, packing materials, and crew.</p>

                    <p>Our service involves such stages of moving as professional packing, loading, transportation,
                        unloading, and arrangement of the household items inside the new house. In case of necessity,
                        dismantling and assembling of the furniture is done by our staff within the framework of
                        relocation.</p>

                    <h3>Why People Choose <?= $company3 ?></h3>
                    <p>Professional moving companies are not only the source of the labour force. This is the question
                        of experience. We know how to pack such expensive electronics, wooden furniture, kitchen
                        appliances, decor items, and delicate glassware in appropriate protective materials. All of the
                        cartons are marked appropriately to facilitate the unpacking of the items after delivery.</p>

                    <p>Moreover, you receive constant updates during transportation to know where your household goods
                        are.</p>

                    <h4>Our Home Relocation Process</h4>
                    <p>Each relocation begins from the preliminary consultation. Once we understand your requirements,
                        we provide you with an accurate quotation to make sure there won’t be any bad surprises later.
                        On the day of the move, our packing crew comes to you with the necessary equipment. Everything
                        is packed by room, loaded very carefully and safely put in the vehicle to transport. When we
                        arrive at the destination, everything will be unpacked and arranged as you want. Simple
                        planning. Excellent relocation.</p>

                    <span class="fs-5 fw-bold">Common Problems We Successfully Solve Every Day</span>
                    <p>Each relocation is unique. Some customers have strict moving timings because of the apartment
                        building where they live. Other customers have limited accessibility roadways, large-size
                        furniture or artworks that need additional protection. Our team takes care of the possible
                        difficulties beforehand rather than solving problems when there is no time for this. This is one
                        of the reasons why many customers come back to us for further relocation.</p>

                    <span class="fs-5 fw-bold">One Particular Example of Home Relocation We Recently Had</span>
                    <p>Several weeks ago we helped some families to relocate to their new house which they've built
                        recently. Apart from all other household items they had one specific object that needed special
                        treatment - handmade wooden showcase which is an heirloom.
                    <p>

                    <p>In order to make the entire process more convenient for our customers we disassembled the object,
                        packed all its parts using appropriate packaging material and marked them. All items arrived at
                        the destination and the showcase was put together exactly as it was before. Wrapping up the job
                        we heard these words from our customer: "The main concern I had was connected with this
                        particular item. It's good to see it in good condition again."</p>

                    <h6>Want to Move Without Any Stress?<h6>
                            <p>Relocation should bring you joy rather than tiredness. We provide you with the
                                experienced professionals who treat each household as their own one. Contact us now and
                                get a free quotation.</p>
                            <h2>Our Household Moving Process</h2>
                            <div class="process-timeline">
                                <div class="process-step">
                                    <span class="step-number">1</span>
                                    <h4>Pre-Move Survey</h4>
                                    <p>We review the volume of your goods, document fragile items, and plan the required
                                        packing supplies and truck size.</p>
                                </div>
                                <div class="process-step">
                                    <span class="step-number">2</span>
                                    <h4>Specialized Packing</h4>
                                    <p>Our team wraps furniture in foam padding, packs kitchenware in bubble wrap, and
                                        disassembles bed frames.</p>
                                </div>
                                <div class="process-step">
                                    <span class="step-number">3</span>
                                    <h4>Secure Loading</h4>
                                    <p>We stack your goods securely inside our enclosed container truck, ensuring weight
                                        is balanced to prevent shifting.</p>
                                </div>
                                <div class="process-step">
                                    <span class="step-number">4</span>
                                    <h4>Unpacking &amp; Setup</h4>
                                    <p>We unload your belongings room-by-room, reassemble the furniture, and help place
                                        heavy items where you want them.</p>
                                </div>
                            </div>

                            <div class="service-reviews-slice">
                                <div class="rating-row">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="review-text">
                                    "Shifting our 3BHK flat was extremely smooth. The crew from Ayodhya Packers arrived
                                    on time, wrapped everything in double-walled boxes, and reassembled all the beds at
                                    our new house. Excellent, stress-free home relocation!"
                                </p>
                                <div class="review-user">
                                    <div class="user-avatar">R</div>
                                    <div class="user-name">
                                        <h6>Rajesh Gupta</h6>
                                        <span>Delhi, NCR</span>
                                    </div>
                                </div>
                            </div>
                            <h2>Frequently Asked Questions</h2>
                            <div class="service-faq-container">
                                <div class="faq-card">
                                    <div class="faq-card-header collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#faq-hr-1" aria-expanded="false" role="button">
                                        <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                        <span class="flex-grow-1">How many days in advance should I book my home
                                            move?</span>
                                        <i class="bi bi-plus faq-toggle-icon"></i>
                                    </div>
                                    <div id="faq-hr-1" class="collapse" data-bs-parent=".service-faq-container">
                                        <div class="faq-card-body">
                                            We recommend booking at least 5 to 7 days in advance to secure the moving
                                            date and allow proper coordination of packing supplies.
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#faq-hr-2" aria-expanded="false" role="button">
                                        <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                        <span class="flex-grow-1">Do you help in dismantling and reassembling
                                            beds?</span>
                                        <i class="bi bi-plus faq-toggle-icon"></i>
                                    </div>
                                    <div id="faq-hr-2" class="collapse" data-bs-parent=".service-faq-container">
                                        <div class="faq-card-body">
                                            Yes. Our team includes professional carpenters who disassemble double beds,
                                            almirahs, and dining tables, and reassemble them at your new home.
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#faq-hr-3" aria-expanded="false" role="button">
                                        <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                        <span class="flex-grow-1">How do you transport fragile kitchen items?</span>
                                        <i class="bi bi-plus faq-toggle-icon"></i>
                                    </div>
                                    <div id="faq-hr-3" class="collapse" data-bs-parent=".service-faq-container">
                                        <div class="faq-card-body">
                                            All plates, bowls, and glassware are wrapped individually in bubble wrap and
                                            packed inside sturdy carton boxes. We label these boxes as FRAGILE to ensure
                                            they are handled with care.
                                        </div>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'home-relocation']); ?>
            </div>
        </div>
    </div>
</section>