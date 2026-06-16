<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "404 Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The requested page was not found at " . $this->comp['company3'] . ". Explore our homepage to find out more about our packing and shifting services.";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }

    function index()
    {
        $data['title'] = "Best Packers and Movers - Shifting & Relocation | " . $this->comp['company3'];
        $data['description'] = "Reliable, ISO-certified packing and shifting services by " . $this->comp['company3'] . ". Get a free quote for household shifting, office relocation, and car transport services.";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()
    {
        // Reserved for redirect checks
    }
}
