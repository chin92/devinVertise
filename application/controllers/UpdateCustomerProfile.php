<?php

class UpdateCustomerProfile extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url', 'html'));
        $this->load->library('form_validation');


    }
    function index(){
        $this->load->view('updateCustomerProfile');
    }

    function  editDetails(){

        $username = $this->session->userdata('username');

        $this->load->model('customerModel');
        $data['results']=$this->customerModel->getAll($username);
        $this->load->view('updateCustomerProfile',$data);
    }

    function updateCustomer()
    {
        $username = $this->session->userdata('username');
        $this->load->model('customerModel');

        $this->load->helper('form');
        $this->load->library('form_validation');

        //field name...error message... validation ruless..

        $this->form_validation->set_rules('firstName', 'First Name', 'trim');
        $this->form_validation->set_rules('lastName', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required|regex_match[/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]?$/]');


        if ($this->form_validation->run() == FALSE) {

            $this->editDetails();
            $this->load->view('updateCustomerProfile');
        } else {

            if ($query = $this->customerModel->updateCustomer($username)) {
                redirect('ViewCustomerProfile/getValues');
            }
        }
    }





}