<?php

class ctrl_contact extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('insert_reviews_model');

    }

    function index()
    {


        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        /*Adding the validation rules*/

        $this->form_validation->set_rules('combo_relationship', 'Relationship to the company', 'required');
        $this->form_validation->set_rules('text_subject', 'Email Subject', 'required|trim');
        $this->form_validation->set_rules('text_interest', 'Area of interest', 'trim|required');
        $this->form_validation->set_rules('text_email', 'Email address', 'trim|required|valid_email');
        $this->form_validation->set_rules('msg', 'Email Content', 'trim|required');




        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('view_contact_us');
        }
        else
        {
            $date=date("Y/m/d");

            $data = array(
                'relationship' => $this->input->post('combo_relationship'),
                'subject' => $this->input->post('text_subject'),
                'interest' => $this->input->post('text_interest'),
                'customer_email' => $this->input->post('text_email'),
                'inquiry'=>$this->input->post('msg'),
                'country'=>$this->input->post('combo_country'),
                'date'=>$this->input->post($date)


            );
            /*// Transfering Data To Model*/
            $this->insert_reviews_model->form_insert($data);


            $config['useragent']    = 'CodeIgniter';
            $config['protocol']     = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.googlemail.com';
            $config['smtp_user']    = 'chintestphp@gmail.com'; // Your gmail id
            $config['smtp_pass']    = 'chintestphp119'; // Your gmail Password
            $config['smtp_port']    = 465;
            $config['wordwrap']     = TRUE;
            $config['wrapchars']    = 76;
            $config['mailtype']     = 'html';
            $config['validate']     = FALSE;
            $config['priority']     = 3;
            $config['newline']      = "\r\n";
            $config['crlf']         = "\r\n";

            $this->load->library('email');
            $this->email->initialize($config);

            $this->load->library('email');
            $this->email->initialize($config);

            $this->email->from('chintestphp@gmail.com', 'Devins Advertising');
            $this->email->to($this->input->post('text_email'));

            $this->email->subject('Your inquiry is being processed, thank you for your interest');
            $this->email->message('Thank you for your interest in Devins Advertising, your inquiry is been processed and you will receive a response shortly.');


            $this->email->send();

            echo('Your inquiry has been added, you will receive an email shortly');

        }

    }





}
