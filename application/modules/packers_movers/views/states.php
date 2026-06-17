<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Our Branches',
    'description' => $company3 . ' Packers and Movers — Delivering trusted relocation services across 20+ states in India.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "code" => "MP",
        "icon" => "bi-building-fill",
        "category" => "Madhya Pradesh",
        "link" => "madhya-pradesh",
        "image" => "assets/images/state/madhya-pradesh.jpg",
        "subtitle" => "Bhopal, Indore, Gwalior, Jabalpur, Satna & more"
    ],
    [
        "code" => "UP",
        "icon" => "bi-bank",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh",
        "image" => "assets/images/state/uttar-pradesh.jpg",
        "subtitle" => "Lucknow, Noida, Kanpur, Ghaziabad & more"
    ],
];
?>

<!-- Branch Section -->
<section class="portfolio-area py-5 bg-light">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6">
                Our Presence Across <span class="pm-states-title-span text-primary">India</span>
            </h2>
            <div class="about-title-underline mx-auto mb-3" style="width: 80px; height: 4px; background: linear-gradient(90deg, var(--primary-color) 0%, var(--secondary-color) 50%, var(--tertiary-color) 100%); border-radius: 2px;"></div>
            <p class="text-muted fs-5">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row g-4">

            <?php foreach ($state as $item): ?>
                
                <!-- 4 Columns in One Row on Desktop -->
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="pm-state-card h-100 d-flex flex-column">
                        <!-- Card Header with image background -->
                        <div class="state-card-header d-flex align-items-center justify-content-center position-relative">
                            <img src="<?= base_url($item['image']) ?>" alt="<?= htmlspecialchars($item['category']) ?>" class="state-card-bg-img position-absolute w-100 h-100 object-fit-cover">
                            <div class="state-card-header-overlay position-absolute w-100 h-100"></div>
                            
                            <span class="state-badge"><?= htmlspecialchars($item['code']) ?></span>
                            <div class="state-icon-wrap d-flex align-items-center justify-content-center position-relative">
                                <i class="bi <?= $item['icon'] ?>"></i>
                            </div>
                        </div>

                        <!-- Card Body Content -->
                        <div class="state-card-body flex-grow-1 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h5 class="fw-bold mb-1 state-name">
                                    <a href="<?= site_url($item['link']) ?>" class="text-decoration-none">
                                        <?= htmlspecialchars($item['category']) ?>
                                    </a>
                                </h5>
                                <p class="state-desc text-muted mb-0"><?= htmlspecialchars($item['subtitle']) ?></p>
                            </div>
                            <div class="pt-3 border-top d-flex align-items-center justify-content-between">
                                <a href="<?= site_url($item['link']) ?>" class="state-action-link text-decoration-none fw-semibold small">
                                    View Branches
                                </a>
                                <a href="<?= site_url($item['link']) ?>" class="state-action-btn d-inline-flex align-items-center justify-content-center">
                                    <i class="bi bi-arrow-right-short"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>



