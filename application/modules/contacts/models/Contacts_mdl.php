<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Contacts_mdl extends CI_Model
{
    private $config;
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->config = array(
            'protocol' => 'smtp',
            'smtp_host' => '',
            'smtp_port' => 587,
            'smtp_user' => '',
            'smtp_pass' => '',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
    }



public function bookings()
{
    $this->load->library('email', $this->config);
    $this->email->set_newline("\r\n");
    $this->email->set_crlf("\r\n");

    $name = $this->input->post('name');
    $email = $this->input->post('email');
    $phone = $this->input->post('phone');
    $mfrom = $this->input->post('mfrom');
    $mto = $this->input->post('mto');
    $msg = $this->input->post('message');
    $service = $this->input->post('service');
    $articles = $this->input->post('articles');

    $serviceMap = array(
        'packing-and-moving'           => 'Packing and Moving',
        'loading-and-unloading'         => 'Loading and Unloading',
        'residential-relocation'       => 'Residential Relocation',
        'home-relocation'              => 'Home Relocation',
        'office-relocation'            => 'Office Relocation',
        'car-transportation'           => 'Car Transportation',
        'bike-transportation'          => 'Bike Transportation',
        'international-transportation' => 'International Transportation',
        'warehousing-and-storage'      => 'Warehousing and Storage',
        'transport-insurance'          => 'Transport Insurance',
        'heavy-machinery-and-shifting' => 'Heavy Machinery and Shifting',

        // Legacy / alternative mappings for compatibility
        'packing_moving'               => 'Packing and Moving',
        'loading_unloading'             => 'Loading and Unloading',
        'household'                    => 'Household Shifting / Home Relocation',
        'office'                       => 'Office Relocation',
        'car'                          => 'Car Transportation',
        'bike'                         => 'Bike Transportation',
        'vehicle'                      => 'Vehicle Transportation',
        'storage'                      => 'Warehousing & Storage Services',
        'international'                => 'International Transportation',
        'insurance'                    => 'Transport Insurance',
        'heavy_machinery'              => 'Heavy Machinery Shifting'
    );
    $serviceLabel = isset($serviceMap[$service]) ? $serviceMap[$service] : '';

    $formattedMsg = "";
    if (!empty($serviceLabel)) {
        $formattedMsg .= "Service: " . $serviceLabel . "\n";
    }
    if (!empty($articles)) {
        $formattedMsg .= "Articles: " . $articles . "\n";
    }
    if (!empty($msg)) {
        $formattedMsg .= "Message: " . $msg;
    } else {
        $formattedMsg .= "Message: N/A";
    }

    // Insert booking data into the database
    $this->db->insert('bookings', array(
        "name" => $name,
        "email" => $email,
        "phone" => $phone,
        "mfrom" => $mfrom,
        "mto" => $mto,
        "msg" => $formattedMsg
    ));

    // Admin notification email
    $msgd = !empty($serviceLabel) ? $serviceLabel : "Services Needed";
    $articlesHtml = "";
    if (!empty($articles)) {
        $articlesHtml = "<br><br>Articles to Move: <b>" . htmlspecialchars($articles) . "</b>";
    }
    $adminMessage = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$msgd</q></b><br><br>Client's Name:  <b>$name</b><br><br>From: <b>$mfrom</b><br><br>To: <b>$mto</b>$articlesHtml<br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b><br><br>Client Msg: <b>" . nl2br(htmlspecialchars($msg)) . "</b></div>";

    $this->email->to("");
    $this->email->from("");
  
    $this->email->subject('New Booking Enquiry Received');
    $this->email->message($adminMessage);
    $this->email->send();

    
    return true;
}

  
    
    public function contact(){
        $this->load->library('email', $this->config);
        $this->email->set_newline("\r\n");
        $this->email->set_crlf("\r\n");
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $qry = $this->input->post('message');
        $this->db->insert('contacts', array("name"=>$name,"phone"=>$phone,"message"=>$qry,"email" => $email));
        $message = "<div style='padding:30px;background:#e6e6e6;font-size: 18px !important;'>Client's Query: <b><q>$qry</q></b><br><br>Client's Name:  <b>$name</b><br><br>Phone Number: <b><a href='tel:$phone'>$phone</a></b><br><br>Email: <b> $email</b></div>";
      $this->email->to("");
    $this->email->from("");
       
        $this->email->subject('New Contacts Enquiry Received ');
        $this->email->message($message);
        $this->email->send();
        return true;
    }

    public function trackings()
    {
        $trackingNumber = $this->input->post('trackingNumber');
        $this->db->select("
            ship_main.id as main_id,
            ship_main.gr_no as tracking_id,
            ship_main.gr_no as lr_no,
            ship_main.c_name,
            ship_main.ship_from,
            ship_main.ship_to,
            'Household Goods Relocation' as ship_type,
            ship_main.date as ex_del_date,
            
            ship_tracking.id as tracking_row_id,
            ship_tracking.type,
            ship_tracking.date,
            ship_tracking.time,
            ship_tracking.place,
            ship_tracking.remarks
        ", FALSE);

        $this->db->from('ship_main');
        $this->db->join('ship_tracking', 'ship_main.id = ship_tracking.sh_id', 'left');
        $this->db->group_start()
            ->where('ship_main.gr_no', $trackingNumber)
            ->or_where('ship_main.id', $trackingNumber)
            ->group_end();
        $this->db->order_by('ship_tracking.type', 'ASC');
        return $this->db->get()->result_array();
    }
}
