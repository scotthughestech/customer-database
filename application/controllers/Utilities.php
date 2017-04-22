<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilities extends MY_Controller
{
    public function index()
    {
        // Add scripts to data
        $scripts = ['utilities.js'];
        $data = ['scripts' => $scripts];
        
        $this->load->view('page/header');
        $this->load->view('utilities');
        $this->load->view('page/footer', $data);
    }
    
    public function custom()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // JSON decode the post into an object
            $post = json_decode($this->input->raw_input_stream);
            // Set the column(s) to null
            $set = false;
            foreach ($post as $pkey => $pvalue) {
                if ($pvalue) {
                    $this->db->set($pkey, null);
                    $set = true;
                }
            }
            // Update the database
            if ($set) {
                $result = $this->db->update('customers');
            } else {
                $result = false;
            }            
            
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