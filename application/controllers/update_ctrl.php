<?php
/**
 * Created by PhpStorm.
 * User: Chinthana
 * Date: 22/03/2015
 * Time: 09:35
 */
class update_ctrl extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('update_model');
    }
    function show_product_id() {
        $id = $this->uri->segment(3);
        $data['products'] = $this->update_model->show_products();
        $data['single_product'] = $this->update_model->show_product_id($id);
        $this->load->view('adminMain', $data);
    }

    function update_product_id1() {
        $id= $this->input->post('txt_productId');
        $data = array(
            'productName' => $this->input->post('txt_productName'),
            'price' => $this->input->post('txt_productPrice'),
            'category' => $this->input->post('combo_productCategory'),
            'quantity' => $this->input->post('txt_productQty'),
            'type' => $this->input->post('combo_productType'),
            'description' => $this->input->post('txt_productDesc')
        );
        $this->update_model->update_product_id1($id,$data);
        $this->show_product_id();
    }
}