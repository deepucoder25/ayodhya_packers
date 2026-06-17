<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Packing Tips & Guides',
    'description' => 'A comprehensive guide and checklist prepared by our relocation experts to help you pack your belongings systematically for a safe, stress-free move.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'About Us', 'url' => site_url('about-us'), 'icon' => 'bi bi-info-circle-fill'],
        ['label' => 'Packing Tips']
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
                    
                    <h2>The Golden Rules of Packing &amp; Shifting</h2>
                    <p class="lead">
                        Packing up your entire life into cardboard boxes can feel overwhelming. However, with the right approach and planning, you can make the process smooth and structured. Below are the key packing principles recommended by the moving specialists at <strong><?= $company3 ?></strong>.
                    </p>
                    
                    <div class="packing-tips-grid">
                        <div class="packing-tips-card">
                            <h5><i class="bi bi-check2-circle"></i> Declutter Before Shifting</h5>
                            <p>Sort through your items. Donate, sell, or discard things you no longer need. This reduces your overall packing volume and saves transport costs.</p>
                        </div>
                        <div class="packing-tips-card">
                            <h5><i class="bi bi-check2-circle"></i> Pack Early &amp; Room-by-Room</h5>
                            <p>Start packing items you don't use daily (like books, seasonal clothes, and showpieces) weeks in advance. Tackle one room at a time to stay organized.</p>
                        </div>
                        <div class="packing-tips-card">
                            <h5><i class="bi bi-check2-circle"></i> Heavy Items at the Bottom</h5>
                            <p>Always place heavy objects like books and tools at the bottom of the box, and place lighter items like cushions, sheets, or clothes on top.</p>
                        </div>
                        <div class="packing-tips-card">
                            <h5><i class="bi bi-check2-circle"></i> Label Box Sides Clearly</h5>
                            <p>Label each box with its room category and contents on the side (not top), so you can read it easily when boxes are stacked.</p>
                        </div>
                    </div>

                    <h2>Essential Packing Materials Checklist</h2>
                    <p>Ensure you have the right tools before you begin wrapping:</p>
                    <ul>
                        <li><strong>Corrugated Boxes:</strong> Sturdy boxes in small, medium, and large sizes to bundle items safely.</li>
                        <li><strong>Bubble Wrap:</strong> For wrapping glassware, electronics, and delicate showpieces against impacts.</li>
                        <li><strong>Packing Paper:</strong> Blank newsprint paper to wrap crockery and fill empty box spaces.</li>
                        <li><strong>Adhesive Packing Tapes:</strong> Broad brown/transparent tapes to seal boxes securely.</li>
                        <li><strong>Marker Pens &amp; Scissors:</strong> Thick permanent markers to label and track boxes.</li>
                        <li><strong>Stretch Wrap:</strong> Cling film to wrap furniture and bundle loose items together.</li>
                    </ul>

                    <h2>Room-by-Room Packing Guide</h2>
                    <p>Relocating involves different types of assets. Follow these specialized steps for each room:</p>
                    
                    <div class="room-guide-list" id="roomGuideAccordion">
                        <!-- Kitchen -->
                        <div class="room-guide-item">
                            <button class="room-guide-header collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#room-1" aria-expanded="false">
                                <i class="bi bi-egg-fried"></i> Kitchen Packing Tips
                                <i class="bi bi-plus"></i>
                            </button>
                            <div id="room-1" class="collapse" data-bs-parent="#roomGuideAccordion">
                                <div class="room-guide-body">
                                    <ul>
                                        <li>Wrap every plate, bowl, and glass individually in bubble wrap or packing paper.</li>
                                        <li>Stack plates vertically inside the box (like records) rather than flat, as vertical force is stronger.</li>
                                        <li>Pack heavy pots and pans at the bottom of the box.</li>
                                        <li>Clearly label these boxes as <strong>FRAGILE / KITCHEN</strong> on all sides.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Living Room -->
                        <div class="room-guide-item">
                            <button class="room-guide-header collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#room-2" aria-expanded="false">
                                <i class="bi bi-tv"></i> Living Room &amp; Electronics Guide
                                <i class="bi bi-plus"></i>
                            </button>
                            <div id="room-2" class="collapse" data-bs-parent="#roomGuideAccordion">
                                <div class="room-guide-body">
                                    <ul>
                                        <li>Take photos of the back panel of your TV and setup box wiring connections before unplugging. This helps in re-wiring later.</li>
                                        <li>Wrap electronic devices in anti-static bubble wrap and place them in sturdy, form-fitting boxes.</li>
                                        <li>Wrap sofa cushions and rugs in stretch film or plastic sheets to prevent dust accumulation.</li>
                                        <li>Secure glass table tops by taping cardboard sheets over them before wrapping in bubble wrap.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Bedroom -->
                        <div class="room-guide-item">
                            <button class="room-guide-header collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#room-3" aria-expanded="false">
                                <i class="bi bi-inboxes-fill"></i> Bedroom &amp; Clothing Tips
                                <i class="bi bi-plus"></i>
                            </button>
                            <div id="room-3" class="collapse" data-bs-parent="#roomGuideAccordion">
                                <div class="room-guide-body">
                                    <ul>
                                        <li>Keep hanging clothes on their hangers and place them inside large trash bags or wardrobe carton boxes.</li>
                                        <li>Pack shoes in individual shoe boxes before placing them inside larger cartons to prevent deformation.</li>
                                        <li>Dismantle bed frames and almirahs, keeping all bolts, nuts, and keys secure in a labelled zip-lock bag.</li>
                                        <li>Pack an "Essential Box" containing toiletries, basic clothes, medicines, charger cords, and snacks for the first night at your new home.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>Weekly Countdown Moving Checklist</h2>
                    <p>Track your relocation timelines to avoid last-minute delays:</p>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number"><i class="bi bi-calendar3"></i></span>
                            <h4>3 Weeks Before Shifting</h4>
                            <p>Finalize your packers and movers booking. Start sorting through your wardrobes, garage, and attic. Declutter and get rid of unwanted goods.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number"><i class="bi bi-box-seam"></i></span>
                            <h4>1 Week Before Shifting</h4>
                            <p>Pack seasonal items and books. Clear out the pantry, defrost your refrigerator, and pack all your valuable documents and jewelry separately.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number"><i class="bi bi-truck"></i></span>
                            <h4>Moving Day</h4>
                            <p>Be present when the moving crew arrives. Verify the inventory list, ensure all boxes are securely taped, double check all cabinets/drawers, and lock up.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'packing-tips']); ?>
            </div>
        </div>
    </div>
</section>
