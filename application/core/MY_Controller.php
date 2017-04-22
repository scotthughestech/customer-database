<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        // Call parent constructor
        parent::__construct();
        // If not logged in redirect
        if (!$this->session->logged_in) {
            redirect('/');
        }
    }
    
    protected function _getCustom()
    {
        // Grab all the custom* records from the settings table
        $this->db->like('skey', 'custom', 'after');
        $query = $this->db->get('settings');
        $results = $query->result();
        
        // Make an array to hold the custom labels
        $custom = [];
        
        // Loop through the results to pull out the custom labels
        foreach ($results as $result) {
            if ($result->svalue) {
                $custom[$result->skey] = $result->svalue;
            }
        }
        
        // Return the custom labels
        return $custom;
    }
}