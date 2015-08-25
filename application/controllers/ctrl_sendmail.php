    <?php

class ctrl_sendmail extends CI_Controller {

    function __construct() {
        parent::__construct();

    }

    function index()
    {


        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        /*Adding the validation rules*/

        $this->form_validation->set_rules('txt_receivermail', 'Receiver Email', 'required|valid_email');
        $this->form_validation->set_rules('txt_mailsubject', 'Email Subject', 'required|trim');
        $this->form_validation->set_rules('txtarea_mailcontent', 'Email Content', 'trim|required');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('mailbox');
        }
        else
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
            $config['validate']     = FALSE;
            $config['priority']     = 3;
            $config['newline']      = "\r\n";
            $config['crlf']         = "\r\n";

            $this->load->library('email');
            $this->email->initialize($config);

            $this->email->from('chintestphp@gmail.com', 'Devins Advertising');
            $this->email->to($this->input->post('txt_receivermail'));
            /*$this->email->cc('trimantra@gmail.com');*/

            $this->email->subject($this->input->post('txt_mailsubject'));
            $this->email->message($this->input->post('txtarea_mailcontent'));

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





}
