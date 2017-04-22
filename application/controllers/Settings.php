<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller
{
    public function index()
    {
        // Add scripts to data
        $scripts = ['settings.js'];
        $data = ['scripts' => $scripts];
        
        $this->load->view('page/header');
        $this->load->view('settings');
        $this->load->view('page/footer', $data);
    }
    
    private function _getOldUser()
    {
        // Load the user data from the database
        $query = $this->db->get('users');
        
        // Collect the first result
        $row = $query->row();
        
        // Return the result
        return $row;
    }
    
    public function user()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // JSON decode the post into an object
            $post = json_decode($this->input->raw_input_stream);
             
            // Fetch the old user from the database
            $user = $this->_getOldUser();
            
            // Verify the "old" password against the db hash
            $hash = $user->password;
            if (password_verify($post->oldpassword, $hash)) {
                // Update user in database
                $id = $user->id;
                $data = [
                    'user' => $post->user,
                    'password' => password_hash($post->password, PASSWORD_DEFAULT)
                ];
                $result = $this->db->update('users', $data, ['id' => $id]);
            } else {
                // Not verified - update nothing
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
    
    public function getcustom()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // Grab the settings from the database
            $query = $this->db->get('settings');
            $results = $query->result();
            // Return them as JSON
            echo json_encode($results);            
         } else {
            exit('No direct script access allowed');
        }        
    }
    
    public function postcustom()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // JSON decode the post into an object
            $post = json_decode($this->input->raw_input_stream);
            foreach ($post as $key => $value) {
                $this->db->set('svalue', $value);
                $this->db->where('skey', $key);
                $this->db->update('settings');
            }
                 
        } else {
            exit('No direct script access allowed');
        }    
        
    }
}