<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Our Certificates & Documents',
    'description' => 'Explore verified work orders, registration documents, and official certifications of ' . $this->comp['company3'] . '.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Certificates & Documents']
    ]
]);

$certificates = [
    [
        'title' => 'GST Registration Certificate',
        'file_name' => 'GST_Registration_Certificate.pdf',
        'file_path' => 'assets/images/documents/gst_certificate.pdf',
        'color' => 'blue',
        'is_pink_hover' => true
    ],
    [
        'title' => 'MSME Registration Certificate',
        'file_name' => 'MSME_Registration_Certificate.pdf',
        'file_path' => 'assets/images/documents/msme_certificate.pdf',
        'color' => 'pink',
        'is_pink_hover' => false
    ],
    [
        'title' => 'Shop & Establishment Registration Certificate',
        'file_name' => 'Shop_Establishment_Certificate.pdf',
        'file_path' => 'assets/images/documents/shop_establised_certificate.pdf',
        'color' => 'orange',
        'is_pink_hover' => true
    ],
    [
        'title' => 'Official Quotation & Estimate',
        'file_name' => 'Quotation_No_20260165.pdf',
        'file_path' => 'assets/images/documents/certificate1.pdf',
        'color' => 'blue',
        'is_pink_hover' => true
    ],
    [
        'title' => 'Pre-Move Survey List',
        'file_name' => 'Survey_List_No_20260004.pdf',
        'file_path' => 'assets/images/documents/certificate2.pdf',
        'color' => 'pink',
        'is_pink_hover' => false
    ],
    [
        'title' => 'Inventory Packing List',
        'file_name' => 'Packing_List_No_20260018.pdf',
        'file_path' => 'assets/images/documents/certificate3.pdf',
        'color' => 'orange',
        'is_pink_hover' => true
    ],
    [
        'title' => 'Lorry Receipt (Consignment Note)',
        'file_name' => 'Lorry_Receipt_No_20260046.pdf',
        'file_path' => 'assets/images/documents/certificate4.pdf',
        'color' => 'purple',
        'is_pink_hover' => false
    ],
    [
        'title' => 'Tax Invoice & Shifting Bill',
        'file_name' => 'Tax_Invoice_Bill.pdf',
        'file_path' => 'assets/images/documents/certificate5.pdf',
        'color' => 'blue',
        'is_pink_hover' => true
    ],
    [
        'title' => 'Official Money Receipt',
        'file_name' => 'Money_Receipt_No_20260023.pdf',
        'file_path' => 'assets/images/documents/certificate6.pdf',
        'color' => 'pink',
        'is_pink_hover' => false
    ],
    [
        'title' => 'Vehicle Condition Report',
        'file_name' => 'Vehicle_Condition_Report_0001.pdf',
        'file_path' => 'assets/images/documents/certificate7.pdf',
        'color' => 'orange',
        'is_pink_hover' => true
    ],
    [
        'title' => 'Official Payment Voucher',
        'file_name' => 'Voucher_No_20260001.pdf',
        'file_path' => 'assets/images/documents/certificate8.pdf',
        'color' => 'purple',
        'is_pink_hover' => false
    ],
    [
        'title' => 'Transit Risk Assessment (TWS Form)',
        'file_name' => 'TWS_Declaration_Form.pdf',
        'file_path' => 'assets/images/documents/certificate9.pdf',
        'color' => 'blue',
        'is_pink_hover' => true
    ],
    [
        'title' => 'Freedom of Value (FOV) Risk Cover Certificate',
        'file_name' => 'FOV_Declaration_Form.pdf',
        'file_path' => 'assets/images/documents/certificate10.pdf',
        'color' => 'pink',
        'is_pink_hover' => false
    ],
    [
        'title' => 'No Objection Certificate (NOC) Form',
        'file_name' => 'NOC_Interstate_Transit_Form.pdf',
        'file_path' => 'assets/images/documents/certificate11.pdf',
        'color' => 'orange',
        'is_pink_hover' => true
    ],
    [
        'title' => 'Consignment Loading Slip',
        'file_name' => 'Loading_Slip_MP09HG6583.pdf',
        'file_path' => 'assets/images/documents/certificate12.pdf',
        'color' => 'purple',
        'is_pink_hover' => false
    ],
    [
        'title' => 'Official Company Letterhead Format',
        'file_name' => 'Company_Letterhead_Format.pdf',
        'file_path' => 'assets/images/documents/certificate13.pdf',
        'color' => 'blue',
        'is_pink_hover' => true
    ]
];
?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="nav-card-header-icon-wrap icon-purple" style="width: 50px; height: 50px; border-radius: 50%; background-color: rgba(var(--secondary-rgb), 0.08); color: var(--secondary-color); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h2 style="margin: 0; font-size: 28px; font-weight: 800; color: var(--accent-color);">Official Credentials &amp; Certifications</h2>
                            <div style="height: 3px; width: 60px; background: linear-gradient(90deg, var(--primary-color), var(--secondary-color)); margin-top: 5px; border-radius: 2px;"></div>
                        </div>
                    </div>

                    <p class="certificates-hero-desc">
                        At <strong><?= htmlspecialchars($this->comp['company3']) ?></strong>, we are committed to providing premium, highly secure, and verified relocation services. Our credentials represent our dedication to customer satisfaction, regulatory compliance, and high industry standards.
                    </p>
                    <p class="certificates-hero-desc mb-5">
                        Below is the comprehensive catalog of our verified corporate documents, client work orders, and official certifications. Click on the <strong>"View"</strong> button on any item to open the verified document.
                    </p>

                    <div class="row g-4">
                        <?php foreach ($certificates as $doc): ?>
                            <div class="col-md-6 col-12 d-flex">
                                <div class="doc-card w-100<?= $doc['is_pink_hover'] ? ' pink-hover' : '' ?>" style="padding: 30px 20px; border-radius: 16px;">
                                    <div class="doc-icon-wrap color-<?= $doc['color'] ?>" style="width: 55px; height: 55px; font-size: 26px; margin-bottom: 15px;">
                                        <i class="bi bi-file-earmark-pdf-fill"></i>
                                    </div>
                                    <h3 class="doc-title" style="font-size: 17px; margin-bottom: 6px;"><?= htmlspecialchars($doc['title']) ?></h3>
                                    <span class="doc-name" style="font-size: 12.5px; margin-bottom: 20px;" title="<?= htmlspecialchars($doc['file_name']) ?>"><?= htmlspecialchars($doc['file_name']) ?></span>
                                    <a href="<?= base_url($doc['file_path']) ?>" target="_blank" class="btn-view-doc" style="padding: 8px 20px; font-size: 13.5px;">
                                        <i class="bi bi-eye"></i> View Document
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="verification-credentials-box mt-5">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="cred-icon-wrap">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <div>
                                <h3 style="margin: 0; font-size: 20px; font-weight: 750; color: var(--accent-color);">Why Verify Credentials?</h3>
                                <p style="font-size: 13px; color: rgba(46, 56, 91, 0.6); margin: 0;">Securing your relocation with certified partners</p>
                            </div>
                        </div>

                        <div class="cred-list-item">
                            <div class="cred-icon-wrap" style="width: 36px; height: 36px; font-size: 16px;">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <div class="cred-info">
                                <h4>Protection Against Frauds</h4>
                                <p>Verifying registrations and work history ensures you are dealing with a legitimate corporate shifting provider, avoiding unauthorized local sub-contracting agents.</p>
                            </div>
                        </div>

                        <div class="cred-list-item">
                            <div class="cred-icon-wrap" style="width: 36px; height: 36px; font-size: 16px;">
                                <i class="bi bi-file-earmark-check-fill"></i>
                            </div>
                            <div class="cred-info">
                                <h4>Hassle-Free Transit Claims</h4>
                                <p>Our transparent claim procedures, combined with verified certifications, ensure that any insurance declarations or claims are settled without unexpected issues.</p>
                            </div>
                        </div>

                        <div class="cred-list-item">
                            <div class="cred-icon-wrap" style="width: 36px; height: 36px; font-size: 16px;">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div class="cred-info">
                                <h4>IBA Approved Shifting Standard</h4>
                                <p>We offer standardized document billing structure approved for claims under government departments, public sector undertakings, and bank staff relocations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'certificates']); ?>
            </div>
        </div>
    </div>
</section>
