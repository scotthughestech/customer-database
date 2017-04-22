<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller
{
    public function index()
    {
        // Set up data array
        $data = [];

        // Add custom labels to data
        $custom = $this->_GetCustom();
        $data['custom'] = $custom;

        // Add scripts to data
        $scripts = ['add.js'];
        $data['scripts'] = $scripts;
        
        $this->load->view('page/header');
        $this->load->view('add', $data);
        $this->load->view('page/footer', $data);
    }
    
    public function insert()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // JSON decode the post into an object
            $post = json_decode($this->input->raw_input_stream);
            // Insert the post data into the database
            $result = $this->db->insert('customers', $post);
            // Send back results
            if ($result) {
                echo json_encode('yes');
            } else {
                echo json_encode('no');
            }
        } else {
            exit('No direct script access allowed');
        }  
    }
}