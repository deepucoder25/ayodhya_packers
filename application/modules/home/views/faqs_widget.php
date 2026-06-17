<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$faqs = [
    [
        'question' => 'What services do you provide?',
        'answer' => 'We provide a wide range of moving services including home shifting, office relocation, vehicle transportation, packing & unpacking, loading & unloading, warehousing, and international moving.'
    ],
    [
        'question' => 'How do I get a quote for my move?',
        'answer' => 'You can request a quote by filling out our online form or by contacting our customer support team.'
    ],
    [
        'question' => 'Do you provide packing materials?',
        'answer' => 'Yes, we provide high-quality packing materials such as corrugated boxes, bubble wraps, stretch film, and adhesive tapes as part of our service.'
    ],
    [
        'question' => 'Is my stuff insured during the move?',
        'answer' => 'Yes, we offer comprehensive transit insurance options to ensure your belongings are fully protected against any unforeseen circumstances.'
    ],
    [
        'question' => 'How long does a typical move take?',
        'answer' => 'The duration depends on the volume of goods and distance. Local moves usually take 3 to 8 hours, whereas domestic relocations depend on the destination city.'
    ],
    [
        'question' => 'Do you offer local and interstate moving?',
        'answer' => 'Yes, we offer both local home shifting within the city and interstate packers and movers services across India.'
    ]
];
?>

