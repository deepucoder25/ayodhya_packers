<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<!-- ======================================================
     CITY PAGE SIDEBAR
     Available vars: $city, $state, $company3, $experience,
                     $startYear, $phone, $phone1, $phonehtml,
                     $phonehtml1, $whatsapphtml, $cities, $st
  ====================================================== -->

<aside class="pm-city-sidebar">
  <div class="sidebar-widget widget-premium-cta mb-4">
      <div class="cta-accent-pink"></div>
      <div class="cta-accent-blue"></div>

      <img loading="lazy" src="<?= base_url('assets/images/city_page/support_call.png') ?>" alt="Support Agent" class="cta-support-agent">

      <div class="cta-header-group d-flex align-items-center justify-content-between mb-3">
          <img loading="lazy" src="<?= base_url('assets/images/logo/logo.png') ?>" alt="<?= $company3 ?>" class="cta-brand-logo">
      </div>

      <h3 class="cta-premium-title">
          Need Help Moving with <span class="text-pink"><?= $company3 ?></span> in <span class="text-pink"><?= $city ?></span>?
      </h3>
      <div class="cta-underline"></div>
      <p class="cta-premium-desc">
          Get a free consultation from our shifting experts. <span class="text-blue fw-semibold">Available 24/7.</span>
      </p>
      <div class="cta-support-boxes d-flex flex-column gap-3 mb-4">
          <a href="<?= $phonehtml ?>" class="cta-support-box d-flex align-items-center justify-content-between text-decoration-none" id="sidebarCallBtn">
              <div class="d-flex align-items-center gap-3">
                  <div class="cta-support-icon icon-pink d-flex align-items-center justify-content-center">
                      <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cta-support-info">
                      <span class="cta-support-lbl">Call Support <span class="cta-badge-live">LIVE</span></span>
                      <strong class="cta-support-num"><?= $phone ?></strong>
                  </div>
              </div>
              <i class="bi bi-chevron-right cta-support-arrow text-pink"></i>
          </a>
          <?php if (isset($phone) && !empty($phone)): ?>
          <a href="<?= $phonehtml ?>" class="cta-support-box d-flex align-items-center justify-content-between text-decoration-none" id="sidebarAltCallBtn">
              <div class="d-flex align-items-center gap-3">
                  <div class="cta-support-icon icon-blue d-flex align-items-center justify-content-center">
                      <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cta-support-info">
                      <span class="cta-support-lbl">Alternate Line</span>
                      <strong class="cta-support-num"><?= $phone ?></strong>
                  </div>
              </div>
              <i class="bi bi-chevron-right cta-support-arrow text-blue"></i>
          </a>
          <?php else: ?>
          <a href="<?= $phonehtml1 ?>" class="cta-support-box d-flex align-items-center justify-content-between text-decoration-none" id="sidebarAltCallBtn">
              <div class="d-flex align-items-center gap-3">
                  <div class="cta-support-icon icon-blue d-flex align-items-center justify-content-center">
                      <i class="bi bi-telephone-fill"></i>
                  </div>
                  <div class="cta-support-info">
                      <span class="cta-support-lbl">Alternate Line</span>
                      <strong class="cta-support-num"><?= $phone1 ?></strong>
                  </div>
              </div>
              <i class="bi bi-chevron-right cta-support-arrow text-blue"></i>
          </a>
          <?php endif; ?>
      </div>
      <div class="cta-action-buttons d-flex gap-3">
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-footer btn-cta-whatsapp text-decoration-none d-flex align-items-center justify-content-center gap-2 flex-fill" id="sidebarWhatsAppBtn">
              <i class="bi bi-whatsapp"></i> WhatsApp
          </a>
          <button type="button" class="btn-cta-footer btn-cta-quote d-flex align-items-center justify-content-center gap-2 flex-fill" data-bs-toggle="modal" data-bs-target="#qteModal" id="sidebarQuoteBtn">
              <i class="bi bi-clipboard-check"></i> Get Quote
          </button>
      </div>
  </div>
  <div class="sidebar-widget widget-what-you-get mt-4" id="sidebarTrustWidget">
      <h4 class="widget-title">
          <i class="bi bi-gift-fill"></i> What You Get
      </h4>
      <div class="title-underline"></div>
      
      <div class="what-you-get-grid">
          <div class="what-you-get-card">
              <div class="icon-wrap icon-purple">
                  <i class="bi bi-heart-fill"></i>
              </div>
              <h5 class="grid-item-title">Safe Handling</h5>
              <p class="grid-item-desc">Your items are handled with utmost care</p>
          </div>
          <div class="what-you-get-card">
              <div class="icon-wrap icon-green">
                  <i class="bi bi-shield-check"></i>
              </div>
              <h5 class="grid-item-title">Transit Insurance</h5>
              <p class="grid-item-desc">Full insurance for complete peace of mind</p>
          </div>
          <div class="what-you-get-card">
              <div class="icon-wrap icon-orange">
                  <i class="bi bi-currency-rupee"></i>
              </div>
              <h5 class="grid-item-title">Affordable Rates</h5>
              <p class="grid-item-desc">Best pricing with no hidden charges</p>
          </div>
          <div class="what-you-get-card">
              <div class="icon-wrap icon-blue">
                  <i class="bi bi-clock-fill"></i>
              </div>
              <h5 class="grid-item-title">On-Time Delivery</h5>
              <p class="grid-item-desc">We value your time and deliver on time</p>
          </div>
          <div class="what-you-get-card">
              <div class="icon-wrap icon-red">
                  <i class="bi bi-headset"></i>
              </div>
              <h5 class="grid-item-title">24/7 Support</h5>
              <p class="grid-item-desc">Our support team is always here to help</p>
          </div>
          <div class="what-you-get-card">
              <div class="icon-wrap icon-teal">
                  <i class="bi bi-people-fill"></i>
              </div>
              <h5 class="grid-item-title">Expert Team</h5>
              <p class="grid-item-desc">Experienced and trained professionals</p>
          </div>
      </div>
  </div>
  <div class="sidebar-widget widget-nearby-cities mt-4" id="sidebarRelatedLocations">
      <div class="nearby-cities-header d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-2">
              <div class="nearby-cities-icon-wrap">
                  <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                  <h4 class="nearby-cities-title">Nearby Cities</h4>
                  <p class="nearby-cities-desc">Packers and Movers near <?= $city ?>.</p>
              </div>
          </div>
          <div class="nearby-cities-route-svg d-none d-sm-block">
              <svg width="120" height="36" viewBox="0 0 275 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                      d="M38 48 C60 60, 75 20, 100 35 C125 50, 145 70, 170 40 C195 10, 220 35, 230 45"
                      stroke="var(--success-color, #22c55e)"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-dasharray="2 6"
                      fill="none"/>
                  <g transform="translate(230,18)">
                      <path
                          d="M12 0C5.4 0 0 5.4 0 12C0 21 12 34 12 34C12 34 24 21 24 12C24 5.4 18.6 0 12 0Z"
                          fill="var(--success-color, #22c55e)"/>
                      <circle
                          cx="12"
                          cy="12"
                          r="5"
                          fill="white"/>
                  </g>
                  <g opacity="0.15">
                      <path d="M255 18 L265 8" stroke="var(--success-color, #22c55e)" stroke-width="2"/>
                      <path d="M262 22 L272 22" stroke="var(--success-color, #22c55e)" stroke-width="2"/>
                      <path d="M260 10 L260 0" stroke="var(--success-color, #22c55e)" stroke-width="2"/>
                  </g>
              </svg>
          </div>
      </div>
      
      <div class="nearby-cities-grid mt-3" id="relatedCityTags">
          <?php
          $count = 0;
          foreach ($cities as $ct):
            if ($ct['nm'] == $city) continue;
            if ($count >= 10) break;
            $link      = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
            $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
          ?>
          <a href="<?= site_url("$link-packers-movers-$statename") ?>"
             class="nearby-city-tag-card"
             id="relatedCity-<?= $count ?>">
            <span class="tag-arrow">→</span>
            <span class="tag-name"><?= $ct['nm'] ?></span>
          </a>
          <?php
            $count++;
          endforeach;
          ?>
      </div>
  </div>

</aside><!-- /city-sidebar -->


