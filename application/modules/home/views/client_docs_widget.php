<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
if (!isset($work_orders)) {
    $work_orders = [
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
            'title' => 'Shop & Establishment Certificate',
            'file_name' => 'Shop_Establishment_Certificate.pdf',
            'file_path' => 'assets/images/documents/shop_establised_certificate.pdf',
            'color' => 'orange',
            'is_pink_hover' => true
        ],
        [
            'title' => 'Official Quotation & Estimate',
            'file_name' => 'Quotation_No_20260165.pdf',     
            'file_path' => 'assets/images/documents/certificate1.pdf',
            'color' => 'purple',
            'is_pink_hover' => false
        ]
    ];
}
?>

<section class="client-docs-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <div class="srv-eyebrow mb-3 justify-content-center d-flex align-items-center">
                <span class="reviews-heading-line left">
                    <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="2" x2="22" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                        <line x1="22" y1="2" x2="45" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
                <span class="srv-eyebrow-text px-3 d-inline-flex align-items-center">
                    CLIENT CREDENTIALS
                </span>
                <span class="reviews-heading-line right">
                    <svg width="45" height="4" viewBox="0 0 45 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="2" x2="22" y2="2" stroke="var(--secondary-color)" stroke-width="1.8" stroke-linecap="round" />
                        <line x1="22" y1="2" x2="45" y2="2" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </span>
            </div>
            
            <h2 class="srv-main-title">Client & <span class="highlight-pink-text">Work Orders</span></h2>
            <p class="srv-subtitle mx-auto text-muted">Explore our trusted client list and recent work order documents.</p>
        </div>  

        <div class="row g-4 justify-content-center">
            <?php foreach ($work_orders as $doc): ?>
                <div class="col-lg-3 col-md-6 col-12 d-flex">
                    <div class="doc-card w-100<?= $doc['is_pink_hover'] ? ' pink-hover' : '' ?>">
                        <div class="doc-icon-wrap color-<?= $doc['color'] ?>">
                            <i class="bi bi-file-earmark-pdf-fill"></i>
                        </div>
                        <h3 class="doc-title"><?= htmlspecialchars($doc['title']) ?></h3>
                        <span class="doc-name" title="<?= htmlspecialchars($doc['file_name']) ?>"><?= htmlspecialchars($doc['file_name']) ?></span>
                        <a href="<?= base_url($doc['file_path']) ?>" target="_blank" class="btn-view-doc">
                            <i class="bi bi-eye"></i> View
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center docs-cta-wrap">
            <a href="<?= site_url('certificates') ?>" class="btn-view-all-docs">
                <span>View All Documents</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
