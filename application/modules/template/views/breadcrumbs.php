<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Shared Premium Clean Dashboard-Style Breadcrumbs Component
 * Expected variables:
 * - $title: String
 * - $description: String (optional)
 * - $breadcrumbs: Array of breadcrumb arrays: [['label' => '...', 'url' => '...', 'icon' => '...']]
 */
?>
<section class="service-breadcrumbs position-relative overflow-hidden py-4">
    <div class="container position-relative bc-content-z">
        <div class="row align-items-center">
            <!-- Left Side: Title & Description -->
            <div class="col-md-7 col-12">
                <h1 class="bc-title text-white fw-bold m-0"><?= $title ?></h1>
                <?php if (!empty($description)): ?>
                    <p class="bc-desc text-white-50 mt-1 mb-0 fs-6">
                        <?= $description ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <!-- Right Side: Breadcrumbs Navigation Badge -->
            <div class="col-md-5 col-12 d-flex justify-content-md-end justify-content-start mt-3 mt-md-0">
                <?php if (!empty($breadcrumbs)): ?>
                    <nav class="bc-nav-pill d-inline-flex align-items-center flex-wrap gap-2">
                        <?php foreach ($breadcrumbs as $index => $bc): ?>
                            <?php if ($index > 0): ?>
                                <i class="bi bi-chevron-right bc-sep"></i>
                            <?php endif; ?>
                            
                            <?php if ($index === count($breadcrumbs) - 1 || empty($bc['url'])): ?>
                                <span class="bc-current"><?= htmlspecialchars($bc['label']) ?></span>
                            <?php else: ?>
                                <a href="<?= $bc['url'] ?>" class="bc-link d-inline-flex align-items-center gap-1">
                                    <?php if (!empty($bc['icon'])): ?>
                                        <i class="<?= $bc['icon'] ?>"></i>
                                    <?php endif; ?>
                                    <span><?= htmlspecialchars($bc['label']) ?></span>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
