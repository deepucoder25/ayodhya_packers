<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Warehousing & Storage',
    'description' => 'Secure and clean household and business storage services. Features 24/7 CCTV monitoring and flexible short/long-term storage.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Warehousing & Storage']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy"
                            src="<?= base_url('assets/images/services_modules/warehouse-storage.jpg') ?>"
                            alt="Warehousing & Storage - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">24/7 Monitored Storage</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-camera-video-fill"></i>
                            <span class="highlight-val">24/7</span>
                            <p>CCTV Monitored</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-bug-fill"></i>
                            <span class="highlight-val">Pest</span>
                            <p>Controlled Space</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-calendar3"></i>
                            <span class="highlight-val">Flexible</span>
                            <p>Short &amp; Long Term</p>
                        </div>
                    </div>

                    <h2>Secure, Clean &amp; Climate-Controlled Warehouses</h2>
                    <span class="fw-bold">Want to Have a Secure Place for Your Household and Office Goods?</span>
                    <p>Not all moves happen at once. Sometimes, your new residence is not ready yet. Your office
                        relocation is delayed. Or you may have a lack of space in your house or office. In such cases,
                        finding a secure storage facility becomes just as crucial as transporting.</p>

                    <p><strong><?= $company3 ?></strong> offers you <b>professional warehousing and storage service</b>
                        for household and office goods. You may get the required space to store your household things or
                        office equipment for a short or a long period.</p>

                    <h3>Storage Solutions Suitable for Different Situations</h3>
                    <p>Every customer needs a storage facility for his/her own reasons. Some customers are in the middle
                        of the process of renovation of their homes and they want to keep their furniture and other
                        things safe in the meantime. There are also some people who are relocating to another city but
                        are still waiting to get a new apartment. Businesses may need to have an additional place to
                        store office equipment, papers, seasonal or furniture inventory. You don't have to think where
                        to place your belongings. You can leave it in the hands of our professionals till the time
                        you'll be ready to receive them.</p>

                    <span class="fs-3 fw-bold">Your Belongings Will Be Secure Every Day</span>
                    <p>In any case, when our customers store something, they expect to get it in the same state they
                        left it.</p>

                    <p>That's why our warehouse is designed in such a way that stored goods will be well-organized,
                        cleaned and secured from damage. Furniture, appliances, equipment and packed cartons are placed
                        in an organized manner so they will not be moved unnecessarily. Professional maintenance and
                        correct storage practices will make your belongings safe.</p>

                    <h4>We Provide Both Short-Term and Long-Term Storage Solutions</h4>
                    <p>There are some customers who need to store their things for a few days between relocations. There
                        are also some people who need several months of secure storage. Whatever you want, we will help
                        you to choose a storage solution which will be suitable for your personal requirements and
                        budget.</p>

                    <h2>Our Secure Storage Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Inventory Packing</h4>
                            <p>We pack your items in heavy-duty cardboard boxes, wrapping furniture in stretch wrap to
                                prepare them for long-term storage.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Safe Transport</h4>
                            <p>We load your belongings onto our enclosed container truck and transport them securely to
                                our warehouse facility.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Allocated Storage</h4>
                            <p>Your items are placed in an allocated, clean storage space, catalogued under your unique
                                customer ID.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>On-Demand Delivery</h4>
                            <p>When you are ready, notify us. We retrieve your items, load them, and deliver them
                                directly to your new address.</p>
                        </div>
                    </div>
                    <span class="fs-4 fw-bold">Simple Process of Storage with Clear Documentation and Convenient
                        Access</span>
                    <p>We do not think that storage services should be a complicated thing. We explain everything
                        clearly, prepare all necessary documentation and organize inventory of stored goods. Once you
                        need to deliver your things, we will transport them on the schedule convenient for you.</p>

                    <h5>Customer Story of Reliable Storage Facility<h5>
                            <p>Last time we helped a family whose newly purchased apartment was delayed because of
                                interior renovation works. As they have already left their old residence, they needed a
                                place where they could store all their belongings for almost six weeks.</p>

                            <p>Our employees have packed everything carefully, transported it to our warehouse and
                                placed it there in an organized manner for future identification. After finishing the
                                renovation works, the same goods have been delivered back to their new house. The
                                customer thanked us for providing him such a reliable storage solution.</p>

                            <span class="fs-6 fw-bold">Keep Your Belongings in Secure Storage Facility</span>
                            <p>Regardless of whether you are moving, renovating, downsizing or just lack some space,
                                <em><?= $company3 ?></em> will provide you with reliable warehousing and storage
                                solutions.</p>

                            <div class="service-reviews-slice">
                                <div class="rating-row">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <p class="review-text">
                                    "We stored our home furniture with Ayodhya Packers for 3 months during our home
                                    renovation. When we received the furniture back, everything was clean, dry, and in
                                    perfect condition. Their warehouse security is top-notch!"
                                </p>
                                <div class="review-user">
                                    <div class="user-avatar">A</div>
                                    <div class="user-name">
                                        <h6>Amit Shah</h6>
                                        <span>Delhi, NCR</span>
                                    </div>
                                </div>
                            </div>
                            <h2>Frequently Asked Questions</h2>
                            <div class="service-faq-container">
                                <div class="faq-card">
                                    <div class="faq-card-header collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#faq-ws-1" aria-expanded="false" role="button">
                                        <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                        <span class="flex-grow-1">How secure is the storage warehouse?</span>
                                        <i class="bi bi-plus faq-toggle-icon"></i>
                                    </div>
                                    <div id="faq-ws-1" class="collapse" data-bs-parent=".service-faq-container">
                                        <div class="faq-card-body">
                                            Our warehouses feature 24/7 CCTV surveillance, fire prevention systems,
                                            double-lock gates, and security guards to keep your goods safe.
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#faq-ws-2" aria-expanded="false" role="button">
                                        <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                        <span class="flex-grow-1">What is the minimum storage duration?</span>
                                        <i class="bi bi-plus faq-toggle-icon"></i>
                                    </div>
                                    <div id="faq-ws-2" class="collapse" data-bs-parent=".service-faq-container">
                                        <div class="faq-card-body">
                                            We offer flexible options with no lock-in periods. You can store your goods
                                            for as little as 1 week up to several months or years.
                                        </div>
                                    </div>
                                </div>
                                <div class="faq-card">
                                    <div class="faq-card-header collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#faq-ws-3" aria-expanded="false" role="button">
                                        <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                        <span class="flex-grow-1">Can I access my stored items during the storage
                                            period?</span>
                                        <i class="bi bi-plus faq-toggle-icon"></i>
                                    </div>
                                    <div id="faq-ws-3" class="collapse" data-bs-parent=".service-faq-container">
                                        <div class="faq-card-body">
                                            Yes. You can access your stored items during business hours by notifying us
                                            24 to 48 hours in advance, allowing our staff to assist you.
                                        </div>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'warehousing-and-storage']); ?>
            </div>
        </div>
    </div>
</section>