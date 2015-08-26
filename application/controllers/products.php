<?php
/**
 * Created by PhpStorm.
 * User: Chinthana
 * Date: 21/03/2015
 * Time: 08:08
 */


class products extends CI_Controller{

    function display($offset=0){

        $limit=15;
        $this->load->model('product_model');

        $results=$this->product_model->search($limit,$offset);
        $data['products']=$results['rows'];
        $data['num_results']=$results['num_rows'];

        $this->load->view('index',$data);
    }
}