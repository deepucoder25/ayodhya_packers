  <div class="hero-quote-card-container">
            <div class="hero-quote-white-card">
              <div class="text-center mb-3">
                <span class="hero-quote-title">Get a Free Quote</span>
              </div>
              <div class="card-body-form">
                <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
                  
                   <div class="form-row-custom">
                    <div class="form-group-custom">
                      <div class="input-wrap-custom">
                        <i class="bi bi-person input-icon-custom"></i>
                        <input type="text" name="name" class="form-control-custom" placeholder="Your Name" >
                      </div>
                    </div>
                    <div class="form-group-custom">
                      <div class="input-wrap-custom">
                        <i class="bi bi-telephone input-icon-custom"></i>
                        <input type="tel" name="phone" class="form-control-custom" placeholder="Phone Number" >
                      </div>
                    </div>
                    <div class="form-group-custom">
                      <div class="input-wrap-custom">
                        <i class="bi bi-envelope input-icon-custom"></i>
                        <input type="email" name="email" class="form-control-custom" placeholder="Email Address" >
                      </div>
                    </div>
                    <div class="form-group-custom">
                      <div class="input-wrap-custom select-wrap-custom">
                        <span class="select-label-custom">Select Service</span>
                        <select name="mtype" class="form-select-custom" >
                          <option value="" disabled selected>Select Service</option>
                          <option>Household Relocation</option>
                          <option>Office Relocation</option>
                          <option>Car/Bike Shifting</option>
                          <option>Warehousing</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group-custom half-width-mobile">
                      <div class="input-wrap-custom">
                        <i class="bi bi-geo-alt input-icon-custom"></i>
                        <input type="text" name="mfrom" class="form-control-custom" value="<?= @$city ?>" placeholder="Moving From" >
                      </div>
                    </div>
                    <div class="form-group-custom half-width-mobile">
                      <div class="input-wrap-custom">
                        <i class="bi bi-geo-alt input-icon-custom"></i>
                        <input type="text" name="mto" class="form-control-custom" placeholder="Moving To" >
                      </div>
                    </div>
                    <button type="submit" class="btn-submit-custom">
                      <i class="bi bi-send submit-btn-icon-desktop"></i>
                      <i class="bi bi-file-earmark-text submit-btn-icon-mobile"></i>
                      <span>Get Quote</span>
                    </button>
                  </div>
                  
                  <div id="quoteformresults"></div>
                </form>
              </div>
              <div class="card-footer-trust d-none d-lg-flex justify-content-between align-items-center">
                <div class="trust-item">
                  <div class="trust-icon-box bg-blue">
                    <i class="bi bi-shield-check"></i>
                  </div>
                  <div class="trust-text">
                    <strong>Safe & Secure</strong>
                    <span>100% Safe Packing<br>& Moving</span>
                  </div>
                </div>
                <div class="divider-vertical"></div>
                <div class="trust-item">
                  <div class="trust-icon-box bg-green">
                    <i class="bi bi-truck"></i>
                  </div>
                  <div class="trust-text">
                    <strong>On Time Delivery</strong>
                    <span>We Value Your<br>Precious Time</span>
                  </div>
                </div>
                <div class="divider-vertical"></div>
                <div class="trust-item">
                  <div class="trust-icon-box bg-pink">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="trust-text">
                    <strong>Expert Team</strong>
                    <span>Professional &<br>Trained Staff</span>
                  </div>
                </div>
                <div class="divider-vertical"></div>
                <div class="trust-item">
                  <div class="trust-icon-box bg-blue">
                    <i class="bi bi-box-seam"></i>
                  </div>
                  <div class="trust-text">
                    <strong>Quality Packing</strong>
                    <span>Best Quality Packing<br>Materials</span>
                  </div>
                </div>
                <div class="divider-vertical"></div>
                <div class="trust-item">
                  <div class="trust-icon-box bg-green">
                    <i class="bi bi-headset"></i>
                  </div>
                  <div class="trust-text">
                    <strong>24/7 Support</strong>
                    <span>We Are Always<br>Here to Help You</span>
                  </div>
                </div>
              </div>
              <div class="mobile-security-tag d-flex d-lg-none justify-content-center align-items-center gap-2 py-3">
                <i class="bi bi-shield-check text-primary"></i>
                <span>100% Secure. We never share your data.</span>
              </div>
            </div>

          </div>