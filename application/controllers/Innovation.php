<?php

class Innovation extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->library('form_validation');


    }

    public function innovation(){

        $username = $this->session->userdata('username');

        $is_logged_in=$this->session->userdata('is_logged_in');

        if($is_logged_in ==true){
            $this->load->model('customerModel');
            $data['results']=$this->customerModel->getAll($username);
            $this->load->view('innovation',$data);
        }
        else{
           // $this->homePage();
            Echo 'You are not a registered User for this site';
        }
        //$this->load->view('innovation');

    }



    function index(){
        //$this->load->view('innovation');

        $titleName = $this->input->post('name');
        $description = $this->input->post('description');
        $quantity = $this->input->post('quantity');
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $phone = $this->input->post('phone');


        $email =$this->input->post('email');


        $this->load->helper('string');

        //assign the session to a variable
        $username = $this->session->userdata('username');

        $is_logged_in=$this->session->userdata('is_logged_in');





        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name',' name','trim|required');
        $this->form_validation->set_rules('description',' description','trim|required');
        $this->form_validation->set_rules('quantity',' quantity','trim|required|numeric');
        //$this->form_validation->set_rules('pic',' image','trim|required');

        if($this->form_validation->run()== FALSE)
        {
            //$this->innovation();

            ///get all details of the user
            if($is_logged_in ==true){
                $this->load->model('customerModel');
                $data['results']=$this->customerModel->getAll($username);
                $this->load->view('innovation',$data);


            }
        }
        else {

            $this->load->model('innovationModel');

            $title = $_POST["name"];
            $description = $_POST["description"];
            $quantity = $_POST["quantity"];
            $url = $this->do_upload();

            $this->innovationModel->save($title, $description, $quantity, $url);
            $this->innovation();
          echo "<script>
alert('Thank you for sharing your innovation');
window.location.href='Innovation';
</script>";



            //$this->refresh();
            $msg = "'<html>
<!--<script type='text/javascript'>

    alert('Thank you for sharing your innovative idea we will contact  you soon');
  </script>-->

                        <body>
                        <table align='right'>
                            <tr>
                                <td>
                                    <label><h4>Thank you for sharing your innovative idea we will contact  you soon</h4></label>
                                </td>

                            </tr>


                        </table> ";
           // echo $msg;


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


            $this->email->from($email, 'Devins Advertising Innovation');
            $this->email->to('sawsansaleem@gmail.com');
            // $this->email->cc('trimantra@gmail.com');

            $this->email->subject('New Innovation ordered');


            $this->email->message('<html>
                                                    <body>
                                                        <table>
                                                            <tr>
                                                                <td>
                                                                        Name:'. $fname .'  '.$lname.' <br>
                                                                        Email Address:'. '  '.$email .'<br>
                                                                        Product Name:'. '  '.$titleName .'<br>
                                                                        Description:'. '  '.$description .'<br>
                                                                        Quantity:'. '  '.$quantity .'<br>
                                                                        Phone:'.'  '.$phone.'<br>
                                                                </td>
                                                            </tr>
                                                       </table>
                                                    </body>
                                        </html>');


            if ($this->email->send()) {

                // echo 'Your email has been sent !';
            } else {
                show_error($this->email->print_debugger());
            }

        }

    }


    private function do_upload(){
        //The explode() function breaks a string into an array.
        //break to check the .jpg or .png and all

        //explode(separator,string,limit)
        $type = explode('.', $_FILES["pic"]["name"]);
        $type = $type[count ($type) -1];
        $url = "./images/".uniqid(rand()).'.'.$type;
        if(in_array($type,array("jpg","jpeg","gif","png","PNG","JPEG","JPG")))
            if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
                if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url)) //string file name and destination
                    return $url;
        return "";
    }

}
