<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Photo Gallery',
    'description' => 'Explore visual highlights of our packaging quality, warehouse storage, specialized container carriers, and relocation operations.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Photo Gallery']
    ]
]);
?>

<!-- Main Page Content Section -->
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <!-- Left Side Content -->
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2 class="service-section-title">Our Relocation Operations in Action</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            Take a look at our on-field photos demonstrating our dedication to safety, careful packaging, and organized logistics. Our photo gallery highlights our packing standards, secure warehouse storage, and specialized fleets.
                        </p>
                    </div>

                    <?php
                    $gallery_photos = [
                        [
                            'img' => 'img1.jpg',
                            'badge' => 'Bike Shifting',
                            'title' => 'Scratch-Free Two-Wheeler Packing',
                            'desc' => 'Secure cardboard wrapping and stretch film applied to scooters and bikes before transit.'
                        ],
                        [
                            'img' => 'img2.jpg',
                            'badge' => 'Fragile Packing',
                            'title' => 'TV & Glass Protection',
                            'desc' => 'Multi-layer bubble wrapping and edge protectors applied to flat screens, mirrors, and glass panels.'
                        ],
                        [
                            'img' => 'img3.jpg',
                            'badge' => 'Household Shifting',
                            'title' => 'Sofa & Furniture Wrapping',
                            'desc' => 'Thick protective sheets and stretch wrap applied to couches, sofas, and leather seating to prevent transit damage.'
                        ],
                        [
                            'img' => 'img4.jpg',
                            'badge' => 'Carton Stacking',
                            'title' => 'Systematic Box Stacking',
                            'desc' => 'Double-walled cardboard boxes neatly taped and stacked, ready for secure placement inside transport vehicles.'
                        ],
                        [
                            'img' => 'img5.jpg',
                            'badge' => 'Glass Protection',
                            'title' => 'Heavy Wardrobe Packing',
                            'desc' => 'Custom wrapping and clear labeling for heavy wooden wardrobes and large fragile mirrors to ensure careful handling.'
                        ],
                        [
                            'img' => 'img6.jpg',
                            'badge' => 'Cargo Loading',
                            'title' => 'Professional Truck Stacking',
                            'desc' => 'Neat and balanced loading of household goods and furniture inside enclosed cargo containers.'
                        ],
                        [
                            'img' => 'img7.jpg',
                            'badge' => 'Household Moving',
                            'title' => 'Enclosed Cargo Loading',
                            'desc' => 'Our experienced ground crew loading furniture and cargo onto container trucks for secure transit.'
                        ],
                        [
                            'img' => 'img8.jpg',
                            'badge' => 'Domestic Relocation',
                            'title' => 'Luggage & Box Loading',
                            'desc' => 'Suitcases, cardboard boxes, and household appliances securely loaded and locked inside our transport vehicles.'
                        ],
                        [
                            'img' => 'img9.jpg',
                            'badge' => 'Appliance Packing',
                            'title' => 'Washing Machine Bubble Wrap',
                            'desc' => 'Thick shock-absorbing bubble wrap and stretch film applied to laundry machines and kitchen appliances.'
                        ]
                    ];
                    ?>

                    <!-- Photo Gallery Grid -->
                    <div class="row">
                        <?php foreach ($gallery_photos as $photo): ?>
                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative" style="height: 240px; overflow: hidden;">
                                    <img loading="lazy" src="<?= base_url('assets/images/gallery/' . $photo['img']) ?>" class="w-100 h-100 img-fluid gallery-img" alt="<?= $photo['title'] ?>" style="object-fit: cover; transition: transform 0.4s ease;">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm"><?= $photo['badge'] ?></span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm"><?= $photo['title'] ?></h5>
                                    <p class="small text-muted mb-0"><?= $photo['desc'] ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'photo-gallery']); ?>
            </div>
        </div>
    </div>
</section>

