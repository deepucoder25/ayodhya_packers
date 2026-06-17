<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Office Relocation',
    'description' => 'Minimize business downtime with professional office relocation services. Secure transport for computers, IT equipment, files, and furniture.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Services', 'url' => site_url('our-services'), 'icon' => 'bi bi-truck'],
        ['label' => 'Office Relocation']
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
                    
                    <!-- 1. Hero Cover -->
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/office-relocation.jpg') ?>" alt="Office Relocation - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Seamless Business Transition</span>
                    </div>

                    <!-- 2. Highlights Row -->
                    <div class="service-highlights-row">
                        <div class="service-highlight-badge">
                            <i class="bi bi-building"></i>
                            <span class="highlight-val">1,500+</span>
                            <p>Offices Shifted</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-cpu"></i>
                            <span class="highlight-val">Server</span>
                            <p>Rigging Crew</p>
                        </div>
                        <div class="service-highlight-badge">
                            <i class="bi bi-alarm"></i>
                            <span class="highlight-val">Minimal</span>
                            <p>Business Downtime</p>
                        </div>
                    </div>

                    <h2>Professional Corporate &amp; Office Relocation Services</h2>
                    <p class="lead">
                        At <strong><?= $company3 ?></strong>, we understand that office relocation requires systematic planning to minimize disruption to your business operations. Shifting network servers, workstation cubicles, fragile IT screens, and critical paper archives demands a structured, safety-first workflow.
                    </p>
                    <p>
                        We assign a dedicated corporate moving manager to coordinate the entire project. We organize packing schedules over weekends or holidays, helping you resume business operations on Monday morning without missing a beat.
                    </p>

                    <!-- 3. Shifting Comparison Grid -->
                    <h2>How We Compare to Competitors</h2>
                    <p>Our corporate moving processes are designed to handle business assets with high efficiency:</p>
                    
                    <div class="service-comparison-box">
                        <div class="service-comparison-col premium-standard">
                            <h4><i class="bi bi-check-circle-fill"></i> Our Shifting Standards</h4>
                            <ul>
                                <li>Anti-static bubble wrap for servers and IT screens.</li>
                                <li>Systematic color-coded labelling for department files.</li>
                                <li>Relocation scheduled during weekends or overnight.</li>
                                <li>Dedicated project coordinator managing the crew on-site.</li>
                            </ul>
                        </div>
                        <div class="service-comparison-col local-standard">
                            <h4><i class="bi bi-x-circle-fill"></i> Local Transporters</h4>
                            <ul>
                                <li>Standard plastic wrap without anti-static protection.</li>
                                <li>Random loading of folders without departmental sorting.</li>
                                <li>Weekday moves that disrupt normal business operations.</li>
                                <li>Uncoordinated loading without a project planner.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 4. Core Process Cards Timeline -->
                    <h2>Our Corporate Relocation Process</h2>
                    <div class="process-timeline">
                        <div class="process-step">
                            <span class="step-number">1</span>
                            <h4>Departmental Audit</h4>
                            <p>We audit the office layout, map network server specs, and coordinate a timeline with your facility management team.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">2</span>
                            <h4>Anti-Static IT Packing</h4>
                            <p>Our technicians wrap desktop computers, monitors, and servers in anti-static film, packing them inside padded server boxes.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">3</span>
                            <h4>Tagging &amp; Transport</h4>
                            <p>Workstation furniture and departmental files are tagged with color-coded labels before loading onto enclosed cargo containers.</p>
                        </div>
                        <div class="process-step">
                            <span class="step-number">4</span>
                            <h4>On-Site Erection</h4>
                            <p>We unload packages room-by-room based on the color tags, helping you unpack files and place desk layouts in position.</p>
                        </div>
                    </div>

                    <!-- 5. Permitted vs Prohibited Checklist -->
                    <h2>Office Shifting Guidelines</h2>
                    <p>Please review which office assets are handled by our corporate moving crew:</p>
                    
                    <div class="service-safety-notice-box">
                        <div class="service-safety-col safety-yes">
                            <h4><i class="bi bi-check"></i> Standard Office Assets</h4>
                            <ul>
                                <li>Computers, LED screens, and printers.</li>
                                <li>Workstation cubicles and modular desks.</li>
                                <li>Corporate files, books, and documents.</li>
                                <li>Pantry equipment, water filters, and chairs.</li>
                            </ul>
                        </div>
                        <div class="service-safety-col safety-no">
                            <h4><i class="bi bi-x"></i> Prohibited / Excluded</h4>
                            <ul>
                                <li>Company financial checkbooks and cash.</li>
                                <li>Critical locker keys or security passwords.</li>
                                <li>Employees' personal tablets and phones.</li>
                                <li>Highly sensitive intellectual property patents.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- 6. Client Review Slice -->
                    <div class="service-reviews-slice">
                        <div class="rating-row">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="review-text">
                            "We relocated our 120-employee software firm over a single weekend. Ayodhya Packers handled the server rack wrapping, workstations, and files with excellent coordination. We resumed work on Monday morning with zero downtime!"
                        </p>
                        <div class="review-user">
                            <div class="user-avatar">M</div>
                            <div class="user-name">
                                <h6>Mohan Murthy</h6>
                                <span>Hyderabad, Telangana</span>
                            </div>
                        </div>
                    </div>

                    <!-- 7. FAQs Accordion -->
                    <h2>Frequently Asked Questions</h2>
                    <div class="service-faq-container">
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-or-1" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Can you execute the move overnight to prevent downtime?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-or-1" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes. We plan and execute corporate moves overnight or during weekend holidays, ensuring your business operations are not affected.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-or-2" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">How do you protect server equipment during transit?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-or-2" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    We pack servers in specialized anti-static bubble wrap and transport them inside double-walled corrugated boxes with foam inserts to guard against road vibrations.
                                </div>
                            </div>
                        </div>
                        <div class="faq-card">
                            <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#faq-or-3" aria-expanded="false" role="button">
                                <i class="bi bi-patch-question-fill faq-card-icon"></i>
                                <span class="flex-grow-1">Do you help in dismantling and reassembling office workstations?</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="faq-or-3" class="collapse" data-bs-parent=".service-faq-container">
                                <div class="faq-card-body">
                                    Yes, our skilled carpentry team disassembles modular desks, executive chairs, conference tables, and partitions, reassembling them at your new office location.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'office-relocation']); ?>
            </div>
        </div>
    </div>
</section>
