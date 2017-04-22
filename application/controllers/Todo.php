<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends MY_Controller
{
    public function index()
    {
        // Set up data array
        $data = [];
        
        // Add styles to data
        $styles = ['fullcalendar.min.css', 'flatpickr.min.css'];
        $data['styles'] = $styles;
        
        // Add scripts to data
        $scripts = ['moment.min.js','fullcalendar.min.js', 'flatpickr.min.js', 'todo.js'];
        $data['scripts'] = $scripts;
        
        $this->load->view('page/header', $data);
        $this->load->view('todo', $data);
        $this->load->view('page/footer', $data);
    }
    
    public function feed() 
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // Fetch the start and end parameters
            $start = $this->input->get('start');
            $end = $this->input->get('end');
                        
            // Fetch events from db
            $this->db->where('start >=', $start);
            $this->db->where('start <=', $end);
            $query = $this->db->get('events');
            foreach($query->result() as $row) {
                $events[] = $row;
            }            

            // Return events as json
            echo json_encode($events);
        } else {
            exit('No direct script access allowed');
        }
    }
    
    public function save()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            
            // JSON decode the post into an object
            $post = json_decode($this->input->raw_input_stream);
            
            // Collect event data into array
            $data = [
                'title' => $post->title,
                'start' => $post->start,
                'end' => $post->end
            ];
            
            // Check if the event has an id
            if (isset($post->id)) {
                // We want to update the event
                $id = $post->id;
                $this->db->where('id', $id);
                $result = $this->db->update('events', $data);            
            } else {
                // We want to insert the new event
                $result = $this->db->insert('events', $data);
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
    
    public function delete()
    {
        // Check if this is an ajax request
        if ($this->input->is_ajax_request()) {
            // JSON decode the post into an object
            $post = json_decode($this->input->raw_input_stream);
            // Get id from post
            $id = $post->id;
            // Delete event from database
            $result = $this->db->delete('events', ['id' => $id]);
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