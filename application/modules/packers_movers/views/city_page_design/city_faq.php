        <div class="city-content-card mt-4">
          <h3 class="city-section-title-sm"><i class="bi bi-patch-question me-2"></i>Frequently Asked Questions — Packers & Movers in <?= $city ?></h3>
          <div class="city-faq-list mt-3" id="cityFaqAccordion">
            <?php
            $faqs = [
              ["q" => "Do you provide local shifting services in $city?",
               "a" => "Yes. We offer local household, office and commercial relocation in $city."],
              ["q" => "How are moving charges calculated?",
               "a" => "The charges vary depending on distance, packing requirement, type of the vehicle and volume of the goods."],
              ["q" => "Do you offer packing materials?",
               "a" => "Yes, we use good packing material for packing furniture, electrical equipment, and fragile items."],
            ];
            foreach ($faqs as $i => $faq):
            ?>
            <div class="city-faq-item">
              <button class="city-faq-btn <?= $i === 0 ? '' : 'collapsed' ?>" type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#cfaq<?= $i ?>"
                      aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
                <i class="bi bi-patch-question-fill faq-q-icon"></i>
                <span><?= $faq['q'] ?></span>
                <i class="bi bi-chevron-down faq-chevron"></i>
              </button>
              <div id="cfaq<?= $i ?>" class="collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#cityFaqAccordion">
                <div class="city-faq-body"><?= $faq['a'] ?></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <script>
        document.addEventListener('DOMContentLoaded', function () {
          const accordion = document.getElementById('cityFaqAccordion');
          if (!accordion) return;

          const collapseElements = accordion.querySelectorAll('.collapse');
          collapseElements.forEach(collapseEl => {
            collapseEl.addEventListener('show.bs.collapse', function () {
              collapseElements.forEach(otherEl => {
                if (otherEl !== collapseEl) {
                  const bsCollapse = bootstrap.Collapse.getInstance(otherEl) || new bootstrap.Collapse(otherEl, { toggle: false });
                  bsCollapse.hide();
                }
              });
            });
          });
        });
        </script>