<?php
/**
 * Created by PhpStorm.
 * User: Chinthana
 * Date: 10/05/2015
 * Time: 04:59
 */

class Ctrl_email extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $config['useragent']    = 'CodeIgniter';
        $config['protocol']     = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.googlemail.com';
        $config['smtp_user']    = 'chintestphp@gmail.com'; // Your gmail id
        $config['smtp_pass']    = 'chintestphp119'; // Your gmail Password
        $config['smtp_port']    = 465;
        $config['wordwrap']     = TRUE;
        $config['wrapchars']    = 76;
        $config['mailtype']     = 'html';
        $config['charset']      = 'iso-8859-1';
        $config['validate']     = FALSE;
        $config['priority']     = 3;
        $config['newline']      = "\r\n";
        $config['crlf']         = "\r\n";

        $this->load->library('email');
        $this->email->initialize($config);

        $this->email->from('chintestphp@gmail.com', 'Devins Advertising');
        $this->email->to('tveerasingham@gmail.com');
        /*$this->email->cc('trimantra@gmail.com');*/

        $this->email->subject('Testing email');
        $this->email->message('Testing the email class.');

        /*$this->email->send();*/

        if($this->email->send())
        {
            echo 'Your email has been sent !';
        }
        else
        {
            show_error($this->email->print_debugger());
        }


    }

} 