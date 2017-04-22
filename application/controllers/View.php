<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends MY_Controller
{
    public function index()
    {
        // Set up data array
        $data = [];
        
        // Add styles to data
        $styles = ['datatables.min.css'];
        $data['styles'] = $styles;
        
        // Add custom labels to data
        $custom = $this->_GetCustom();
        $data['custom'] = $custom;
        
        // Add scripts to data
        $scripts = ['datatables.min.js','view.js'];
        $data['scripts'] = $scripts;
        
        $this->load->view('page/header', $data);
        $this->load->view('view', $data);
        $this->load->view('page/footer', $data);
    }
    
    public function select()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // Get customers database table
            $query = $this->db->get('customers');
            $results = $query->result();
            // Add DT_RowId to results
            foreach ($results as $result) {
                $result->DT_RowId = $result->id;
            }
            // Return as json
            echo json_encode($results);
        } else {
            exit('No direct script access allowed');
        } 
    }
    
    public function delete()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // JSON decode the post into an object
            $ids = json_decode($this->input->raw_input_stream);
            // Delete ids from database
            $this->db->where_in('id', $ids);
            $result = $this->db->delete('customers');
            if ($result) {
                echo json_encode('yes');
            } else {
                echo json_encode('no');
            }
        } else {
            exit('No direct script access allowed');
        } 
    }
    
    public function update()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // JSON decode the post into an object
            $post = json_decode($this->input->raw_input_stream);
            // Get the id
            $id = $post->id;
            // Unset the id and row id in the object
            unset($post->id);
            unset($post->DT_RowId);
            log_message('error', print_r($post, true));
            
            // Update the customer in the database
            $result = $this->db->update('customers', $post, ['id' => $id]);            
            
            if ($result) {
                echo json_encode('yes');
            } else {
                echo json_encode('no');
            }
        } else {
            exit('No direct script access allowed');
        } 
    }
    
    public function fakeit()
    {
        die('already ran');

        // require the Faker autoloader
        require_once '/var/www/html/cmdb/application/third_party/autoload.php';
        
        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create();
        
        for ($i=1; $i < 200; $i++) {
            $data = [
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'company' => $faker->company,
                'address1' => $faker->streetAddress,
                'city' => $faker->city,
                'state' => $faker->stateAbbr,
                'zip' => $faker->postcode,
                'country' => 'US',
                'email' => $faker->email,
                'phone' => $faker->phoneNumber                
            ];
            $this->db->insert('customers', $data);
        }       
        
        
        
    }
}