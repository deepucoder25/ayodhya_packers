<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
      $active_tab = 'home';
  } elseif ($class === 'about' || $class === 'blog' || in_array($segment1, ['about-us', 'testimonials', 'blog', 'reviews', 'faqs', 'packing-tips', 'privacy-policy', 'terms-and-conditions'])) {
      $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'packing-and-moving', 'loading-and-unloading', 'residential-relocation', 'home-relocation', 'office-relocation', 'car-transportation', 'bike-transportation', 'international-transportation', 'warehousing-and-storage', 'transport-insurance', 'heavy-machinery-and-shifting'])) {
      $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
      $active_tab = 'locations';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
      $active_tab = 'contact';
  }
  ?>

  <div class="top-bar">
    <div class="container">
      <div class="top-bar-desktop d-none d-lg-flex justify-content-between align-items-center">
        <div class="top-bar-left d-flex align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-2">
            <i class="bi bi-telephone"></i> <span><?= $phone ?></span>
          </a>
        </div>
        
        <div class="top-bar-middle d-flex align-items-center gap-3">
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-shield-check text-primary-light"></i> <span>Verified & Trusted</span>
          </span>
          <span class="divider-line">|</span>
          <span class="top-badge-text d-flex align-items-center gap-2">
            <i class="bi bi-people"></i> <span><?= $happyClients ?> Happy Customers</span>
          </span>
        </div>
        
        <div class="top-bar-right d-flex align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF ON YOUR FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Reviews
          </span>
        </div>
      </div>

      <div class="top-bar-mobile d-lg-none flex-column gap-2 py-1">
        <div class="d-flex justify-content-center align-items-center gap-3">
          <a href="<?= $mailhtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-envelope"></i> <span><?= $mail ?></span>
          </a>
          <span class="divider-line">|</span>
          <a href="<?= $phonehtml ?>" class="d-flex align-items-center gap-1">
            <i class="bi bi-telephone"></i> <span><?= $phone ?></span>
          </a>
        </div>
        <div class="d-flex justify-content-center align-items-center gap-2">
          <span class="top-badge-pill highlight-offer">
            <i class="bi bi-lightning-fill text-warning"></i> 10% OFF ON YOUR FIRST MOVE
          </span>
          <span class="top-badge-pill highlight-rating">
            <i class="bi bi-star-fill text-warning"></i> <?= $ratingValue ?> Google Reviews
          </span>
        </div>
      </div>
    </div>
  </div>

  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      
      <div class="mobile-header-bar d-flex d-lg-none justify-content-between align-items-center w-100">
        <a href="<?= site_url() ?>" class="mobile-brand-logo-wrap">
          <img loading="lazy" src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers" class="mobile-brand-logo">
        </a>
        <div class="d-flex align-items-center gap-3">
          <button class="hamburger" id="openMenu" aria-label="Open navigation menu">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>

      <div class="desktop-header-wrap d-none d-lg-flex align-items-center justify-content-between w-100">
        
        <div class="logo-col">
          <a href="<?= site_url() ?>" class="brand-logo-wrap">
            <img loading="lazy" src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Packers and Movers" class="brand-logo">
          </a>
        </div>

        <div class="menu-col">
          <nav class="desktop-nav-menu">
            <a href="<?= site_url() ?>" class="nav-menu-item<?= $active_tab === 'home' ? ' active' : '' ?>">
              <div class="nav-menu-icon">
                <i class="bi bi-house-door-fill"></i>
              </div>
              <span class="nav-menu-text">Home</span>
              <div class="nav-active-line"></div>
            </a>
            
            <div class="nav-menu-item<?= $active_tab === 'about' ? ' active' : '' ?> desktop-dropdown-trigger">
              <a href="<?= site_url('about-us') ?>" class="nav-menu-link">
                <div class="nav-menu-icon">
                  <i class="bi bi-people"></i>
                </div>
                <span class="nav-menu-text">About Us <i class="bi bi-chevron-down dropdown-arrow-icon"></i></span>
              </a>
              <div class="nav-active-line"></div>
              
              <div class="desktop-dropdown-menu">
                <a href="<?= site_url('about-us') ?>">About Us</a>
                <a href="<?= site_url('testimonials') ?>">Testimonial</a>
                <a href="<?= site_url('blog') ?>">Blog</a>
                <a href="<?= site_url('reviews') ?>">Review</a>
                <a href="<?= site_url('faqs') ?>">FAQs</a>
                <a href="<?= site_url('packing-tips') ?>">Packing Tips</a>
                <a href="<?= site_url('privacy-policy') ?>">Privacy Policy</a>
                <a href="<?= site_url('terms-and-conditions') ?>">Terms &amp; Conditions</a>
              </div>
            </div>
            
            <div class="nav-menu-item<?= $active_tab === 'services' ? ' active' : '' ?> desktop-dropdown-trigger">
              <a href="<?= site_url('our-services') ?>" class="nav-menu-link">
                <div class="nav-menu-icon">
                  <i class="bi bi-box-seam"></i>
                </div>
                <span class="nav-menu-text">Services <i class="bi bi-chevron-down dropdown-arrow-icon"></i></span>
              </a>
              <div class="nav-active-line"></div>
              
              <div class="desktop-dropdown-menu">
                <a href="<?= site_url('packing-and-moving') ?>">Packing and Moving</a>
                <a href="<?= site_url('loading-and-unloading') ?>">Loading and Unloading</a>
                <a href="<?= site_url('residential-relocation') ?>">Residential Relocation</a>
                <a href="<?= site_url('home-relocation') ?>">Home Relocation</a>
                <a href="<?= site_url('office-relocation') ?>">Office Relocation</a>
                <a href="<?= site_url('car-transportation') ?>">Car Transportation</a>
                <a href="<?= site_url('bike-transportation') ?>">Bike Transportation</a>
                <a href="<?= site_url('international-transportation') ?>">International Transportation</a>
                <a href="<?= site_url('warehousing-and-storage') ?>">Warehousing and Storage</a>
                <a href="<?= site_url('transport-insurance') ?>">Transport Insurance</a>
                <a href="<?= site_url('heavy-machinery-and-shifting') ?>">Heavy Machinery and Shifting</a>
              </div>
            </div>
            
            <a href="<?= site_url('our-branches') ?>" class="nav-menu-item<?= $active_tab === 'locations' ? ' active' : '' ?>">
              <div class="nav-menu-icon">
                <i class="bi bi-geo-alt"></i>
              </div>
              <span class="nav-menu-text">branches</span>
              <div class="nav-active-line"></div>
            </a>
            
            <a href="<?= site_url('contact-us') ?>" class="nav-menu-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
              <div class="nav-menu-icon">
                <i class="bi bi-telephone"></i>
              </div>
              <span class="nav-menu-text">Contact</span>
              <div class="nav-active-line"></div>
            </a>
          </nav>
        </div>

        <div class="call-col">
          <a href="<?= $phonehtml ?>" class="nav-call-block">
            <div class="call-block-content">
              <div class="call-phone-circle">
                <i class="bi bi-telephone-fill"></i>
              </div>
              <div class="call-text-info">
                <span class="call-title">Call Us Now</span>
                <span class="call-number"><?= $phone ?></span>
              </div>
            </div>
          </a>
        </div>

      </div>

    </div>
  </header>

  <nav class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <div class="mega-inner">
      
      <div class="drawer-header d-flex justify-content-between align-items-center">
        <div class="drawer-logo">
          <img loading="lazy" src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Logo" class="drawer-logo-img">
        </div>
        <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
          <i class="bi bi-x"></i>
        </button>
      </div>

      <div class="drawer-content-scroll">
        
        <div class="live-help-card d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-2">
            <div class="help-icon-circle">
              <i class="bi bi-headset"></i>
            </div>
            <div class="help-text">
              <span class="help-title">Need Help?</span>
              <span class="help-subtitle">We're available 24/7</span>
            </div>
          </div>
          <div class="live-badge">
            <span class="live-dot"></span> LIVE
          </div>
        </div>

        <div class="drawer-nav-list">
          
          <div class="mobile-nav-item<?= $active_tab === 'home' ? ' active' : '' ?>">
            <a href="<?= site_url() ?>" class="drawer-nav-item-link">
              <div class="d-flex align-items-center gap-3">
                <div class="drawer-item-icon">
                  <i class="bi bi-house-door-fill"></i>
                </div>
                <span class="drawer-item-text">Home</span>
              </div>
              <i class="bi bi-chevron-right chevron-rt"></i>
            </a>
          </div>

          <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'about' ? ' active' : '' ?>">
            <button class="drawer-nav-item-link mobile-dropdown-toggle">
              <div class="d-flex align-items-center gap-3">
                <div class="drawer-item-icon">
                  <i class="bi bi-people"></i>
                </div>
                <span class="drawer-item-text">About Us</span>
              </div>
              <i class="bi bi-chevron-down toggle-icon"></i>
            </button>
            <div class="mobile-dropdown-menu">
              <a href="<?= site_url('about-us') ?>" class="<?= $segment1 === 'about-us' ? 'active' : '' ?>">About Us</a>
              <a href="<?= site_url('testimonials') ?>" class="<?= $segment1 === 'testimonials' ? 'active' : '' ?>">Testimonial</a>
              <a href="<?= site_url('blog') ?>" class="<?= $segment1 === 'blog' ? 'active' : '' ?>">Blog</a>
              <a href="<?= site_url('reviews') ?>" class="<?= $segment1 === 'reviews' ? 'active' : '' ?>">Review</a>
              <a href="<?= site_url('faqs') ?>" class="<?= $segment1 === 'faqs' ? 'active' : '' ?>">FAQs</a>
              <a href="<?= site_url('packing-tips') ?>" class="<?= $segment1 === 'packing-tips' ? 'active' : '' ?>">Packing Tips</a>
              <a href="<?= site_url('privacy-policy') ?>" class="<?= $segment1 === 'privacy-policy' ? 'active' : '' ?>">Privacy Policy</a>
              <a href="<?= site_url('terms-and-conditions') ?>" class="<?= $segment1 === 'terms-and-conditions' ? 'active' : '' ?>">Terms &amp; Conditions</a>
            </div>
          </div>

          <div class="mobile-nav-item mobile-dropdown<?= $active_tab === 'services' ? ' active' : '' ?>">
            <button class="drawer-nav-item-link mobile-dropdown-toggle">
              <div class="d-flex align-items-center gap-3">
                <div class="drawer-item-icon">
                  <i class="bi bi-box-seam"></i>
                </div>
                <span class="drawer-item-text">Services</span>
              </div>
              <i class="bi bi-chevron-down toggle-icon"></i>
            </button>
            <div class="mobile-dropdown-menu">
              <a href="<?= site_url('packing-and-moving') ?>" class="<?= $segment1 === 'packing-and-moving' ? 'active' : '' ?>">Packing and Moving</a>
              <a href="<?= site_url('loading-and-unloading') ?>" class="<?= $segment1 === 'loading-and-unloading' ? 'active' : '' ?>">Loading and Unloading</a>
              <a href="<?= site_url('residential-relocation') ?>" class="<?= $segment1 === 'residential-relocation' ? 'active' : '' ?>">Residential Relocation</a>
              <a href="<?= site_url('home-relocation') ?>" class="<?= $segment1 === 'home-relocation' ? 'active' : '' ?>">Home Relocation</a>
              <a href="<?= site_url('office-relocation') ?>" class="<?= $segment1 === 'office-relocation' ? 'active' : '' ?>">Office Relocation</a>
              <a href="<?= site_url('car-transportation') ?>" class="<?= $segment1 === 'car-transportation' ? 'active' : '' ?>">Car Transportation</a>
              <a href="<?= site_url('bike-transportation') ?>" class="<?= $segment1 === 'bike-transportation' ? 'active' : '' ?>">Bike Transportation</a>
              <a href="<?= site_url('international-transportation') ?>" class="<?= $segment1 === 'international-transportation' ? 'active' : '' ?>">International Transportation</a>
              <a href="<?= site_url('warehousing-and-storage') ?>" class="<?= $segment1 === 'warehousing-and-storage' ? 'active' : '' ?>">Warehousing and Storage</a>
              <a href="<?= site_url('transport-insurance') ?>" class="<?= $segment1 === 'transport-insurance' ? 'active' : '' ?>">Transport Insurance</a>
              <a href="<?= site_url('heavy-machinery-and-shifting') ?>" class="<?= $segment1 === 'heavy-machinery-and-shifting' ? 'active' : '' ?>">Heavy Machinery and Shifting</a>
            </div>
          </div>

          <div class="mobile-nav-item<?= $active_tab === 'locations' ? ' active' : '' ?>">
            <a href="<?= site_url('our-branches') ?>" class="drawer-nav-item-link">
              <div class="d-flex align-items-center gap-3">
                <div class="drawer-item-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <span class="drawer-item-text">branches</span>
              </div>
              <i class="bi bi-chevron-right chevron-rt"></i>
            </a>
          </div>

          <div class="mobile-nav-item<?= $active_tab === 'contact' ? ' active' : '' ?>">
            <a href="<?= site_url('contact-us') ?>" class="drawer-nav-item-link">
              <div class="d-flex align-items-center gap-3">
                <div class="drawer-item-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <span class="drawer-item-text">Contact</span>
              </div>
              <i class="bi bi-chevron-right chevron-rt"></i>
            </a>
          </div>

        </div>

        <a href="#" class="quote-card-cta d-flex align-items-center justify-content-between" data-bs-toggle="modal" data-bs-target="#qteModal">
          <div class="d-flex align-items-center gap-3">
            <div class="quote-card-icon">
              <i class="bi bi-file-earmark-text-fill"></i>
            </div>
            <div class="quote-card-text">
              <span class="quote-card-title">Get a Free Quote</span>
              <span class="quote-card-subtitle">Quick, Easy & Hassle-free</span>
            </div>
          </div>
          <div class="quote-card-arrow">
            <i class="bi bi-arrow-right"></i>
          </div>
        </a>

      </div>

      <div class="drawer-footer">
        <div class="footer-badges-grid">
          
          <div class="footer-badge-item">
            <div class="badge-icon-wrap">
              <i class="bi bi-shield-check"></i>
            </div>
            <span class="badge-text-lbl">100% Safe<br>&amp; Secure</span>
          </div>

          <div class="footer-badge-item">
            <div class="badge-icon-wrap">
              <i class="bi bi-clock-history"></i>
            </div>
            <span class="badge-text-lbl">On-Time<br>Delivery</span>
          </div>

          <div class="footer-badge-item">
            <div class="badge-icon-wrap">
              <i class="bi bi-people-fill"></i>
            </div>
            <span class="badge-text-lbl">Experienced<br>Team</span>
          </div>

        </div>
      </div>
    </div>
  </nav>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    openMenu.addEventListener('click', () => {
      megaMenu.classList.add('active');
      body.classList.add('menu-open');
    });

    closeMenu.addEventListener('click', () => {
      megaMenu.classList.remove('active');
      body.classList.remove('menu-open');
    });

    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');
        
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('active');
          }
        });

        parent.classList.toggle('active');
      });
    });

    megaMenu.addEventListener('click', (e) => {
      if (e.target === megaMenu) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
      button.addEventListener('click', () => {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      });
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    window.addEventListener('scroll', () => {
      mainHeader.classList.toggle('scrolled', window.scrollY > 20);
    });
  </script>
</body>
