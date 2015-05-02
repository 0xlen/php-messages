<?php

/**
 * Home controller
 */
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Messages_model', 'messages');
    }
    
    public function index()
    {
        $data['posts'] = $this->messages->get();
        $this->load->view('home', $data);
    }
}
