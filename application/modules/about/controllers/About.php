<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "Best Packers and Movers | About Us - " . $this->comp['company3'];
        $data['description'] = "Learn about " . $this->comp['company3'] . " - India's trusted packers and movers. Discover our " . $this->comp['experience'] . " years legacy, shifting infrastructure, and commitment to safe relocations.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us - Trusted Packers & Movers | " . $this->comp['company3'];
        $data['description'] = "Find out why customers prefer " . $this->comp['company3'] . " for household shifting, vehicle transport, and office relocation. 100% safe, reliable, and transparent pricing.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) - Shifting Queries | " . $this->comp['company3'];
        $data['description'] = "Get quick answers to common queries about shifting charges, transit insurance, packing quality, and delivery timelines at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $data['title'] = "Customer Reviews & Shifting Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read genuine customer reviews and moving testimonials about " . $this->comp['company3'] . " household shifting, car transportation, and commercial moving services.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy - Safe Shifting | " . $this->comp['company3'];
        $data['description'] = "Read the privacy policy of " . $this->comp['company3'] . ". Learn how we protect, handle, and secure your personal details during your relocation process.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions - Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "Understand the terms, guidelines, and conditions governing home shifting, transport insurance, and cargo moving services with " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }

    function packingTips()
    {
        $data['title'] = "Expert Packing Tips & Moving Checklist Guide | " . $this->comp['company3'];
        $data['description'] = "Get professional packing tips, guides, and weekly countdown checklists from " . $this->comp['company3'] . " to ensure a smooth, damage-free household move.";
        $data['module'] = "about";
        $data['view_file'] = "packing_tips";
        echo Modules::run('template/layout2', $data);
    }

    function certificates()
    {
        $data['title'] = "Our Certificates & Documents | " . $this->comp['company3'];
        $data['description'] = "Explore verified work orders, registration documents, and official certifications of " . $this->comp['company3'] . ". ISO Certified & IBA Approved Packers and Movers.";
        $data['module'] = "about";
        $data['view_file'] = "certificates";
        echo Modules::run('template/layout2', $data);
    }

    function payment()
    {
        $data['title'] = "Online Payment - Secure Shifting Payments | " . $this->comp['company3'];
        $data['description'] = "Make secure online payments for your household shifting, vehicle transport, or warehouse booking with " . $this->comp['company3'] . ". Scan our verified QR codes to pay.";
        $data['module'] = "about";
        $data['view_file'] = "payment";
        echo Modules::run('template/layout2', $data);
    }
}

