<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>



<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-8">
        <div id="cityHeaderCarousel" class="carousel slide pm-city-banner-container mb-4" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="<?= base_url('assets/images/gallery/img1.jpg') ?>" alt="<?= $company3 ?> Shifting in <?= $city ?>" class="d-block w-100 h-100 pm-city-banner-img" width="800" height="380">
                </div>
                <div class="carousel-item h-100">
                    <img loading="lazy" src="<?= base_url('assets/images/gallery/img2.jpg') ?>" alt="<?= $company3 ?> Warehousing in <?= $city ?>" class="d-block w-100 h-100 pm-city-banner-img" width="800" height="380">
                </div>
                <div class="carousel-item h-100">
                    <img loading="lazy" src="<?= base_url('assets/images/gallery/img3.jpg') ?>" alt="<?= $company3 ?> Vehicle Shipping in <?= $city ?>" class="d-block w-100 h-100 pm-city-banner-img" width="800" height="380">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="pm-city-content-card">
            <div class="pm-city-section-eyebrow">Top Rated Relocation</div>
            <h2 class="pm-city-section-title">Best Packers and Movers in 
                <span class="pm-city-accent"><?= $city ?></span> | Reliable Packers and Movers
            </h2>
            <div class='city-prose'>
                <?php echo $htmlcontent;?>  
            </div>  
            <div class='city-feature-pills'>
                <div class='city-pill'><i class='bi bi-shield-check'></i> 100% Insured Shifting</div>
                <div class='city-pill'><i class='bi bi-truck'></i> Real-time GPS Tracking</div>
                <div class='city-pill'><i class='bi bi-box-seam'></i> Premium Multi-layer Packing</div>
                <div class='city-pill'><i class='bi bi-clock-history'></i> On-Time Delivery Guaranteed</div>
            </div>
        </div>
        <div class="city-map-card mt-4">
            <h3 class="city-section-title-sm">
                <i class="bi bi-map-fill me-2 text-success"></i>Service Area &amp; Location Map
            </h3>
            <div class="pm-city-map mt-3">
                <?php include 'city_map.php';?>
            </div>
        </div>

        <?php echo $htmlcontent1;?>   
        <?php echo $htmlcontent2;?>      
        <?php include 'city_reviews.php'?>

        <!-- Client Certificates & Work Orders Section inside col-8 -->
        <div class="city-documents-card mt-4 mb-4">
            <h3 class="city-section-title-sm mb-3">
                <i class="bi bi-shield-check text-primary me-2"></i>Client &amp; Work Orders
            </h3>
            <p class="text-muted mb-4" style="font-size: 14px;">Explore our trusted client list and recent work order documents in <?= htmlspecialchars($city) ?>.</p>
            
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
            <div class="row g-3">
                <?php foreach ($work_orders as $doc): ?>
                    <div class="col-md-6 col-12 d-flex">
                        <div class="doc-card w-100<?= $doc['is_pink_hover'] ? ' pink-hover' : '' ?>" style="padding: 24px 16px; border-radius: 16px;">
                            <div class="doc-icon-wrap color-<?= $doc['color'] ?>" style="width: 50px; height: 50px; font-size: 24px; margin-bottom: 12px;">
                                <i class="bi bi-file-earmark-pdf-fill"></i>
                            </div>
                            <h4 class="doc-title" style="font-size: 16px; margin-bottom: 4px;"><?= htmlspecialchars($doc['title']) ?></h4>
                            <span class="doc-name" style="font-size: 12px; margin-bottom: 16px;" title="<?= htmlspecialchars($doc['file_name']) ?>"><?= htmlspecialchars($doc['file_name']) ?></span>
                            <a href="<?= base_url($doc['file_path']) ?>" target="_blank" class="btn-view-doc" style="padding: 6px 18px; font-size: 13px;">
                                <i class="bi bi-eye"></i> View
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="text-center mt-4">
                <a href="<?= site_url('certificates') ?>" class="btn-view-all-docs" style="padding: 10px 24px; font-size: 14px;">
                    <span>View All Documents</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <?php include 'city_faq.php'?>

      </div><!-- /col-lg-8 -->
      <div class="col-lg-4">
        <?php include 'city_siderbar.php'; ?>
      </div>

    </div><!-- /row -->
    <?php 
    $allowed_cities = [
        // 'aurangabad', 'chandigarh', 'dhanbad', 'gwalior', 'hyderabad', 'jodhpur',
        // 'kota', 'meerut', 'navi mumbai', 'rajkot', 'siliguri', 'vijayawada',
        // 'ahmedabad', 'bangalore', 'chennai', 'faridabad', 'gurugram', 'indore',
        // 'jamshedpur', 'mumbai', 'ranchi', 'surat', 'visakhapatnam',
        // 'allahabad', 'bareilly', 'coimbatore', 'ghaziabad', 'howrah', 'jabalpur', 'ludhiana',
        // 'nagpur', 'pune', 'solapur', 'vadodara',
        // 'amritsar', 'bhopal', 'delhi', 'hubli-dharwad', 'jaipur', 'kolkata', 'madurai', 'nashik',
        // 'raipur', 'srinagar'
    ];
    
    if(in_array(strtolower(trim($city)), $allowed_cities)): 
    ?>
        <?php include 'city_service.php'; ?>
    <?php endif; ?>

  </div><!-- /container -->
</section>



