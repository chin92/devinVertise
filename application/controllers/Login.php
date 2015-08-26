<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url','html'));
        $this->load->library('form_validation');
        $this->load->library('session');


    }

   function index()
    {
        //loads the main page to be displayed in the page
        $this->load->view('login');
    }


    /* function changePassword()
     {
         $this->load->model('customer_model');

         $this->load->view('changePassword');

     }*/


    function validate_credentials()
    {

        $this->load->helper('form');
        $this->load->library('form_validation');
        //validation..fieldname....error...conditions
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');

        }

        else {

            $this->load->model('customerModel');
            $query = $this->customerModel->validate();

            if ($query) //if the user credidential is validated
            {
                $data = array(
                    'username' => $this->input->post('username'),
                    'is_logged_in' => true //wen a session is created we can add values to session object
                );
                $this->session->set_userdata($data);
                $a = "Admin";


                $this->db->where('username', $this->input->post('username'));
                $this->db->where('type',$a);
                $admin = $this->db->get('customer');

                if( $admin->num_rows == 1){
                    redirect('controller_products');
                }



                else // if($this->db->where('username', $this->input->post('username')) && $this->db->where('type','Client'))
                {
                    redirect('ViewCustomerProfile/getValues');
                }



                //retrieving the session data


            } else {
                $this->load->view('login');
                //echo 'not a registered user';
                echo "<script>
alert('You are not a registered user');
window.location.href='Login';
</script>";
            }
        }



    }




    function viewForgotPass(){
        $this->load->view('forgotPassword');
    }

    function viewChange(){ //directs to change the password
        $this->load->view('login/changePassword');
    }

    /*  function resetPass()
      {
          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
          $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[32]');
          $this->form_validation->set_rules('passwordCon','Password confirm','trim|required|matches[password]');


          if ($this->form_validation->run() == FALSE) {
              $this->viewForgotPass();
          } else {

              $add = $this->input->post('email');
              // echo $add;
              $this->load->model('customer_model');

              $results = $this->customer_model->checkEmail($add);


              foreach($results as $row){
                  if($add==$row->email_address)
                  {
                      if ($query = $this->customer_model->setEm($add)) {

                          redirect('login');
                          die();
                      }

                  }

              }

              echo 'email does not exist';


          }

      }*/








}