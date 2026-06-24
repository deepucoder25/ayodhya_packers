<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Online Payment',
    'description' => 'Pay securely online for your shifting booking or settlement with ' . $company3 . '.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Online Payment']
    ]
]);
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-main-content">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="nav-card-header-icon-wrap icon-purple payment-title-icon">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <div>
                            <h2 class="payment-title">Secure Online Payment</h2>
                            <div class="payment-title-line"></div>
                        </div>
                    </div>

                    <p class="lead mb-4 payment-lead-text">
                        We offer fully secure, digital, and hassle-free payment options. Scan our official UPI QR codes below to pay securely through GPay, PhonePe, Paytm, or any BHIM UPI app.
                    </p>

                    <!-- QR Code Row -->
                    <div class="row g-4 justify-content-center mb-5">
                        <div class="col-md-6 col-12">
                            <div class="payment-qr-card primary-card text-center p-4">
                                <div class="qr-title-wrap mb-3">
                                    <span class="badge qr-badge qr-badge-primary px-3 py-2">PRIMARY QR CODE</span>
                                </div>
                                <div class="qr-img-placeholder mx-auto mb-3 d-flex align-items-center justify-content-center">
                                    <img src="<?= base_url('assets/images/qrcode/primary_qr.png') ?>" alt="Primary Payment QR Code" class="qr-img-fit">
                                </div>
                                <h4 class="qr-card-title">Scan to Pay (UPI)</h4>
                                <p class="text-muted qr-card-desc">Recommended for Instant GPay, PhonePe, Paytm, or BHIM Payments</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="payment-qr-card secondary-card text-center p-4">
                                <div class="qr-title-wrap mb-3">
                                    <span class="badge qr-badge qr-badge-secondary px-3 py-2">ALTERNATE QR CODE</span>
                                </div>
                                <div class="qr-img-placeholder mx-auto mb-3 d-flex align-items-center justify-content-center">
                                    <img src="<?= base_url('assets/images/qrcode/secondary_qr.png') ?>" alt="Secondary Payment QR Code" class="qr-img-fit">
                                </div>
                                <h4 class="qr-card-title">Alternate Scan Option</h4>
                                <p class="text-muted qr-card-desc">Backup QR code for payments and bank transfers</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bank Details Section -->
                    <div class="payment-bank-details-card mb-5 p-4">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <div class="bank-title-icon-wrap d-flex align-items-center justify-content-center">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <h4 class="bank-section-title">Our Bank Detail:</h4>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="bank-detail-item">
                                    <span class="bank-detail-label">Beneficiary Name</span>
                                    <strong class="bank-detail-value">Ayodhya Packers And Movers</strong>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="bank-detail-item">
                                    <span class="bank-detail-label">Bank Name</span>
                                    <strong class="bank-detail-value">UCO BANK</strong>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="bank-detail-item">
                                    <span class="bank-detail-label">Bank A/C No.</span>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <strong class="bank-detail-value font-monospace">22830210002674</strong>
                                        <button class="btn btn-copy" onclick="copyToClipboard('22830210002674', 'copy-ac-text')" title="Copy Account Number">
                                            <i class="bi bi-clipboard"></i> <span id="copy-ac-text">Copy</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="bank-detail-item">
                                    <span class="bank-detail-label">Bank IFSC Code</span>
                                    <div class="d-flex align-items-center justify-content-between mt-1">
                                        <strong class="bank-detail-value font-monospace">UCBA0002283</strong>
                                        <button class="btn btn-copy" onclick="copyToClipboard('UCBA0002283', 'copy-ifsc-text')" title="Copy IFSC Code">
                                            <i class="bi bi-clipboard"></i> <span id="copy-ifsc-text">Copy</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Direct Bank Transfer & Invoice Section -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-6 col-12">
                            <div class="quotation-sample-card p-4">
                                <h4 class="section-card-title">
                                    <i class="bi bi-file-earmark-text-fill text-primary"></i> Quotation / Invoice Format
                                </h4>
                                <div class="section-card-line primary"></div>
                                <p class="text-muted mb-3 section-card-desc">
                                    Refer to your official quotation/invoice document to find your payable amount and booking reference ID.
                                </p>
                                <div class="quotation-img-placeholder mx-auto d-flex align-items-center justify-content-center">
                                    <img src="<?= base_url('assets/images/qrcode/quotation_top.jpg') ?>" alt="Official Quotation Sample" class="quotation-img-fit">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="bank-details-card p-4">
                                <h4 class="section-card-title">
                                    <i class="bi bi-bank2 text-secondary"></i> Bank Details &amp; UPI QR Format
                                </h4>
                                <div class="section-card-line secondary"></div>
                                <p class="text-muted mb-3 section-card-desc">
                                    Refer to the bottom section of your quotation to find verified UPI IDs and official bank details.
                                </p>
                                <div class="quotation-img-placeholder mx-auto d-flex align-items-center justify-content-center">
                                    <img src="<?= base_url('assets/images/qrcode/quotation_sample.jpg') ?>" alt="Official Bank and UPI Details Format" class="quotation-img-fit">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Steps / Instructions -->
                    <div class="payment-instructions-box p-4">
                        <h3 class="instructions-title">
                            <i class="bi bi-info-circle-fill text-primary"></i> Payment Instructions &amp; Steps
                        </h3>
                        <div class="instructions-title-line"></div>

                        <div class="payment-steps-list d-flex flex-column gap-3">
                            <div class="payment-step-item d-flex gap-3">
                                <div class="step-number primary">1</div>
                                <div class="step-content">
                                    <h5 class="step-title">Open Shifting Receipt / Invoice</h5>
                                    <p class="text-muted step-text">Make sure you have your Booking ID, Shifting Quotation, or final Tax Invoice handy to refer to the exact payable amount.</p>
                                </div>
                            </div>
                            
                            <div class="payment-step-item d-flex gap-3">
                                <div class="step-number secondary">2</div>
                                <div class="step-content">
                                    <h5 class="step-title">Scan &amp; Authorize</h5>
                                    <p class="text-muted step-text">Scan either the Primary or Alternate QR Code using your preferred UPI app. Double check the official company name (<strong><?= htmlspecialchars($company3) ?></strong>) on your app screen before entering the amount.</p>
                                </div>
                            </div>

                            <div class="payment-step-item d-flex gap-3">
                                <div class="step-number primary">3</div>
                                <div class="step-content">
                                    <h5 class="step-title">Share Payment Confirmation</h5>
                                    <p class="text-muted step-text">Once the transaction is successful, take a screenshot of the payment receipt and share it with your shifting representative or email it to <strong><?= $supportmail ?></strong> along with your booking reference.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Secure Payment Banner -->
                    <div class="secure-badge-card mt-4 p-3 d-flex align-items-center gap-3">
                        <i class="bi bi-shield-fill-check text-success secure-badge-icon"></i>
                        <div>
                            <h5 class="secure-badge-title">100% Secure Shifting Transactions</h5>
                            <p class="text-muted secure-badge-desc">Our payment processing uses end-to-end encrypted bank network rails. Your transactions are fully verified and safe.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
function copyToClipboard(text, btnId) {
    navigator.clipboard.writeText(text).then(function() {
        const btn = document.getElementById(btnId);
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="bi bi-check-lg"></i> Copied!';
        btn.classList.add('copied');
        setTimeout(function() {
            btn.innerHTML = originalText;
            btn.classList.remove('copied');
        }, 1500);
    }).catch(function(err) {
        console.error('Could not copy text: ', err);
    });
}
</script>
