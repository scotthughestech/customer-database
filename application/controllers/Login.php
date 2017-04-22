<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        // Check if logged in
        if ($this->session->logged_in) {
            // If yes, redirect to the app
            redirect('/view/index');
        } else {
            // Load the login form
            $this->load->view('login');
        }
                
    }
    
    private function _ispwvalid($user, $password)
    {
        // Get user row from database
        $this->db->where('user', $user);
        $query = $this->db->get('users');
        $row = $query->row();
        
        // Found the user in the db?
        if (isset($row)) {
            // Check if password is valid
            $hash = $row->password;
            if (password_verify($password, $hash)) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    public function check()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // JSON decode the post into an object
            $post = json_decode($this->input->raw_input_stream);
            
            // Check if password is valid
            $valid = $this->_ispwvalid($post->user, $post->password);
            
            // If valid
            if ($valid) {
                // Set logged in
                $this->session->set_userdata('logged_in', true);
                // Return yes
                echo json_encode('yes');
                return;
            } else {
                // Return no
                echo json_encode('no');
                return;
            }            
        } else {
            exit('No direct script access allowed');
        }        
    }
    
    public function logout()
    {
        // Logout
        $this->session->unset_userdata('logged_in');
        
        // Redirect to the login form
        redirect('/');
    }
}