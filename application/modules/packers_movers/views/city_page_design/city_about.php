<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
include 'city_content.php';
?>



<section class="pm-city-details-section">
  <div class="container">
    <div class="row g-4">

      <!-- ============ LEFT: MAIN CONTENT (col-lg-8) ============ -->
      <div class="col-lg-8">

        <!-- Header Banner Carousel -->
        <div id="cityHeaderCarousel" class="carousel slide pm-city-banner-container mb-4" data-bs-ride="carousel" data-bs-interval="4000">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img loading="lazy" src="<?= base_url('assets/images/gallery/img1.jpg') ?>" alt="<?= $company3 ?> Shifting in <?= $city ?>" class="d-block w-100 h-100 pm-city-banner-img">
                </div>
                <div class="carousel-item h-100">
                    <img loading="lazy" src="<?= base_url('assets/images/gallery/img2.jpg') ?>" alt="<?= $company3 ?> Warehousing in <?= $city ?>" class="d-block w-100 h-100 pm-city-banner-img">
                </div>
                <div class="carousel-item h-100">
                    <img loading="lazy" src="<?= base_url('assets/images/gallery/img3.jpg') ?>" alt="<?= $company3 ?> Vehicle Shipping in <?= $city ?>" class="d-block w-100 h-100 pm-city-banner-img">
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cityHeaderCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- About Card -->
        <div class="pm-city-content-card">
            <!-- Eyebrow + Heading -->
            <div class="pm-city-section-eyebrow">Top Rated Relocation</div>
            <h2 class="pm-city-section-title">
                <span class="pm-city-accent"><?= $city ?></span> Packers and Movers
            </h2>
            <div class='city-prose'>
                <?php echo $htmlcontent;?>  
            </div>  

            <!-- Feature Pills -->
            <div class='city-feature-pills'>
                <div class='city-pill'><i class='bi bi-shield-check'></i> 100% Insured Shifting</div>
                <div class='city-pill'><i class='bi bi-truck'></i> Real-time GPS Tracking</div>
                <div class='city-pill'><i class='bi bi-box-seam'></i> Premium Multi-layer Packing</div>
                <div class='city-pill'><i class='bi bi-clock-history'></i> On-Time Delivery Guaranteed</div>
            </div>
        </div>

        <!-- Location Map Card -->
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

        <?php include 'city_faq.php'?>

      </div><!-- /col-lg-8 -->

      <!-- ============ RIGHT: SIDEBAR (col-lg-4) ============ -->
      <div class="col-lg-4">
        <?php include 'city_siderbar.php'; ?>
      </div>

    </div><!-- /row -->

    <!-- Dynamic Services Section based on City -->
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



