<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
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
<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <div class="service-hero-cover">
                        <img loading="lazy" src="<?= base_url('assets/images/services_modules/office-relocation.jpg') ?>" alt="Office Relocation - <?= $company3 ?>">
                        <div class="service-hero-overlay"></div>
                        <span class="service-hero-badge">Seamless Business Transition</span>
                    </div>
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

                    <h2>Office Relocation Without Disrupting Your Business</h2>
                    <p>
                        Office relocation differs greatly from house relocation. Each hour spent on packing, moving, and unpacking has an impact on your company's performance and business operations. Confidential data, office furniture, computers, servers, equipment - all of these things have to be handled properly and organized efficiently. Unplanned relocation always results in confusion that persists long after the office relocation is done.
                    </p>
                    <p>
                        The specialists from <strong><?= $company3 ?></strong> offer you well-organized office relocation service that will ensure your business moves to its new location with minimum disruptions.
                    </p>

                    <h3>Office Shifting Begins with Proper Planning</h3>
                    <p>Efficient office shifting begins with thorough preparations. Our professionals visit your office and learn its structure, identify valuable office equipment, assess your packing needs and develop a realistic office relocation schedule.</p>
                    <p>All departments, workplaces, paperwork and electronic devices will be sorted separately to make the process of unpacking faster and let employees start working right away without spending any valuable time finding important things.</p>

                    <h4>Proper Handling of Office Furniture and IT Equipment</h4>
                    <p>Contemporary offices include a lot of things apart from tables and chairs. Computers, printers, servers, meeting rooms equipment, filing cabinets, electronic devices - each of these elements requires its own special way of packing.</p>
                    <p>Our team will make sure that high-grade packing material will be used to ensure safe transportation of office assets. Disassembly and assembly of furniture take place while transporting them. All the electronic devices will be packed with caution to avoid any damage during transportation.</p>
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
                    
                    <span class="fs-4 fw-bold">Flexibility of Our Office Relocation Service</span>
                    <p>Many business owners cannot afford to stop their business operations for relocation. That is why we offer flexible scheduling according to the demands of your company.</p>
                    <p>If necessary, office shifting will be done on weekends, holidays or after your working hours. This will allow reducing downtime and letting employees start working again without major disruptions after the office relocation.</p>

                    <span class="fs-5 fw-bold">Continuous Coordination at Every Step</span>
                    <p>Updates are equally important to business owners as safe transportation. We will contact you at each step of the relocation process and inform you about the progress of the packing process, vehicle dispatching, transportation and delivery schedule.</p>
                    <p>It will help to avoid any misunderstandings and let your management team plan the whole process of transition comfortably.</p>

                    <span class="fs-5 fw-bold">Successful Office Relocation Done In Advance</span>
                    <p>Several months ago our team relocated a marketing agency that employs more than forty people to another office. The main problem for the agency owners was completing this job over the weekend so that their employees would be able to work on Monday.</p>
                    <p>Our team separated the office into zones, marked every workplace, packed the computer system separately and moved all elements in batches. By the end of Sunday, all furniture was assembled, workplaces were organized and internet equipment was ready to install. On Monday morning the agency staff entered the completely arranged office without any waste of working time.</p>
                    <h6>Move Your Office With Confidence</h6>
                    <p>Office relocation needs careful planning, coordination, and efficient execution. <?= $company3 ?> ensures you with a professional labor force, proper packing and dependable transportation.</p>
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
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'office-relocation']); ?>
            </div>
        </div>
    </div>
</section>
