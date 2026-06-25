<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'About Us',
    'description' => 'Learn more about our history, values, infrastructure, and the expert team dedicated to your seamless move.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'About Us']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <img loading="lazy" src="<?= base_url('assets/images/gallery/img5.jpg') ?>" alt="About <?= $company3 ?>" class="about-banner-img">

                    <h2>About <?= $company3 ?></h2>
                    <span class="fs-6 fw-bold">Welcome to a Moving Company That Knows How to Move</span>
                    <p>Welcome to <strong><?= $company3 ?></strong>, your reliable partner for moving and shifting of household goods and office equipment in India. We understand that moving means much more than simply transporting things from one place to another. It is about making a fresh start in life and getting a perfect moving experience in return.</p>
                    <p>During the years of our work, we helped a great number of families, working people, businesspeople, and organizations move to a new place with comfort and peace of mind. We are always ready to take care of your belongings and ensure that everything reaches its destination in a safe manner.</p>
                    <div class="about-stats-grid">
                        <div class="about-stat-card">
                            <div class="stat-icon"><i class="bi bi-clock-history"></i></div>
                            <span class="fs-3 fw-bold"><?= $experience ?></span>
                            <p>Years Legacy</p>
                        </div>
                        <div class="about-stat-card">
                            <div class="stat-icon"><i class="bi bi-people"></i></div>
                            <span class="fs-3 fw-bold"><?= $happyClients ?></span>
                            <p>Happy Clients</p>
                        </div>
                        <div class="about-stat-card">
                            <div class="stat-icon"><i class="bi bi-shield-check"></i></div>
                            <span class="fs-3 fw-bold">99.6%</span>
                            <p>Safe Delivery</p>
                        </div>
                        <div class="about-stat-card">
                            <div class="stat-icon"><i class="bi bi-geo-alt"></i></div>
                            <span class="fs-3 fw-bold"><?= $statesCovered ?></span>
                            <p>States Covered</p>
                        </div>
                    </div>

                    <h3>Your Reliable Partner in Moving and Shifting</h3>
                    <p>We offer complete moving solutions for residential, commercial, and vehicle transportation purposes. We will help you move an apartment, a house, an office set, or even a car and a bike. We understand that relocation may be urgent or need some time to be prepared. Therefore, we pay special attention to knowing the specific needs of each client in order to develop the right plan of action.</p>
                    <p>Our skilled staff will use high-quality packing materials, appropriate handling technique and perfectly maintained transport vehicles to minimize the risks associated with the moving and shifting process.</p>

                    <span class="fs-3 fw-bold">Your Moving Company with Care and Experience</span>
                    <p>Trust is the thing you cannot buy. You can earn it with constant work and reliability. Our team does its best to ensure that our clients always know what to expect from us. We give transparent quotation and professional advice at all stages of the moving process.</p>
                    <p>Our experienced movers know how to properly pack and handle such things as delicate belongings, furniture, appliances, office equipment, and other personal items.</p>

                    <h4>Our Mission to Help with Moving and Shifting</h4>
                    <p>Our mission is to provide reliable moving and shifting services that will help our clients move easily.</p>

                    <p>We try to ensure the following for each of our clients:</p>
                    <ul>
                        <li>Secure packaging and transportation</li>
                        <li>Transparent and honest prices</li>
                        <li>Timely pick-up and drop-off of belongings</li>
                        <li>Professional assistance to our clients</li>
                        <li>Quality service always</li>
                    </ul>
                    <p>Each move helps us to build trust with our clients.</p>

                    <h4>Our Vision to Provide Better Services</h4>
                    <p>Our vision is to become one of the most trusted and <b>reliable moving companies in India</b> through continuous improvement of our services and customer experience. We try to create a moving process where customers will be informed, comfortable, and confident about their move. While developing further, our vision stays the same - to provide our clients with reliable moving services professionally, skillfully, and honestly.</p>
                    <span class="fs-5 fw-bold">Reasons Why Our Clients Prefer Us</span>
                    <p>Clients prefer <?= $company3 ?> because we care about such things as reliability, safety, and customer satisfaction.</p>
                    <ul>
                        <li>Trained and certified moving professionals</li>
                        <li>High-quality packing materials to protect your belongings better</li>
                        <li>Honest pricing without any additional fees</li>
                        <li>Timely schedule of pickup and delivery</li>
                        <li>Safe car and bike transportation services</li>
                        <li>Constant support at all stages of relocation</li>
                    </ul>
                    <h5>Our Story</h5>
                    <p><em><?= $company3 ?></em> was created in order to make moving and shifting easier, safer, and more reliable for families and organizations. What was initially a moving service grew thanks to the trust of our clients, hard work, and quality of our services.Nowadays, we continue to help our clients in India with moving and shifting with the same values that helped us to earn our good reputation.</p>

                    <h3 class="mt-5 mb-4">Frequently Asked Questions</h3>
                    <div class="about-custom-faq-accordion accordion mb-4" id="aboutFaqAccordion">
                        <?php
                        $about_faqs = [
                            [
                                'q' => 'What services do you provide?',
                                'a' => 'We provide household shifting, office shifting, packing, loading, unloading, vehicle transportations, and storage services.'
                            ],
                            [
                                'q' => 'Do you supply packing material?',
                                'a' => 'Yes, we use quality packing materials to ensure that your belongings are safely transported.'
                            ],
                            [
                                'q' => 'Can I get moving quotations from you?',
                                'a' => 'You just need to call us, send a WhatsApp message or fill in an inquiry form on our website.'
                            ],
                            [
                                'q' => 'Do you carry out interstate relocations?',
                                'a' => 'Yes, we provide local and distance moving services all over India.'
                            ],
                            [
                                'q' => 'Can you transport cars and bikes?',
                                'a' => 'Yes, we also provide secure and reliable vehicle transportation services for vehicles and two-wheelers.'
                            ]
                        ];
                        foreach ($about_faqs as $i => $faq):
                            $isOpen = ($i === 0);
                        ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faq-heading-<?= $i ?>">
                                <button class="accordion-button <?= $isOpen ? '' : 'collapsed' ?>" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#faq-collapse-<?= $i ?>" 
                                        aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" 
                                        aria-controls="faq-collapse-<?= $i ?>">
                                    <?= htmlspecialchars($faq['q']) ?>
                                </button>
                            </h3>
                            <div id="faq-collapse-<?= $i ?>" 
                                 class="accordion-collapse collapse <?= $isOpen ? 'show' : '' ?>" 
                                 aria-labelledby="faq-heading-<?= $i ?>" 
                                 data-bs-parent="#aboutFaqAccordion">
                                <div class="accordion-body">
                                    <p class="mb-0"><?= htmlspecialchars($faq['a']) ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
            </div>
        </div>
    </div>
</section>
