<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    

    function photo_gallery()
    {
        $data['title'] = "Shifting & Packing Photos Gallery | " . $this->comp['company3'];
        $data['description'] = "Explore photos of our high-quality packing materials, household shifting process, secure warehouse storage, and vehicle transport operations at " . $this->comp['company3'] . ".";
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Packers Movers Shifting Videos Gallery | " . $this->comp['company3'];
        $data['description'] = "Watch " . $this->comp['company3'] . " in action. See videos of our step-by-step packing process, container loading, and safe vehicle transportation methods.";
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
    

}