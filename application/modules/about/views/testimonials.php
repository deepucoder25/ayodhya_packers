<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Client Testimonials',
    'description' => 'Read the authentic experiences of families, corporates, and professionals who chose ' . $company3 . ' for their relocation needs.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Client Testimonials']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2>What Our Customers Say</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, client satisfaction is our primary reward. Over our <?= $experience ?>+ year legacy, we have successfully relocated thousands of families, offices, and vehicles across India. Below are some reviews and testimonials from our valued clients.
                    </p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>The quoted price remained the same.</h3>
                                <p>
                                    "Among the three companies, I chose <?= $company3 ?> for shifting due to their clarity of price quote and matching bills."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Ashish Tandon</strong>
                                        <small>Lucknow</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>They handled our furniture very carefully.</h3>
                                <p>
                                    "The wooden dining table belonged to my grand-parents so it was a bit scary. But the team wrapped everything and it was delivered to my new home without any scratches or damage."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Ritu Sharma</strong>
                                        <small>Ayodhya</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Excellent communication during the whole journey.</h3>
                                <p>
                                    "During the transportation of my goods, I got updates on regular basis. Every time I contacted, I got a response and a detailed explanation."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Mohit Singh</strong>
                                        <small>Prayagraj</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                                <h3>Everything was set up the very next morning.</h3>
                                <p>
                                    "Over the weekend, our office was shifted. Computers, files, tables, and chair were packed properly and everything was arranged before our employees came back to work on Monday."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Pankaj Verma</strong>
                                        <small>Kanpur</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>No rush and thorough packing process.</h3>
                                <p>
                                    "The guys did not rush while packing. After checking each room thoroughly, they started loading the truck and that gave me peace of mind."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Anjali Gupta</strong>
                                        <small>Gorakhpur</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Both of them reached there according to schedule.</h3>
                                <p>
                                    "While shifting, punctuality is very important. Both of them reached early in the morning and the shift was done on time."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Vikas Mishra</strong>
                                        <small>Varanasi</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Very good guys to deal with.</h3>
                                <p>
                                    "Everyone in the team was polite and respectful. They paid attention to our instructions and handled all things carefully without any reminders."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Neha Kapoor</strong>
                                        <small>Delhi</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Highly recommended moving company.</h3>
                                <p>
                                    "Moving is always tough but they made the entire process so easy for me. Honest pricing, careful packing, and professional attitude throughout the relocation period."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Rohan Srivastava</strong>
                                        <small>Noida</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Bike delivered in time without any scratch.</h3>
                                <p>
                                    "While relocating for work, I booked their bike transportation service. They delivered on time and there was not even a single scratch on my motorcycle."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Arvind Yadav</strong>
                                        <small>Faizabad</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Impressed by the quality of packing.</h3>
                                <p>
                                    "Bubble wrapping and carton packing was done perfectly. They separated fragile items with different labels which made unpacking easy."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Sneha Jain</strong>
                                        <small>Jaipur</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>Professional customer support.</h3>
                                <p>
                                    "All questions I had before booking were answered patiently and it boosted my confidence in the company before finalizing the move."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Deepak Tiwari</strong>
                                        <small>Agra</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-testimonial-card h-100">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <h3>I would definitely book your services again.</h3>
                                <p>
                                    "Second time we have shifted in the last five years, and definitely it is the best shifting experience. Everything was done in a professional way."
                                </p>
                                <div class="user-details">
                                    <div>
                                        <strong>Priya Saxena</strong>
                                        <small>Bengaluru</small>
                                    </div>
                                    <span class="badge about-bg-success-soft">
                                        <i class="bi bi-patch-check-fill me-1"></i> Verified
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-feedback-cta">
                        <h5>Leave Your Feedback</h5>
                        <p>
                            Have you recently relocated with us? We would love to hear about your experience. Your reviews help us improve our services and guide other families in choosing the right relocation partner.
                        </p>
                        <a href="<?= site_url('reviews') ?>" class="btn">
                            <i class="bi bi-pencil-square me-1"></i> Write a Customer Review
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'testimonials']); ?>
            </div>
        </div>
    </div>
</section>
