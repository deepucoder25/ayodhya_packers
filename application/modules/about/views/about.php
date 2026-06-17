<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'About Us',
    'description' => 'Learn more about our history, values, infrastructure, and the expert team dedicated to your seamless move.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'About Us']
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
                    
                    <!-- Top Page Banner Cover -->
                    <img loading="lazy" src="<?= base_url('assets/images/gallery/img7.jpg') ?>" alt="About <?= $company3 ?>" class="about-banner-img">

                    <h2>India's Leading Packers &amp; Movers</h2>
                    <p>
                        Welcome to <strong><?= $company3 ?></strong>, your premier destination for high-quality, safe, and cost-effective shifting solutions. With over <strong><?= $experience ?> years</strong> of professional logistics experience, we are dedicated to transforming stressful shifting days into pleasant, seamless transitions for families and businesses nationwide.
                    </p>
                    <p>
                        Established with the vision of providing standard, honest, and reliable relocation services, <?= $company3 ?> has grown to become a household name in India. Today, we manage a vast logistics network across major cities, supported by a specialized fleet of modern container carriers, state-of-the-art warehouses, and a trained crew of packing experts.
                    </p>

                    <!-- Key Stats Counter Grid -->
                    <div class="about-stats-grid">
                        <div class="about-stat-card">
                            <div class="stat-icon"><i class="bi bi-clock-history"></i></div>
                            <h3><?= $experience ?></h3>
                            <p>Years Legacy</p>
                        </div>
                        <div class="about-stat-card">
                            <div class="stat-icon"><i class="bi bi-people"></i></div>
                            <h3><?= $happyClients ?></h3>
                            <p>Happy Clients</p>
                        </div>
                        <div class="about-stat-card">
                            <div class="stat-icon"><i class="bi bi-shield-check"></i></div>
                            <h3>99.6%</h3>
                            <p>Safe Delivery</p>
                        </div>
                        <div class="about-stat-card">
                            <div class="stat-icon"><i class="bi bi-geo-alt"></i></div>
                            <h3><?= $statesCovered ?></h3>
                            <p>States Covered</p>
                        </div>
                    </div>

                    <h2>Our Shifting Commitments</h2>
                    <p>
                        At the heart of our operations is a strong commitment to customer satisfaction and property safety. We operate on the foundation of transparency, integrity, and punctuality. We believe that your trust is our most valuable asset, and we strive to honor it by packing and shipping every household item as if it were our own.
                    </p>
                    
                    <!-- Core Strengths 2x2 Grid -->
                    <div class="about-values-grid">
                        <div class="about-value-card">
                            <div class="value-icon"><i class="bi bi-shield-fill-check"></i></div>
                            <h3>Uncompromising Safety</h3>
                            <p>We utilize premium multi-layered packing materials (bubble wrap, corrugated sheets, foam rolls) to guard your assets against impact, moisture, and road hazards.</p>
                        </div>
                        <div class="about-value-card">
                            <div class="value-icon"><i class="bi bi-cash-coin"></i></div>
                            <h3>Transparent Fair Pricing</h3>
                            <p>We provide detailed, itemized quotes upfront with no hidden charges, ensuring complete honesty in billing and zero post-move disputes.</p>
                        </div>
                        <div class="about-value-card">
                            <div class="value-icon"><i class="bi bi-speedometer2"></i></div>
                            <h3>Punctual Transit</h3>
                            <p>We map efficient transport routes, deploy experienced long-haul drivers, and track schedules carefully to guarantee on-time deliveries at your destination.</p>
                        </div>
                        <div class="about-value-card">
                            <div class="value-icon"><i class="bi bi-headset"></i></div>
                            <h3>24/7 Dedicated Care</h3>
                            <p>Our customer service desk is accessible round-the-clock, offering real-time tracking updates and immediate solutions throughout the shifting lifecycle.</p>
                        </div>
                    </div>

                    <h2>Advanced Shifting Infrastructure</h2>
                    <p>
                        Our capabilities are backed by advanced relocation infrastructure that sets us apart from local contractors. We own and operate a large fleet of enclosed truck containers, custom car carriers, and heavy cargo machinery to handle heavy commercial equipment.
                    </p>
                    <p>
                        Additionally, we offer safe, climate-controlled warehousing and storage yards. These spaces are secured with round-the-clock CCTV surveillance, fire prevention systems, and regular pest control, allowing you to store your household goods or business cargo for long or short periods.
                    </p>

                    <h2>IBA Approved Shifting</h2>
                    <p>
                        For government employees, bank managers, and corporate professionals, we supply IBA-approved transport bills and quotation profiles. Our documents comply with strict bank claim regulations, making it easy to coordinate official transfers and complete relocation claims.
                    </p>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
            </div>
        </div>
    </div>
</section>
