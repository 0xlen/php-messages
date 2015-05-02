<?php

/**
 * Home controller
 */
class Home extends CI_Controller
{
    
    public function index()
    {
        $data['contents'][] = 'O_O';
        $this->load->view('home', $data);
    }
}
