<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Why Choose Us',
    'description' => 'Discover the top reasons why families and corporate companies trust ' . $company3 . ' for their packing and moving needs.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Why Choose Us']
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
                    
                    <h2>The Difference We Make</h2>
                    <p class="lead">
                        Relocation is not just about moving boxes; it's about moving lives, memories, and valuable assets. At <strong><?= $company3 ?></strong>, we are committed to making your transition seamless, safe, and stress-free. Over our 30+ year journey, we have refined our processes to become India's most trusted name in packers and movers.
                    </p>
                    <p>
                        We employ only seasoned packing professionals, utilize superior packing materials, and possess a vast fleet of specialized transport carriers. Our transparent pricing structure and pan-India presence ensure you receive high-quality service at the most reasonable prices, with no hidden surprises.
                    </p>

                    <h2>Our Key Pillars of Trust</h2>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="packing-tips-card text-center h-100">
                                <div class="icon-box mb-3">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </div>
                                <h3>100% Safe Shifting</h3>
                                <p>
                                    We use heavy-duty multi-layered bubble wraps, customized crates, and premium carton sheets. Your belongings are guarded against impact, moisture, and dust during the entire journey.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="packing-tips-card text-center h-100">
                                <div class="icon-box mb-3">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h3>Specialized Vehicle Carriers</h3>
                                <p>
                                    Our cars and bikes are moved inside covered, enclosed container carriers to ensure they are shielded from road debris, weather, and external damage, providing door-to-door delivery.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="packing-tips-card text-center h-100">
                                <div class="icon-box mb-3">
                                    <i class="bi bi-tags-fill"></i>
                                </div>
                                <h3>Transparent Fair Pricing</h3>
                                <p>
                                    No hidden costs. We provide a detailed itemized breakdown of expenses upfront so you know exactly what you are paying for, eliminating any post-move disputes.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="packing-tips-card text-center h-100">
                                <div class="icon-box mb-3">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <h3>Punctual &amp; Prompt Delivery</h3>
                                <p>
                                    Time is crucial. We carefully map logistics routes, utilize advanced tracking systems, and plan departures to guarantee your items arrive precisely when expected.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h2>Industry Credentials</h2>
                    <p>
                        <strong><?= $company3 ?></strong> is fully accredited with major relocation and standard certifications. Our logistics team operates on the highest standards of safety guidelines.
                    </p>
                    <ul>
                        <li><strong>ISO Certified Quality Systems:</strong> Complies with strict international standards of service management and logistics operations.</li>
                        <li><strong>IBA Approved Transporters:</strong> Offering official, bank-approved billing and shifting options for corporate and government employee relocations.</li>
                        <li><strong>Full Transit Insurance Options:</strong> Offering peace of mind with complete cargo valuation and swift claim settlements.</li>
                    </ul>

                    <!-- Client satisfaction banner -->
                    <div class="about-feedback-cta mt-5">
                        <h5>Our Quality Commitment</h5>
                        <p>
                            "We believe that a satisfied client is our greatest advertisement. Every single move receives the absolute dedication of our branch managers, supervisors, packing experts, and customer care executives."
                        </p>
                    </div>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'why-choose-us']); ?>
            </div>
        </div>
    </div>
</section>
