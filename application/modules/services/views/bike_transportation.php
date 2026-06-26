<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Bike Transportation',
    'description' => 'Secure bike shifting and motorcycle carrier services using specialized multi-layer protective packing and enclosed containers to deliver your two-wheeler damage-free.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Bike Transportation']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/gallery/img1.jpg') ?>"
                            alt="Bike Shifting Services - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">100% Insured Shifting</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-bicycle"></i>
                            <span class="highlight-val">15K+</span>
                            <p>Bikes Delivered</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-box-seam-fill"></i>
                            <span class="highlight-val">Multi-Layer</span>
                            <p>Premium Packing</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">0%</span>
                            <p>Damage History</p>
                        </div>
                    </div>

                    <h2>Safe and Professional Two-Wheeler Shifting Services</h2>
                    <p>It is difficult to trust somebody with your precious two-wheeler. It could be your commuting
                        motorbike or sports motorbike and even your scooty that you have bought ages back. You don't
                        want to take any risk and want your ride to be delivered just as good as you left it behind. A
                        minor scratch can ruin everything.</p>

                    <p>This is where <strong><?= $company3 ?></strong> come into picture. We provide bike transportation
                        services with a special emphasis on safety, protection and fast deliveries. Instead of
                        delivering your bike as ordinary goods, we ensure a well-planned procedure for transporting
                        bikes.</p>

                    <h3>Protecting All Bikes According to their Type</h3>
                    <p>No two bikes are alike. A light-weighted scooty, high-end sports motorbike and a touring
                        motorbike require different procedures.</p>

                    <p>Before starting with transportation, our experts first examine the bike and prepare it for
                        transportation. All parts that could get scratched or damaged during the process are securely
                        covered by using protective materials. Sometimes a small step at the start can save us from
                        bigger problems in future.</p>

                    <span class="fs-4 fw-bold">Safe Transportation Procedure</span>
                    <p>After packing the motorcycle, it is transported inside the transport vehicle. Suitable equipment
                        is used for loading the bike into the vehicle to minimize movement during transportation. Our
                        skilled workers pack all vehicles in such a manner that they stay stable throughout the journey.
                        Customers are provided with regular updates throughout transportation regarding the location and
                        time of delivery.</p>

                    <h2>Our Bike Relocation Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Condition Inspection</h4>
                            <p>We document your bike's pre-load condition, note existing scratches, log fuel levels, and
                                verify vehicle registration papers (RC and Insurance).</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Multi-Layer Wrapping</h4>
                            <p>Our packaging experts wrap mirrors, indicators, handles, and painted body structures
                                using high-density bubble wrap and cardboard sheets.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Secure Trailer Loading</h4>
                            <p>The bike is loaded inside a high-security enclosed vehicle carrier, clamped at the
                                wheels, and strapped down to prevent movement.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Doorstep Delivery</h4>
                            <p>We unload your bike at your new residence, conduct a joint inspection check, and hand
                                over the keys scratch-free.</p>
                        </div>
                    </div>
                    <h4>Why People Prefer Our Service Over Any Other</h4>
                    A lot of people prefer riding the bike themselves during long trips. Although it sounds easy it
                    involves additional expenditure in the form of fuel and mileage and tire wear.

                    <b>Professional bike transportation services</b> not only saves the customer but also keeps his/her
                    bike away from any kind of unnecessary wear and tear. Our customers appreciate this aspect of our
                    service when relocating.

                    <h5>Bike Transportation Example</h5>
                    <p>Recently, a software engineer moving to a new city to join a new job approached us to transport
                        his Royal Enfield to another city. His motorcycle was purchased just a few months back and he
                        wanted to save some extra kilometers before reaching his new office.</p>

                    <p>We packed the motorcycle with utmost care, did all the necessary documentation and arranged the
                        bike transportation as per schedule. The motorcycle reached its destination without any harm
                        done. A week after delivery, he informed us that the bike was delivered just like the way it was
                        picked up. That made him feel happy and relieved.</p>

                    <h6>Relax while Your Bike Travels Safely</h6>
                    <p>Transporting a bike becomes easy with the help of <em><?= $company3 ?></em>. Our team of skilled
                        and experienced professionals understands the value of every single bike and makes sure to
                        deliver them in the best possible way.</p>

                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "I shipped my sports bike from Mumbai to Pune. The packaging was top-notch with bubble wraps
                            and cardboard sheets. Delivered in perfect condition without a single mark on the fuel tank.
                            Highly recommended!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">A</div>
                            <div class="user-name">
                                <h6>Anand Sharma</h6>
                                <span>Indore, Madhya Pradesh</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bk-1"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How is my bike protected from scratches?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bk-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We use three layers of protective wrapping: first a foam wrap, followed by
                                    heavy-duty bubble wrap, and finally a sturdy corrugated sheet outer layer to shield
                                    all sensitive parts.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bk-2"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Is transit insurance mandatory for bike shipping?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bk-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    While optional, we strongly recommend taking transit insurance. It covers financial
                                    liabilities in case of unforeseen road hazards or collision damage during transit.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-bk-3"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can I transport my bike with a full tank of fuel?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-bk-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    No, for safety regulations, we require the fuel tank to be almost empty (only about
                                    1-2 liters left) to prevent leakage and fire hazards inside the carrier.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'bike-transportation']); ?>
            </div>
        </div>
    </div>
</section>