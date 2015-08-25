<?php

class ViewHotelWearProducts extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');


    }

    function index(){
        $this->load->view('viewHotelWearProducts');
    }
}
