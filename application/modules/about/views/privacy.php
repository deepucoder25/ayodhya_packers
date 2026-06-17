<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Privacy Policy',
    'description' => 'Read the privacy policy of ' . $company3 . '. Learn how we protect, handle, and secure your personal details during your relocation process.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Privacy Policy']
    ]
]);
?>
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2>Privacy Policy &amp; Data Security</h2>
                    <p class="lead">
                        We value your trust and are committed to protecting your privacy. This Privacy Policy describes how <strong><?= $company3 ?></strong> collects, uses, and discloses your personal information when you visit our website or use our relocation services.
                    </p>

                    <h3>1. Information We Collect</h3>
                    <p>
                        When you request a quote, contact us, or hire our shifting services, we may collect the following personal information:
                    </p>
                    <ul>
                        <li>Contact details such as your name, email address, and phone number.</li>
                        <li>Origin address and destination address for your relocation.</li>
                        <li>Inventory list of goods to be moved.</li>
                        <li>Payment and billing information.</li>
                    </ul>

                    <h3>2. How We Use Your Information</h3>
                    <p>
                        We use the collected information for the following purposes:
                    </p>
                    <ul>
                        <li>To provide and manage our packing, moving, and transport services.</li>
                        <li>To calculate and provide accurate shifting quotes.</li>
                        <li>To communicate with you regarding your move status.</li>
                        <li>To process payments and send invoices.</li>
                        <li>To improve our customer service and user experience.</li>
                    </ul>

                    <h3>3. Data Security &amp; Protection</h3>
                    <p>
                        We implement standard security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, please note that no method of transmission over the Internet or electronic storage is 100% secure.
                    </p>

                    <h3>4. Cookies</h3>
                    <p>
                        Our website uses cookies to enhance your browsing experience, track website traffic, and understand user preferences. You can choose to disable cookies through your browser settings, though some features of the website may not function properly.
                    </p>

                    <h3>5. Third-Party Sharing</h3>
                    <p>
                        We do not sell, trade, or rent your personal information to third parties. We may share data with trusted partners and subcontractors (such as delivery crews or insurance providers) solely to the extent necessary to perform your relocation services.
                    </p>

                    <h3>6. Contact Information</h3>
                    <p>
                        If you have any questions or concerns about this Privacy Policy, please contact us at:
                    </p>
                    <p>
                        <strong><?= $company3 ?></strong><br>
                        Address: <?= $address ?><br>
                        Email: <?= $mail ?><br>
                        Phone: <?= $phone ?>
                    </p>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'privacy-policy']); ?>
            </div>
        </div>
    </div>
</section>
