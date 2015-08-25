<?php

class ResetPassword extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->library('form_validation');


    }
    /*  function viewPage(){
          $this->load->view('resetPassword_email_check');

      }*/

    function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('resetPassword');
        } else {

            $email = $this->input->post('email');

            $this->load->helper('string');
            $rs = random_string('alnum', 12); //which is the type and length alnum is alphanumeric

            $data = array(
                'rs' => $rs
            );
            $this->db->where('email_address', $email);
            $this->db->update('customer', $data);

            $config['useragent'] = 'CodeIgniter';
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_user'] = 'aster2enjoy@gmail.com'; // Your gmail id
            $config['smtp_pass'] = '24042404!'; // Your gmail Password
            $config['smtp_port'] = 465;
            $config['wordwrap'] = TRUE;
            $config['wrapchars'] = 76;
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['validate'] = FALSE;
            $config['priority'] = 3;
            $config['newline'] = "\r\n";
            $config['crlf'] = "\r\n";


            $this->load->library('email');
            $this->email->initialize($config);


            $this->email->from('aster2enjoy@gmail.com', 'Devins Advertising');
            $this->email->to($email);
            // $this->email->cc('trimantra@gmail.com');

            $this->email->subject('Reset Password');
            $this->email->message('Please go to this link to get your password.
                http://localhost/devinsadvertising/index.php/newPassword/index/' . $rs);


            if ($this->email->send()) {

                $this->load->view('passwordEmailSent');
            } else {
                show_error($this->email->print_debugger());
            }

        }
    }


    // to check whether the email id exists in database

    public function email_check($str)
    {
        $query = $this->db->get_where('customer', array('email_address' => $str), 1);

        if ($query->num_rows()== 1)
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('email_check', 'You are not a registered customer please register');
            return false;

        }
    }







}