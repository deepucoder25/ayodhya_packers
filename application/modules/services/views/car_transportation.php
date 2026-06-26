<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Car Transportation',
    'description' => 'Secure car shifting and carrier services using specialized car shipping trailers and enclosed containers to deliver your vehicle damage-free.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Car Transportation']
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
                            src="<?= base_url('assets/images/services_modules/car-transportation.jpg') ?>"
                            alt="Car Shifting Services - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">100% Insured Shifting</span>
                    </div>
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-shield-fill-check"></i>
                            <span class="highlight-val">12K+</span>
                            <p>Cars Delivered</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-truck"></i>
                            <span class="highlight-val">Enclosed</span>
                            <p>Car Carrier Fleet</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-patch-check-fill"></i>
                            <span class="highlight-val">0%</span>
                            <p>Damage History</p>
                        </div>
                    </div>

                    <h2>Best Car Transportation Services</h2>
                    <p>It requires years of effort to buy a car. When transporting a car, the safety of it always poses
                        a major problem in mind as one worries about possible scratches, delays or any other mishap. It
                        becomes necessary to have a <b>professional transportation service</b> which ensures that the
                        process goes smoothly without any trouble.</p>

                    <p><strong><?= $company3 ?></strong> offer expert <b>car transportation service</b> throughout
                        India. We focus on proper handling and complete coordination in order to ensure you peace of
                        mind while we take care of your precious vehicle.</p>

                    <h3>What Difference Does Expert Car Transportation Make?</h3>
                    <p>Sometimes, it doesn't become practically feasible to drive the vehicle over large distances.
                        Driving increases mileage, cost, wear and tear of tyres and makes you unnecessarily tired.
                        <em>Professional transportation service</em> is always a safer option.</p>

                    <p>For carrying out the task, we make use of special purpose vehicle carriers for transporting your
                        vehicle. Prior to transportation, your vehicle is thoroughly checked for ensuring that it is not
                        damaged in any way while being transported. All steps are taken very cautiously since we know
                        that every vehicle holds both monetary and sentimental values.</p>

                    <span class="fs-4 fw-bold">Secure Vehicle Loading and Transport</span>
                    <p>Vehicle loading requires skill and knowledge. In order to transport the vehicle in a safe manner,
                        we employ professionals who follow correct procedures while positioning it on the vehicle
                        carrier.</p>

                    <p>During transport, your vehicle remains securely attached in order to reduce its unnecessary
                        movements. Constant communication will be maintained in order to keep you updated on
                        transportation status until your vehicle arrives.</p>

                    <h2>Our Car Relocation Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Exterior Inspection</h4>
                            <p>Our specialists perform a comprehensive exterior inspection, log existing scratches on a
                                checklist, and collect copies of RC and car insurance.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Safe Ramp Loading</h4>
                            <p>Your vehicle is driven up a low-angle ramp into the carrier, securing the chassis to
                                prevent bouncing or sliding on road curves.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Enclosed Transit</h4>
                            <p>We transport your vehicle inside sealed, high-security containers, shielding it from high
                                winds, highway rocks, rain, and road dirt.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>Doorstep Delivery</h4>
                            <p>The vehicle is unloaded safely at your new home. Together, we verify the delivery
                                condition checklist to confirm scratch-free arrival.</p>
                        </div>
                    </div>
                    <h4>Car Transport Suitable for Any Type of Vehicle</h4>
                    <p>Every customer has unique requirements when it comes to transporting their vehicles. Some people
                        require transport of their family sedans whereas some may need to transport luxury cars, SUVs or
                        recently purchased ones.</p>

                    <p>Transportation plans are made by considering the nature of the vehicle, distance and place of
                        delivery. It helps us to provide transportation services for individual and business customers.
                    </p>
                    <span class="fs-4 fw-bold">No Extra Charges after Booking - Transparent Process</span>
                    <p>The question which we get quite often is, "will there be any extra charges after booking?". Our
                        answer is simple, "No". Cost of transportation depends upon various parameters like distance,
                        type of vehicle, availability of carrier and pick-up point. We give you a complete estimation
                        before the start of your journey.</p>

                    <h5>The Story of Customer Satisfaction</h5>
                    <p>Once, a customer required his newly purchased SUV to be transported to the other end of the
                        country before joining his new job. As the vehicle was hardly driven, he desired it to be
                        delivered without any scratch on it.</p>

                    <p>We completed the entire process of inspection, loading of his SUV onto the covered vehicle
                        carrier and kept him continuously informed about it. After its successful delivery at the right
                        time without even a scratch, the customer later said that regular updates gave him complete
                        satisfaction while transporting his car.</p>

                    <h6>Transport Your Car with Complete Confidence</h6>
                    <p>Careful handling of your vehicle from its pickup till delivery point is what we promise you at
                        <?= $company3 ?>. We employ skilled professionals and provide you with safe transportation in
                        order to provide a stress free experience for transporting your vehicle.</p>

                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "I shipped my brand new SUV from Kolkata to Delhi. I was very nervous, but Ayodhya Packers
                            used an enclosed carrier to deliver it completely scratch-free and on time. Their checklist
                            documentation was very detailed and professional!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">D</div>
                            <div class="user-name">
                                <h6>Dilip Singh</h6>
                                <span>Lucknow, Uttar Pradesh</span>
                            </div>
                        </div>
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-1"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How is my car loaded onto the truck?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We use specialized hydraulic lifts or gentle ramps to drive the vehicle into our
                                    enclosed car container trailers safely.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-2"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do I need to empty the car's fuel tank before
                                    transport?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    No, but we recommend keeping the fuel level at about a quarter (25%) of the tank
                                    capacity to minimize weight while allowing driving during loading/unloading.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-ct-3"
                                aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">What documents are required for shipping my car?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-ct-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    You need to submit copies of the Registration Certificate (RC), valid Car Insurance
                                    policy, pollution certificate, and the owner's Government ID (Aadhaar or PAN card).
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'car-transportation']); ?>
            </div>
        </div>
    </div>
</section>