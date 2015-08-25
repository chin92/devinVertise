<?php

class CustomerModel extends CI_Model
{

    //validate the user exits
    //check if ther eis a user and if the row is returned,, then there is a user
    function validate()
    {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $query = $this->db->get('customer');

        if ($query->num_rows == 1) {
            return true;

        }

    }


    //insert users details...for signup
    function create_member()
    {
        $new_member_insert_data = array(
            'first_name'=> $this->input->post('firstName') ,
            'last_name'=> $this->input->post('lastName') ,
            'address'=> $this->input->post('address') ,
            'email_address'=> $this->input->post('email') ,
            'dobirth'=> $this->input->post('dob') ,
            'phone'=> $this->input->post('phone') ,


            'username'=> $this->input->post('username') ,
            'password'=> md5($this->input->post('password'))
        );
        $insert= $this->db->insert('customer',$new_member_insert_data);
        return $insert;
    }

    ////get all user details
    function getAll($username){
        $this->db->select('*');
        $this->db->where('username',$username);
        $query= $this->db->get('customer');
        return $query->result();


    }

    //update customer

    function updateCustomer($username)
    {
        $new_member_update_data = array(
            'first_name'=> $this->input->post('firstName') ,
            'last_name'=> $this->input->post('lastName') ,
            'address'=> $this->input->post('address') ,
            'email_address'=> $this->input->post('email') ,
            'phone'=> $this->input->post('phone') ,


        );

        $this->db->where('username',$username);
        $update=$this->db->update('customer',$new_member_update_data);
        return $update;
    }

    //innovation

/*    function save($title,$description,$quantity,$url){
        $this->db->set('title',$title);
        $this->db->set('description',$description);
        $this->db->set('quantity',$quantity);
        $this->db->set('image',$url);
        $this->db->insert('innovation');

    }*/



}