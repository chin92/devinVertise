<?php

class Register extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->library('form_validation');


    }

    function index(){
        $this->load->view('register');
    }



    function create_member(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        //field name...error message... validation ruless..

        $this->form_validation->set_rules('firstName','First Name','trim|alpha');
        $this->form_validation->set_rules('lastName','Last Name','trim|required|alpha');
        $this->form_validation->set_rules('address','Address','trim|required');
        $this->form_validation->set_rules('email','Email Address','trim|required|valid_email');
        $this->form_validation->set_rules('dob','Date Of Birth','trim|required');
        $this->form_validation->set_rules('phone','Enter correct phone Number...','trim|required|regex_match[/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]?$/]');

        $this->form_validation->set_rules('username','Username already exists...','trim|required|min_length[4]|is_unique[customer.username]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('passwordCon','Password confirm','trim|required|matches[password]');

        if($this->form_validation->run()== FALSE)
        {
            $this->index();
        }
        else
        {
            $this->load->model('customerModel');

            if($query = $this->customerModel->create_member())
            {
                //if the  data is inserted correctly to db... then  display login page
                redirect('home/index');
            }
            else
            {
                echo "what";
                $this->index();
            }
        }
    }


}