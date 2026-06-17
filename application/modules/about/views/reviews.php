<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Customer Reviews',
    'description' => 'Read what our verified clients say about our packing and shifting quality, staff behaviour, and delivery punctuality.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Reviews']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        
        <?php if($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show rounded-4 mb-4 text-center" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> <?= $this->session->flashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2>Reviews &amp; Customer Feedback</h2>
                    <p class="lead">
                        We take customer feedback very seriously. Below are genuine shifting reviews shared by families, companies, and individuals who chose our packers and movers services.
                    </p>
                    <div class="text-center my-4">
                        <button class="btn btn-primary btn-lg fw-bold rounded-pill px-4 shadow" data-bs-toggle="modal" data-bs-target="#reviewModal">
                            <i class="bi bi-pencil-square me-2"></i> Share Your Experience
                        </button>
                    </div>
                    <div class="mt-4">
                        <?php if (!empty($reviews)): ?>
                            <?php foreach (array_reverse($reviews) as $r): ?>
                                <div class="about-testimonial-card mb-4">
                                    <div class="rating">
                                        <?php for($i=1; $i<=5; $i++): ?>
                                            <i class="bi bi-star<?= $i <= ($r['rating'] ?? 5) ? '-fill' : '' ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <p>
                                        "<?= htmlspecialchars($r['review']) ?>"
                                    </p>
                                    <div class="user-details">
                                        <div>
                                            <strong><?= htmlspecialchars($r['name']) ?></strong>
                                            <small><?= htmlspecialchars($r['city']) ?> • <?= date('M d, Y', strtotime($r['created_at'])) ?></small>
                                        </div>
                                        <span class="badge about-bg-success-soft">
                                            <i class="bi bi-patch-check-fill me-1"></i> Verified
                                        </span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <div class="text-center p-5 bg-light rounded-4">
                                <i class="bi bi-chat-left-dots display-1 text-muted mb-3 d-block"></i>
                                <p class="text-muted fs-5">No reviews yet. Be the first to share your experience!</p>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'reviews']); ?>
            </div>
        </div>
    </div>
</section>