<section class="faq-section py-5 position-relative overflow-hidden">
    <div class="faq-bg-decor faq-bg-decor-left d-none d-lg-block">
        <svg width="240" height="180" viewBox="0 0 240 180" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="faq-dots-left" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="var(--primary-color)" opacity="0.12" />
            </pattern>
            <rect x="0" y="40" width="80" height="100" fill="url(#faq-dots-left)" />
            <path d="M 60 140 C 90 90, 110 90, 130 60" stroke="var(--secondary-color)" stroke-width="1.8" stroke-dasharray="3 5" stroke-linecap="round" />
            <g transform="translate(120, 40) scale(0.9)">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="var(--secondary-color)" />
            </g>
        </svg>
    </div>
    <div class="faq-bg-decor faq-bg-decor-right d-none d-lg-block">
        <svg width="240" height="180" viewBox="0 0 240 180" fill="none" xmlns="http://www.w3.org/2000/svg">
            <pattern id="faq-dots-right" x="0" y="0" width="16" height="16" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="var(--secondary-color)" opacity="0.12" />
            </pattern>
            <rect x="160" y="40" width="80" height="100" fill="url(#faq-dots-right)" />
            <path d="M 110 120 C 140 120, 160 80, 190 70" stroke="var(--primary-color)" stroke-width="1.8" stroke-dasharray="3 5" stroke-linecap="round" />
            <g transform="translate(185, 50) rotate(25) scale(0.9)">
                <path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z" fill="var(--primary-color)" />
            </g>
        </svg>
    </div>

    <div class="container position-relative about-z2">
        <div class="section-header text-center mb-5">
            <div class="srv-eyebrow mb-3">
                <span class="reviews-heading-line left">
                    <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="2" x2="22" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                        <line x1="22" y1="2" x2="45" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <span class="srv-eyebrow-text px-3 d-inline-flex align-items-center">
                    FAQS 
                    <svg width="20" height="16" viewBox="0 0 24 24" fill="var(--primary-color)" class="ms-2">
                        <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z" />
                    </svg>
                </span>
                <span class="reviews-heading-line right">
                    <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="2" x2="22" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                        <line x1="22" y1="2" x2="45" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            <h2 class="srv-main-title">Got Questions? <span class="highlight-pink-text">We've Got Answers!</span></h2>
            <p class="srv-subtitle mx-auto">Find answers to common questions about our moving services, process, safety and more.</p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-lg-6 col-md-12">
                <div class="faq-accordion" id="faqAccordionLeft">
                    <?php foreach ([0, 2, 4] as $index): ?>
                        <?php $faq = $faqs[$index]; ?>
                        <?php $isOpen = ($index === 0); ?>
                        <div class="faq-item">
                            <h4 class="faq-item-header">
                                <button class="faq-btn <?= $isOpen ? '' : 'collapsed' ?>" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#faq-collapse-<?= $index ?>" 
                                        aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" 
                                        aria-controls="faq-collapse-<?= $index ?>">
                                    <span class="faq-num"><?= $index + 1 ?>.</span>
                                    <span class="faq-ques-text"><?= htmlspecialchars($faq['question']) ?></span>
                                    <span class="faq-icon-circle"></span>
                                </button>
                            </h4>
                            <div id="faq-collapse-<?= $index ?>" 
                                 class="accordion-collapse collapse <?= $isOpen ? 'show' : '' ?>" 
                                 data-bs-parent="#faqAccordionLeft">
                                <div class="faq-item-body">
                                    <p class="faq-answer-text"><?= htmlspecialchars($faq['answer']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="faq-accordion" id="faqAccordionRight">
                    <?php foreach ([1, 3, 5] as $index): ?>
                        <?php $faq = $faqs[$index]; ?>
                        <?php $isOpen = false; ?>
                        <div class="faq-item">
                            <h4 class="faq-item-header">
                                <button class="faq-btn <?= $isOpen ? '' : 'collapsed' ?>" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#faq-collapse-<?= $index ?>" 
                                        aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" 
                                        aria-controls="faq-collapse-<?= $index ?>">
                                    <span class="faq-num"><?= $index + 1 ?>.</span>
                                    <span class="faq-ques-text"><?= htmlspecialchars($faq['question']) ?></span>
                                    <span class="faq-icon-circle"></span>
                                </button>
                            </h4>
                            <div id="faq-collapse-<?= $index ?>" 
                                 class="accordion-collapse collapse <?= $isOpen ? 'show' : '' ?>" 
                                 data-bs-parent="#faqAccordionRight">
                                <div class="faq-item-body">
                                    <p class="faq-answer-text"><?= htmlspecialchars($faq['answer']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="faq-cta-banner">
            <div class="faq-cta-left">
                <div class="faq-cta-left-bg">
                    <svg viewBox="0 0 100 100" preserveAspectRatio="none" fill="var(--accent-color)" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0 0 L 80 0 C 92 0, 96 35, 84 65 C 76 85, 70 100, 68 100 L 0 100 Z" />
                    </svg>
                </div>
                <div class="faq-cta-left-content">
                    <div class="faq-cta-phone-circle">
                        <i class="bi bi-headset"></i>
                    </div>
                    <div class="faq-cta-left-text">
                        <span class="faq-cta-help-small">Still have questions?</span>
                        <span class="faq-cta-help-large highlight-pink-text">We're here to help!</span>
                    </div>
                </div>
                <div class="faq-cta-left-divider"></div>
            </div>
            <div class="faq-cta-right">
                <div class="faq-cta-channel">
                    <a href="<?= $phonehtml ?>" class="faq-channel-icon-circle bg-secondary">
                        <i class="bi bi-telephone-fill"></i>
                    </a>
                    <div class="faq-channel-details">
                        <span class="faq-channel-label">Call Us</span>
                        <a href="<?= $phonehtml ?>" class="faq-channel-val"><?= $phone ?></a>
                    </div>
                </div>
                <div class="faq-channel-divider"></div>
                <div class="faq-cta-channel">
                    <a href="mailto:<?= $mail ?>" class="faq-channel-icon-circle bg-primary">
                        <i class="bi bi-envelope-fill"></i>
                    </a>
                    <div class="faq-channel-details">
                        <span class="faq-channel-label">Email Us</span>
                        <a href="<?= $mailhtml ?>" class="faq-channel-val"><?= $mail ?></a>
                    </div>
                </div>
                <div class="faq-channel-divider"></div>
                <div class="faq-cta-channel">
                    <a href="<?= $whatsapphtml ?>" target="_blank" class="faq-channel-icon-circle bg-success-theme">
                        <i class="bi bi-chat-dots-fill"></i>
                    </a>
                    <div class="faq-channel-details">
                        <span class="faq-channel-label">Live Chat</span>
                        <a href="<?= $whatsapphtml ?>" target="_blank" class="faq-channel-val">Chat with our support team</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
