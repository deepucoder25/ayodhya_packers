<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Terms & Conditions',
    'description' => 'Understand the terms, guidelines, and conditions governing home shifting, transport insurance, and cargo moving services with ' . $company3 . '.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Terms & Conditions']
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
                    
                    <h2>Terms &amp; Conditions</h2>
                    <p class="lead">
                        Welcome to <strong><?= $company3 ?></strong>. These Terms &amp; Conditions govern your use of our website and relocation services. By booking a move or using our services, you agree to be bound by these terms.
                    </p>

                    <h3>1. Service Booking &amp; Shifting Quotes</h3>
                    <ul>
                        <li>Shifting quotes provided by us are based on the inventory list and details supplied by you.</li>
                        <li>Any change in the inventory list, travel distance, floor levels, or loading conditions will result in an adjustment of the final price.</li>
                        <li>The final service pricing is subject to taxes and other applicable duties as outlined in the invoice.</li>
                    </ul>

                    <h3>2. Excluded &amp; Restricted Items</h3>
                    <p>
                        For safety and legal reasons, we do not transport the following items:
                    </p>
                    <ul>
                        <li>Hazardous materials, explosives, and flammable liquids (e.g., gas cylinders, fuel).</li>
                        <li>Valuables including cash, jewelry, gold, and extremely important original documents. We advise carrying these items personally.</li>
                        <li>Contraband, illegal items, or restricted substances.</li>
                        <li>Perishable goods or live plants unless special arrangements are formally agreed upon.</li>
                    </ul>

                    <h3>3. Payments &amp; Billing</h3>
                    <ul>
                        <li>A booking advance may be required to confirm the shifting slot.</li>
                        <li>The remaining balance must be paid in full at the time of loading or unloading, as agreed in the service order.</li>
                        <li>Payments can be made via credit card, net banking, UPI, or other options approved by our billing desk.</li>
                    </ul>

                    <h3>4. Transit Insurance &amp; Liability</h3>
                    <ul>
                        <li>While we take utmost care of your goods, unexpected accidents or road conditions can occur. We strongly recommend choosing transit insurance.</li>
                        <li>Our liability for any damage is strictly limited to the terms of the transit insurance policy.</li>
                        <li>All damage claims must be documented and submitted within 24 hours of unloading.</li>
                    </ul>

                    <h3>5. Delivery Timeline &amp; Delays</h3>
                    <p>
                        We make every effort to deliver your goods on schedule. However, we are not liable for transit delays caused by traffic accidents, road closures, strikes, bad weather, or other events beyond our reasonable control.
                    </p>

                    <h3>6. Governing Law</h3>
                    <p>
                        These Terms &amp; Conditions are governed by and construed in accordance with the laws of India. Any legal disputes arising from our services shall be subject to the exclusive jurisdiction of the courts near our registered office.
                    </p>

                    <h3>7. Contact Us</h3>
                    <p>
                        If you have any questions about our Terms &amp; Conditions, please get in touch with us:
                    </p>
                    <p>
                        <strong><?= $company3 ?></strong><br>
                        Email: <?= $mail ?><br>
                        Phone: <?= $phone ?>
                    </p>

                </div>
            </div>

            <!-- Right Side Sticky Sidebar -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'terms-and-conditions']); ?>
            </div>
        </div>
    </div>
</section>
