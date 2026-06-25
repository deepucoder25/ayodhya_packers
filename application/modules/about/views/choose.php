<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
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
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    
                    <h2>Reasons for Choosing <?= $company3 ?></h2>
                    <p>It goes without saying that hiring professional movers is very important for a comfortable moving process. Still, it is an important step too, since movers will be responsible for the safe delivery of all furniture and other possessions. Below, you can find some of the main reasons why you should choose <?= $company3 ?>.</p>
                    <p>The moving process offered by <strong><?= $company3 ?></strong> includes carefully handled items, timely performing of relocation services and effective communication.</p>

                   <h3>Professional Packers and Movers</h3>
                    <p>Our <b>experienced packers and movers</b> know how to handle all kinds of household items and furniture. Apart from fragile items such as glassware or electronics, we take care of safe delivery of heavy furniture and office equipment during the transportation process.</p>

                    <span class="fw-bold fs-6"><i class="bi bi-box"></i> High Quality Packing Materials</span>
                    <p>The use of proper packing materials is a key to a successful relocation. Therefore, <?= $company3 ?> use high quality carton boxes, bubble wraps, foam sheets, stretch film and coverings in order to increase the level of safety during transportation and to prevent any damage to the items.</p>

                    <span class="fw-bold fs-6"><i class="bi bi-cash"></i> Detailed Quotations and No Hidden Charges</span>
                    <p>We value honesty and transparency. That is why our clients always receive detailed information about prices of selected services beforehand in order to avoid any unpleasant surprises during the moving process.</p>

                    <span class="fw-bold fs-6"><i class="bi bi-clock-history"></i> Timely Pickups and Deliveries</span>
                    <p>Delays and lags may cause many inconveniences for our clients, regardless whether they want to move to a new city for work or for their family or just want to move their office. Therefore, we try to make sure that our clients receive timely delivery service.</p>

                    <span class="fw-bold fs-6"><i class="bi bi-car-front-fill"></i> Reliable Car Transportation Services</span>
                    <p>Apart from moving offices and houses, we offer reliable vehicle transportation service. You can rely on us when you want to deliver your car or motorbike.</p>

                    <span class="fw-bold fs-6"><i class="bi bi-headphones"></i> 24/7 Customer Support</span>
                    <p>In case any questions arise before, during or after your relocation, we are here to help you. Our customer support representatives answer your calls around the clock and help our clients with all issues connected with relocation.</p>

                    <div class="about-feedback-cta mt-5">
                        <h6>Good Reputation</h6>
                        <p>
                            During many years, <em><?= $company3 ?></em> performed hundreds of successful relocations. Many of our clients heard about us from their friends, relatives and colleagues. We promise to take care of the belongings of our clients as of our own ones and to provide them with reliable relocation services.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'why-choose-us']); ?>
            </div>
        </div>
    </div>
</section>
