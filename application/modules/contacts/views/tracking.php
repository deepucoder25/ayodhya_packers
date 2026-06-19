<?php
$this->load->view('template/breadcrumbs', [
    'title' => 'Track Your Consignment',
    'description' => 'Track the live location and transit status of your shipment moving with ' . $company3 . '.',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => site_url(), 'icon' => 'bi bi-house-door-fill'],
        ['label' => 'Track Your Consignment']
    ]
]);
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="tracking-search-card mb-5">
                <div class="tracking-card-header text-center">
                    <span class="tracking-badge"><i class="fa-solid fa-truck-fast"></i> Real-Time Tracking</span>
                    <h2 class="tracking-card-title mt-2">Track Your Consignment</h2>
                    <p class="tracking-card-subtitle">Enter your G.R. No. / Shipment ID to check live transit status</p>
                </div>
                <form action="" id="tracking_form" class="mt-4">
                    <div class="tracking-input-wrapper">
                        <i class="fa-solid fa-receipt tracking-input-icon"></i>
                        <input type="text" class="form-control tracking-input-field" id="trackingNumber" name="trackingNumber" placeholder="Enter G.R. Number (e.g. 123456)">
                        <button type="submit" class="btn btn-tracking-submit" id="tracking_submit">
                            <i class="fa-solid fa-magnifying-glass me-2"></i> Track Now
                        </button>
                    </div>
                    <div id="statusMessage" class="mt-3"></div>
                    <div class="text-center mt-3">
                        <button type="reset" class="btn btn-link btn-tracking-clear"><i class="fa-solid fa-xmark me-1"></i> Clear Search</button>
                    </div>
                </form>
            </div>

            <div class="contact-tracking-details-card mt-4" style="display: none;">
                <!-- Main Dashboard Card -->
                <div class="card tracking-dashboard shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center py-3 bg-light">
                        <h5 class="mb-0 text-accent font-outfit"><i class="fa-solid fa-circle-info me-2 text-primary-color"></i>Consignment Details</h5>
                        <span class="badge bg-primary-soft text-primary-color py-2 px-3 rounded-pill fw-bold" id="lrNumberBadge">LR: </span>
                    </div>
                    <div class="card-body p-4">
                        <!-- Key Stats Grid -->
                        <div class="row g-3 mb-4">
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="tracking-stat-box">
                                    <div class="tracking-stat-icon text-primary-color"><i class="fa-solid fa-user"></i></div>
                                    <div class="tracking-stat-label">Customer</div>
                                    <div class="tracking-stat-val" id="customerName"></div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="tracking-stat-box">
                                    <div class="tracking-stat-icon text-secondary-color"><i class="fa-solid fa-file-invoice"></i></div>
                                    <div class="tracking-stat-label">G.R. Number</div>
                                    <div class="tracking-stat-val" id="lrNumber"></div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="tracking-stat-box">
                                    <div class="tracking-stat-icon text-success"><i class="fa-solid fa-truck-ramp-box"></i></div>
                                    <div class="tracking-stat-label">Type</div>
                                    <div class="tracking-stat-val" id="shipmentType"></div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="tracking-stat-box">
                                    <div class="tracking-stat-icon text-info"><i class="fa-solid fa-location-dot"></i></div>
                                    <div class="tracking-stat-label">Origin</div>
                                    <div class="tracking-stat-val" id="origin"></div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="tracking-stat-box">
                                    <div class="tracking-stat-icon text-warning"><i class="fa-solid fa-location-crosshairs"></i></div>
                                    <div class="tracking-stat-label">Destination</div>
                                    <div class="tracking-stat-val" id="destination"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-2">
                                <div class="tracking-stat-box highlight">
                                    <div class="tracking-stat-icon text-pink"><i class="fa-solid fa-calendar-check"></i></div>
                                    <div class="tracking-stat-label">Booking Date</div>
                                    <div class="tracking-stat-val" id="ex_del_date_wrapper"><span id="ex_del_date"></span> <i class="fa-solid fa-circle-check text-success ms-1"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- Interactive Stepper -->
                        <div class="contact-tracking-progress my-5">
                            <div class="contact-progress-bar-container">
                                <div class="contact-progress">
                                    <div class="contact-progress-bar" role="progressbar"></div>
                                </div>
                                <div class="contact-progress-steps">
                                    <div class="contact-step step-processing">
                                        <div class="contact-step-icon">
                                            <i class="fa-solid fa-clipboard-list"></i>
                                        </div>
                                        <div class="contact-step-content">
                                            <div class="contact-step-label">Process</div>
                                            <div class="contact-step-date" id="processing-date"></div>
                                        </div>
                                    </div>
                                    <div class="contact-step step-picked">
                                        <div class="contact-step-icon">
                                            <i class="fa-solid fa-box-open"></i>
                                        </div>
                                        <div class="contact-step-content">
                                            <div class="contact-step-label">Picked</div>
                                            <div class="contact-step-date" id="picked-date"></div>
                                        </div>
                                    </div>
                                    <div class="contact-step step-transit">
                                        <div class="contact-step-icon">
                                            <i class="fa-solid fa-truck"></i>
                                        </div>
                                        <div class="contact-step-content">
                                            <div class="contact-step-label">In Transit</div>
                                            <div class="contact-step-date" id="transit-date"></div>
                                        </div>
                                    </div>
                                    <div class="contact-step step-delivered">
                                        <div class="contact-step-icon">
                                            <i class="fa-solid fa-house-circle-check"></i>
                                        </div>
                                        <div class="contact-step-content">
                                            <div class="contact-step-label">Delivered</div>
                                            <div class="contact-step-date" id="delivered-date"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tracking History Table -->
                        <div class="contact-tracking-table mt-5">
                            <h6 class="tracking-history-title pb-2 mb-3"><i class="fa-solid fa-route me-2"></i>TRACKING HISTORY</h6>
                            <div class="table-responsive">
                                <table class="table table-custom">
                                    <thead>
                                        <tr>
                                            <th>STATUS</th>
                                            <th>DATE</th>
                                            <th>EVENT / REMARKS</th>
                                        </tr>
                                    </thead>
                                    <tbody id="trackingTableBody">
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Support Footer -->
                        <div class="tracking-support-footer mt-5 p-3">
                            <p class="mb-0 text-muted">
                                <i class="fa-solid fa-headset me-2 text-primary-color"></i>For further inquiries or assistance regarding your consignment, please call 
                                <a class="contact-tracking-link fw-bold text-accent" href="<?= $primaryPhonehtml ?>"><?= $phone ?></a> or visit our 
                                <a class="contact-tracking-underline fw-bold text-accent" href="<?= site_url('contacts') ?>">Contact Page</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        const steps = {
            '1': 'Processing',
            '2': 'Picked',
            '3': 'In Transit',
            '4': 'Delivered',
        };

        $('#tracking_submit').click(function (e) {
            e.preventDefault();
            $('#statusMessage').html('<div class="alert alert-info py-2"><i class="fa-solid fa-spinner fa-spin me-2"></i>Searching consignment... Please wait</div>');
            $(this).prop('disabled', true);

            // Reset stepper styles
            $('.contact-step').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#processing-date, #picked-date, #transit-date, #delivered-date').text('');

            $.post("<?php echo base_url('contacts/tracking') ?>", $("#tracking_form").serialize(), function (
                response) {
                $('#tracking_submit').prop('disabled', false);
                $('#trackingTableBody').empty();

                if (response.status === 'success') {
                    // Show details section
                    $('.contact-tracking-details-card').fadeIn(400);

                    // Populate details
                    $('#customerName').text(response.main.c_name || 'N/A');
                    $('#lrNumber').text(response.main.lr_no || 'N/A');
                    $('#lrNumberBadge').text('LR: ' + (response.main.lr_no || 'N/A'));
                    $('#shipmentType').text(response.main.ship_type || 'N/A');
                    $('#origin').text(response.main.ship_from || 'N/A');
                    $('#destination').text(response.main.ship_to || 'N/A');
                    $('#ex_del_date').text(response.main.ex_del_date || 'N/A');

                    // Build map of fetched steps
                    const received = {};
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            if (item.type) {
                                received[item.type.toString()] = item;
                            }
                        });
                    }

                    // Update progress bar and steps
                    let progress = 0;
                    let activeStep = 0;

                    if (received['1']) {
                        progress = 12.5; // Starts processing
                        activeStep = 1;
                        $('.step-processing').addClass('completed');
                        $('#processing-date').text(received['1'].date + ' ' + (received['1'].time || ''));
                    }

                    if (received['2']) {
                        progress = 37.5;
                        activeStep = 2;
                        $('.step-picked').addClass('completed');
                        $('#picked-date').text(received['2'].date + ' ' + (received['2'].time || ''));
                    }

                    if (received['3']) {
                        progress = 62.5;
                        activeStep = 3;
                        $('.step-transit').addClass('completed');
                        $('#transit-date').text(received['3'].date + ' ' + (received['3'].time || ''));
                    }

                    if (received['4']) {
                        progress = 100;
                        activeStep = 4;
                        $('.step-delivered').addClass('completed');
                        $('#delivered-date').text(received['4'].date + ' ' + (received['4'].time || ''));
                    }

                    // Set active step (if any step is received)
                    if (activeStep > 0) {
                        $(`.contact-step:nth-child(${activeStep})`).addClass('active');
                        // Make progress bar reach the actual steps
                        let barProgress = 0;
                        if (activeStep === 1) barProgress = 0;
                        else if (activeStep === 2) barProgress = 33.33;
                        else if (activeStep === 3) barProgress = 66.66;
                        else if (activeStep === 4) barProgress = 100;
                        $('.contact-progress-bar').css('width', barProgress + '%');
                    }

                    // Build tracking history table
                    if (Array.isArray(response.timeline) && response.timeline.length > 0) {
                        // Filter out empty timeline events (if any)
                        let hasTimeline = false;
                        response.timeline.forEach(item => {
                            if (item.type && steps[item.type]) {
                                hasTimeline = true;
                                $('#trackingTableBody').append(`
                                    <tr>
                                        <td><span class="badge ${item.type === '4' ? 'bg-success' : 'bg-primary'} py-2 px-3 rounded-pill">${steps[item.type]}</span></td>
                                        <td><strong>${item.date}</strong> <span class="text-muted text-xs ms-1">${item.time || ''}</span></td>
                                        <td>
                                            <strong>${item.place ? item.place.toUpperCase() : ''}</strong>
                                            ${item.remarks ? '<br><span class="text-muted">' + item.remarks + '</span>' : ''}
                                        </td>
                                    </tr>
                                `);
                            }
                        });
                        if (!hasTimeline) {
                            $('#trackingTableBody').append('<tr><td colspan="3" class="text-center text-muted py-3">No history details available yet.</td></tr>');
                        }
                    } else {
                        $('#trackingTableBody').append('<tr><td colspan="3" class="text-center text-muted py-3">No history details available yet.</td></tr>');
                    }

                    $('#statusMessage').empty();
                } else {
                    // Error: hide details, show message
                    $('.contact-tracking-details-card').hide();
                    $('#statusMessage').html(
                        `<div class="alert alert-danger py-2"><i class="fa-solid fa-triangle-exclamation me-2"></i>${response.message}</div>`);
                }
            }, 'json').fail(function() {
                $('#tracking_submit').prop('disabled', false);
                $('.contact-tracking-details-card').hide();
                $('#statusMessage').html(
                    '<div class="alert alert-danger py-2"><i class="fa-solid fa-triangle-exclamation me-2"></i>An error occurred while retrieving tracking information. Please try again.</div>');
            });
        });

        // Clear resets everything
        $('button[type="reset"], .btn-tracking-clear').click(function () {
            $('#statusMessage').empty();
            $('#trackingNumber').val('');
            $('.contact-tracking-details-card').hide();
            $('.contact-step').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#customerName, #lrNumber, #lrNumberBadge, #shipmentType, #origin, #destination, #ex_del_date, #processing-date, #picked-date, #transit-date, #delivered-date')
                .text('');
            $('#trackingTableBody').empty();
        });
    });
</script>