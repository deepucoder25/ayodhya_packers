<section class="home-slider-section">
  <div class="dot-pattern-overlay"></div>
  <div class="slider-wrapper d-flex align-items-center py-4">
    <div class="container">
      <div class="row align-items-center position-relative hero-content-row">
        
        <div class="col-lg-5 col-md-8 col-sm-9 col-10 text-start hero-text-col">
          <div class="hero-eyebrow">
            <span class="eyebrow-safe">SAFE.</span> 
            <span class="eyebrow-reliable">RELIABLE.</span> 
            <span class="eyebrow-ontime">ON TIME.</span>
          </div>
          <h1 class="hero-title">
            We Move Your <span class="accent-text">World</span> With Care
          </h1>
          <p class="hero-desc">
            Ayodhya Packers And Movers offers professional packing and moving services for your home, office, and vehicle – anywhere in India and worldwide.
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
              <span class="rating-num"><?= $ratingValue?>/5</span>
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
