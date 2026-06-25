<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$reviews = [
    [
        'name' => 'Rahul Sharma',
        'avatar' => 'R',
        'stars' => 5,
        'text' => 'We shifted in ' . htmlspecialchars($city) . ' in September 2025. They came exactly at 8 AM and completed everything by evening.'
    ],
    [
        'name' => 'Neha Gupta',
        'avatar' => 'N',
        'stars' => 5,
        'text' => 'Very good packing quality and nice staff. No damage done to my furniture.'
    ],
    [
        'name' => 'Amit Verma',
        'avatar' => 'A',
        'stars' => 4.5,
        'text' => 'Fair charges and good service. Would recommend local shifting in ' . htmlspecialchars($city) . '.'
    ]
];
?>

<div class="city-content-card mt-4">
  <h3 class="city-section-title-sm"><i class="bi bi-chat-left-quote me-2"></i>Customer Experiences</h3>
  
  <div class="city-reviews-slider-outer">
    <div class="city-reviews-slider-viewport" id="cityReviewsViewport">
      <div class="city-reviews-slider-track">
        <?php foreach ($reviews as $review): ?>
          <div class="col-md-6 col-12 flex-shrink-0" style="scroll-snap-align: start;">
            <div class="city-review-card">
              <div class="review-stars">
                <?php
                $stars = $review['stars'];
                $full_stars = floor($stars);
                $has_half = ($stars - $full_stars) >= 0.5;
                for ($i = 0; $i < 5; $i++) {
                  if ($i < $full_stars) {
                    echo '<i class="bi bi-star-fill"></i>';
                  } elseif ($i == $full_stars && $has_half) {
                    echo '<i class="bi bi-star-half"></i>';
                  } else {
                    echo '<i class="bi bi-star"></i>';
                  }
                }
                ?>
              </div>
              <p>"<?= htmlspecialchars($review['text']) ?>"</p>
              <div class="review-author">
                <div class="review-avatar"><?= htmlspecialchars($review['avatar']) ?></div>
                <div>
                  <strong><?= htmlspecialchars($review['name']) ?></strong>
                  <small><?= htmlspecialchars($city) ?>, India</small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    
    <div class="reviews-carousel-footer mt-3">
      <button class="reviews-footer-btn" type="button" id="cityReviewsPrevBtn" aria-label="Previous">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="reviews-footer-btn" type="button" id="cityReviewsNextBtn" aria-label="Next">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const view = document.getElementById('cityReviewsViewport');
  const prevBtn = document.getElementById('cityReviewsPrevBtn');
  const nextBtn = document.getElementById('cityReviewsNextBtn');
  const cards = view ? view.querySelectorAll('.flex-shrink-0') : [];
  if (!view || !cards.length) return;

  // Calculate scrolling step based on card width + gap
  const getStep = () => {
    const cardWidth = cards[0].offsetWidth;
    const style = window.getComputedStyle(view.querySelector('.city-reviews-slider-track'));
    const gap = parseFloat(style.columnGap || style.gap) || 24;
    return cardWidth + gap;
  };

  prevBtn.onclick = () => view.scrollBy({ left: -getStep(), behavior: 'smooth' });
  nextBtn.onclick = () => view.scrollBy({ left: getStep(), behavior: 'smooth' });

  const updateButtons = () => {
    const isAtStart = view.scrollLeft <= 5;
    const isAtEnd = view.scrollLeft >= (view.scrollWidth - view.clientWidth - 5);
    
    prevBtn.classList.toggle('disabled', isAtStart);
    nextBtn.classList.toggle('disabled', isAtEnd);
  };

  view.addEventListener('scroll', updateButtons);
  window.addEventListener('resize', updateButtons);
  updateButtons();
});
</script>