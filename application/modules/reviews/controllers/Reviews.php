<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    private function migrateDatabase() {
        $this->load->database();
        if (!$this->db->field_exists('r_type', 'reviews')) {
            $this->load->dbforge();
            $fields = array(
                'r_type' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                    'default' => 'Customer'
                )
            );
            $this->dbforge->add_column('reviews', $fields);
        }
    }

    function index()
    {
        $this->migrateDatabase();
        
        $star_filter = $this->input->get('star');
        
        $this->db->where('status', 1);
        if ($star_filter) {
            $this->db->where('stars', (int)$star_filter);
        }
        $this->db->order_by('r_id', 'ASC'); // Reverser view order
        $query = $this->db->get('reviews');
        
        $reviews = [];
        foreach ($query->result_array() as $row) {
            $reviews[] = [
                'name' => $row['name'],
                'city' => !empty($row['r_type']) ? $row['r_type'] : 'Customer',
                'rating' => (int) $row['stars'],
                'review' => $row['r_desc'],
                'created_at' => $row['posted_date']
            ];
        }

        $data['reviews'] = $reviews;
        $data['title'] = $this->comp['company3'] . " Reviews, Ratings & Customer Feedback";
        $data['description'] = "Read genuine ratings, shifting testimonials, and customer reviews for " . $this->comp['company3'] . ". See why we are rated 4.9/5 stars for packers and movers services.";
        $data['module'] = "about";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
    }

    function submit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->migrateDatabase();
            
            $city = $this->input->post('city') ? $this->input->post('city') : 'Customer';
            $insert_data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'r_title' => 'Feedback from ' . $city,
                'r_desc' => $this->input->post('review'),
                'stars' => (int) $this->input->post('rating'),
                'r_img' => '',
                'status' => 0, // Pending approval (Hide)
                'b_id' => 0,
                'views' => 0,
                'posted_date' => date('Y-m-d H:i:s'),
                'timestamp' => date('Y-m-d H:i:s'),
                'r_type' => $city
            ];
            
            $this->db->insert('reviews', $insert_data);
            
            $this->session->set_flashdata('success', 'Thank you! Your review has been submitted for approval.');
            redirect('reviews');
        }
    }

    function review() {
        $this->migrateDatabase();
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('title', 'Review Title', 'required|trim');
        $this->form_validation->set_rules('stars', 'Rating', 'required|integer|greater_than[0]|less_than[6]');
        $this->form_validation->set_rules('desc', 'Description', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $response = [
                'err' => 1,
                'msg' => validation_errors(' ', ' ')
            ];
            $this->output->set_content_type('application/json')->set_output(json_encode($response));
            return;
        }

        $image_name = '';
        if (!empty($_FILES['img']['name'])) {
            $config['upload_path'] = './assets/temp';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp|jfif|WEBP|JFIF';
            
            $rand_number = mt_rand(0, 85);
            $timestamp = time();
            $config['file_name'] =  $rand_number . $timestamp;
            $config['overwrite'] = false;
            $config['remove_spaces'] = true;

            $this->load->library('upload');
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload('img')) {
                $response = [
                    'err' => 1,
                    'msg' => $this->upload->display_errors(' ', ' ')
                ];
                $this->output->set_content_type('application/json')->set_output(json_encode($response));
                return;
            } else {
                $upload_data = $this->upload->data();
                $image_name = $upload_data['file_name'];
                
                // Copy/resize main image to assets/uploads/reviewimg/
                $config_resize['source_image'] = './assets/temp/' . $image_name;
                $config_resize['new_image'] = './assets/uploads/reviewimg/' . $image_name;
                $config_resize['maintain_ratio'] = TRUE;
                $config_resize['width'] = 800;
                $config_resize['height'] = 600;

                $this->load->library('image_lib');
                $this->image_lib->initialize($config_resize);
                $this->image_lib->resize();
                
                // Copy/resize thumbnail to assets/uploads/reviewimg/thumb/
                $this->image_lib->clear();
                $config_thumb['source_image'] = './assets/temp/' . $image_name;
                $config_thumb['new_image'] = './assets/uploads/reviewimg/thumb/' . $image_name;
                $config_thumb['maintain_ratio'] = TRUE;
                $config_thumb['width'] = 100;
                $config_thumb['height'] = 100;
                
                $this->image_lib->initialize($config_thumb);
                $this->image_lib->resize();
                
                // Remove source temp file
                @unlink('./assets/temp/' . $image_name);
            }
        }

        $insert_data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'r_title' => $this->input->post('title'),
            'r_desc' => $this->input->post('desc'),
            'stars' => (int) $this->input->post('stars'),
            'r_img' => $image_name,
            'status' => 0, // Pending approval (Hide)
            'b_id' => 0,
            'views' => 0,
            'posted_date' => date('Y-m-d H:i:s'),
            'timestamp' => date('Y-m-d H:i:s'),
            'r_type' => 'Customer'
        ];
        
        $this->db->insert('reviews', $insert_data);
        
        $response = [
            'err' => 0,
            'msg' => 'Success'
        ];
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
}