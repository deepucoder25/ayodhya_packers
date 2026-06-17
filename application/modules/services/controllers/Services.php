<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        $data['title'] = "Professional Shifting & Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Explore our complete range of shifting and relocation services by " . $this->comp['company3'] . ". From packing and moving to vehicle shifting, warehousing, and transit insurance.";
        $data['module'] = "services";
        $data['view_file'] = "services";
        echo Modules::run('template/layout2', $data);
    }

    function packingAndMoving()
    {
        $data['title'] = "Best Packing & Moving Services | " . $this->comp['company3'];
        $data['description'] = "Get professional and secure packing and moving services by " . $this->comp['company3'] . ". Premium quality packaging materials and safe transit across India.";
        $data['module'] = "services";
        $data['view_file'] = "packing_and_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingAndUnloading()
    {
        $data['title'] = "Safe Loading & Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Reliable loading and unloading services by " . $this->comp['company3'] . ". Our experienced handlers ensure risk-free loading, handling, and unloading of your goods.";
        $data['module'] = "services";
        $data['view_file'] = "loading_and_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function residentialRelocation()
    {
        $data['title'] = "Top-Rated Residential Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Hassle-free household shifting and home relocation services by " . $this->comp['company3'] . ". Safe and smooth door-to-door household moving at affordable rates.";
        $data['module'] = "services";
        $data['view_file'] = "residential_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function officeRelocation()
    {
        $data['title'] = "Seamless Office Shifting & Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Minimize business downtime with office relocation services from " . $this->comp['company3'] . ". Secure transport for computers, IT equipment, files, and furniture.";
        $data['module'] = "services";
        $data['view_file'] = "office_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function carTransportation()
    {
        $data['title'] = "Secure Car Shifting & Carrier Services | " . $this->comp['company3'];
        $data['description'] = "Professional car carrier and vehicle transport services by " . $this->comp['company3'] . ". We ensure scratch-free and prompt delivery of your car across India.";
        $data['module'] = "services";
        $data['view_file'] = "car_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function internationalTransportation()
    {
        $data['title'] = "Reliable International Shifting & Cargo Services | " . $this->comp['company3'];
        $data['description'] = "Global overseas relocation services by " . $this->comp['company3'] . ". We provide safe container shipping, customs clearance, and global logistics support.";
        $data['module'] = "services";
        $data['view_file'] = "international_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function warehousingAndStorage()
    {
        $data['title'] = "Spacious Warehousing & Storage Solutions | " . $this->comp['company3'];
        $data['description'] = "Secure and clean household and business storage services from " . $this->comp['company3'] . ". Features 24/7 CCTV monitoring and flexible short/long-term storage.";
        $data['module'] = "services";
        $data['view_file'] = "warehousing_and_storage";
        echo Modules::run('template/layout2', $data);
    }

    function transportInsurance()
    {
        $data['title'] = "Comprehensive Transit Insurance Services | " . $this->comp['company3'];
        $data['description'] = "Secure your moving items with transit insurance services by " . $this->comp['company3'] . ". Enjoy peace of mind with complete protection against transit damage or loss.";
        $data['module'] = "services";
        $data['view_file'] = "transport_insurance";
        echo Modules::run('template/layout2', $data);
    }

    function heavyMachineryShifting()
    {
        $data['title'] = "Industrial Shifting & Heavy Machinery Moving | " . $this->comp['company3'];
        $data['description'] = "Safe and expert industrial relocation services from " . $this->comp['company3'] . ". Professional handling, cranes, and transport for heavy machinery and factory equipment.";
        $data['module'] = "services";
        $data['view_file'] = "heavy_machinery_and_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function bikeTransportation()
    {
        $data['title'] = "Secure Bike Shifting & Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Get secure, damage-free bike shipping and motorcycle transportation services by " . $this->comp['company3'] . ". Specialized two-wheeler transport using enclosed carriers.";
        $data['module'] = "services";
        $data['view_file'] = "bike_transportation";
        echo Modules::run('template/layout2', $data);
    }

    function homeRelocation()
    {
        $data['title'] = "Safe Household Shifting & Home Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Experienced home relocation and domestic shifting services by " . $this->comp['company3'] . ". Safe, stress-free household relocation with door-to-door delivery.";
        $data['module'] = "services";
        $data['view_file'] = "home_relocation";
        echo Modules::run('template/layout2', $data);
    }
}

