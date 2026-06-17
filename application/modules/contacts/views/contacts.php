<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Contact Us',
    'description' => 'Get in touch with ' . $company3 . ' Packers and Movers. We are here to help you 24/7 with your relocation needs.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Contact Us']
    ]
]);
?>
<section class="contact-section py-5 bg-light">
    <div class="container my-4">
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="contact-info-card text-center">
                    <div class="contact-info-icon-wrap email-icon">
                        <i class="bi bi-envelope-open-fill"></i>
                    </div>
                    <h4>Email Address</h4>
                    <p class="mb-2">Send us an email anytime</p>
                    <a href="<?= $mailhtml ?>" class="fw-bold text-decoration-none"><?= $mail ?></a>
                    <div>
                        <a href="<?= $mailhtml ?>" class="contact-card-btn">
                            <i class="bi bi-chat-dots-fill me-1"></i> Email Us Now
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="contact-info-card text-center">
                    <div class="contact-info-icon-wrap phone-icon">
                        <i class="bi bi-telephone-forward-fill"></i>
                    </div>
                    <h4>Phone Numbers</h4>
                    <p class="mb-2">Call our support desk 24/7</p>
                    <div class="d-flex flex-column align-items-center gap-2 w-100">
                        <a href="<?= $phonehtml ?>" class="contact-card-btn phone-btn-accent w-100 justify-content-center mt-2">
                            <i class="bi bi-telephone-outbound-fill me-1"></i> Call <?= $phone ?>
                        </a>
                        <?php if (!empty($phone1)): ?>
                            <a href="<?= $phonehtml1 ?>" class="contact-card-btn w-100 justify-content-center mt-0">
                                <i class="bi bi-telephone-fill me-1"></i> Call <?= $phone1 ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="contact-info-card text-center">
                    <div class="contact-info-icon-wrap address-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h4>Head Office</h4>
                    <p class="mb-2">Visit our corporate office</p>
                    <p class="address-text mb-1"><?= $address ?></p>
                    <div>
                        <a href="https://www.google.com/maps/search/?api=1&query=Ayodhya+Packers+And+Movers+Indore" target="_blank" class="contact-card-btn">
                            <i class="bi bi-geo-alt-fill me-1"></i> Open in Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="contact-form-card p-4 p-md-5">
                    <div class="form-header mb-4">
                        <div class="form-badge-pill mb-3">
                            <span class="badge-dot"></span> Get in Touch
                        </div>
                        <h2>Send Us A Message</h2>
                        <p>Have questions or need a custom quote? Fill out the form below and we'll get back to you shortly.</p>
                    </div>
                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group-wrap">
                                    <label class="form-label-custom">Your Name *</label>
                                    <div class="input-icon-wrap">
                                        <i class="bi bi-person-fill"></i>
                                        <input type="text" name="name" class="form-control-custom-input" placeholder="John Doe" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group-wrap">
                                    <label class="form-label-custom">Phone Number *</label>
                                    <div class="input-icon-wrap">
                                        <i class="bi bi-telephone-fill"></i>
                                        <input type="tel" name="phone" class="form-control-custom-input" placeholder="Mobile Number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group-wrap">
                                    <label class="form-label-custom">Email Address</label>
                                    <div class="input-icon-wrap">
                                        <i class="bi bi-envelope-fill"></i>
                                        <input type="email" name="email" class="form-control-custom-input" placeholder="hello@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group-wrap">
                                    <label class="form-label-custom">Your Message *</label>
                                    <div class="input-icon-wrap textarea-wrap">
                                        <i class="bi bi-chat-left-text-fill"></i>
                                        <textarea name="message" class="form-control-custom-input" rows="5" placeholder="How can we help you?" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="contact-submit-btn">
                                    <i class="bi bi-send-fill me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                    <div class="form-trust-footer mt-4 pt-4 border-top">
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <div class="trust-pillar-item text-center">
                                    <i class="bi bi-shield-fill-check"></i>
                                    <span>100% Secure Data</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="trust-pillar-item text-center">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                    <span>Instant Response</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="trust-pillar-item text-center">
                                    <i class="bi bi-headset"></i>
                                    <span>24/7 Support Desk</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5">
                <div class="contact-map-card p-4 h-100 d-flex flex-column">
                    <div class="map-header mb-4">
                        <h3>Find Us On Google Maps</h3>
                        <p>Visit our location or view directions to our main office.</p>
                    </div>
                    <div class="map-iframe-wrap flex-grow-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d58848.19857937457!2d75.915303!3d22.802004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39631cd90fe903a5%3A0x4f61f1e4dda4795c!2sAyodhya%20Packers%20And%20Movers!5e0!3m2!1sen!2sin!4v1747127608542!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
