<?php

class ViewCustomerProfile extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');


    }
    function index(){
        $this->load->view('viewCustomerProfile');
    }

    function is_logged_in(){

        $is_logged_in=$this->session->userdata('is_logged_in');

        //if go to hompage or other page without logging in it will redirect to login page to sign in..
        if(!isset($is_logged_in)||$is_logged_in!=true)
        {
            echo 'no permission to access <a href="../login">Login</a>';
            die();

        }
    }


    function getValues()
    {
        $username = $this->session->userdata('username');

        $is_logged_in=$this->session->userdata('is_logged_in');

        if($is_logged_in ==true){
            $this->load->model('customerModel');
            $data['results']=$this->customerModel->getAll($username);
            $this->load->view('viewCustomerProfile',$data);
        }
        else{
            //$this->homePage();
            Echo 'You are not a registered User for this site';
        }
    }
}

