<section class="home-slider-section pm-city-slider">
  <div class="dot-pattern-overlay"></div>
  <div class="slider-wrapper d-flex align-items-center py-4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="bc-nav pm-city-slider-nav">
            <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill"></i>Home</a>
            <span class="bc-sep">›</span>
            <a href="<?= site_url('our-branches') ?>">Our Branches</a>
            <span class="bc-sep">›</span>
            <span class="bc"><?= $state ?></span>
            <span class="bc-sep">›</span>
            <span class="bc-current"><?= $city ?></span>
          </nav>
        </div>
      </div>

      <div class="row align-items-center position-relative hero-content-row">
        
        <div class="col-lg-5 col-md-8 col-sm-9 col-10 text-start hero-text-col">
          <h1 class="hero-title">
            Best Packers and Movers in <span class="accent-text"><?= $city ?></span>
          </h1>
          <p class="hero-desc">
            Best movers & packers in <?= $city ?>. Safe, affordable, and reliable packing, moving and storage services. Get your free quote now.
          </p>
          
          <div class="hero-buttons-flex">
            <a href="#" class="btn-hero btn-quote" data-bs-toggle="modal" data-bs-target="#qteModal">
              <span>Get a Free Quote</span>
              <div class="btn-arrow-circle">
                <i class="bi bi-arrow-right"></i>
              </div>
            </a>
            <a href="<?= site_url('our-services') ?>" class="btn-hero btn-services">
              <span>Our Services</span>
              <div class="btn-arrow-circle">
                <i class="bi bi-arrow-right"></i>
              </div>
            </a>
          </div>
          
          <div class="hero-trust-rating">
            <div class="avatar-group">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="avatar-img" width="40" height="40">
              <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="User" class="avatar-img" width="40" height="40">
              <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="User" class="avatar-img" width="40" height="40">
              <img src="https://randomuser.me/api/portraits/men/62.jpg" alt="User" class="avatar-img" width="40" height="40">
            </div>
            <div class="trust-rating-text">
              <span class="rating-num">4.8/5</span>
              <span class="rating-lbl">Trusted by<br>10,000+ Customers</span>
            </div>
          </div>
        </div>
        
      </div>

      <div class="row hero-quote-row">
        <div class="col-12">
          <?php $this->load->view('contacts/quoteform'); ?>
        </div>
      </div>

    </div>
    
  </div>
</section>

