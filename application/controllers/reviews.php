<?php
/**
 * Created by PhpStorm.
 * User: Chinthana
 * Date: 12/05/2015
 * Time: 01:26
 */

class reviews extends CI_Controller{


    function __construct() {
        parent::__construct();
        $this->load->model('review_model');
        $this->display();
        //$this->load->view('contactus');
    }


    function index()
    {

        $this->load->model('review_model');

    }

    function display($offset=0){

        $limit=15;
        $this->load->model('review_model');

        $results=$this->review_model->search($limit,$offset);
        $data['reviews']=$results['rows'];
        $data['num_results']=$results['num_rows'];

        $this->load->view('contactus',$data);
    }





    function delete($inquiryID){
        $this->db->where('inquiryID', $inquiryID);
        $this->db->delete('inquiries');
       /* $this->display();*/

        header( "refresh:2;" );
    }
}