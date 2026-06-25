<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'FAQ Section',
    'description' => 'Have questions about your upcoming relocation? Browse our comprehensive FAQ section to find quick answers regarding packing, pricing, transit, and more.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'FAQ Section']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2>Answers to Common Shifting Queries</h2>
                    <p class="lead">
                        Shifting your home or vehicle can feel overwhelming, and it's completely normal to have questions about safety, packaging, timelines, and insurance. Here are answers to the questions we are asked most frequently by our clients.
                    </p>
                    <div class="accordion accordion-flush about-custom-faq-accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">
                                    1. Would someone come to examine my stuff before the quote?
                                </button>
                            </h2>
                            <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. Based on the nature and scope of your move, we will arrange for a survey or get relevant details in order to provide you an accurate estimation.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                                    2. Do I need to do the packing by myself?
                                </button>
                            </h2>
                            <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, if you don't wish to. You can entrust the whole packing process to our team or pack only a part of your stuff and let the rest be packed by our guys.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                                    3. How much time does household relocation take?
                                </button>
                            </h2>
                            <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                   If it is a local move then it would be completed on the same day. Long distance delivery depends on the destination location and travel route.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                                    4. What if my apartment has no lift?
                                </button>
                            </h2>
                            <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our movers are experienced in moving apartments where there is no elevator. Manpower will be planned before the move.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                                    5. Are weekend bookings available?
                                </button>
                            </h2>
                            <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. We provide our services including moving on weekends and public holidays based on availability.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="false" aria-controls="faq-collapse-6">
                                    6. Can you relocate some items instead of an entire household?
                                </button>
                            </h2>
                            <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-heading-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, certainly. We also handle part load shipments, single furniture items, appliances, and other small consignments.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="false" aria-controls="faq-collapse-7">
                                    7. Do you provide storage facilities?
                                </button>
                            </h2>
                            <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-heading-7" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                   Yes. We provide storage facilities for both short-term and long-term periods for those customers who require it.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="false" aria-controls="faq-collapse-8">
                                    8. What are the available payment methods?
                                </button>
                            </h2>
                            <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-heading-8" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We accept payment in cash, UPI, bank transfer, and other commonly used digital means of payment.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="false" aria-controls="faq-collapse-9">
                                    9. Can I track the progress of my relocation?
                                </button>
                            </h2>
                            <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-heading-9" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The support team informs you regularly about it by telephone or WhatsApp during the moving process.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-heading-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-10" aria-expanded="false" aria-controls="faq-collapse-10">
                                    10. Why do clients opt for <?= $company3 ?>?
                                </button>
                            </h2>
                            <div id="faq-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-heading-10" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our clients prefer us due to our preference for careful handling, fair prices, qualified staff, punctuality, and good client support compared to the promises made.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'faqs']); ?>
            </div>
        </div>
    </div>
</section>
