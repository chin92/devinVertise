<?php

class controller_products extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('insert_product_model');
        $this->load->model('update_model');
        /*$this->display();*/


    }

    function index()
    {


        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $results=$this->product_model->search(15,0);
        $data['products']=$results['rows'];
        $data['num_results']=$results['num_rows'];

        /*Adding the validation rules*/

        $this->form_validation->set_rules('txt_productName', 'Product Name', 'required|min_length[5]|max_length[50]|alpha');
        $this->form_validation->set_rules('txt_productId', 'Product ID', 'required');
        $this->form_validation->set_rules('txt_productPrice', 'Price', 'required|regex_match[/^[0-9]+(?:\.[0-9]+)?$/]');
        $this->form_validation->set_rules('combo_productCategory', 'Category', 'required');
        $this->form_validation->set_rules('combo_productType', 'Category', 'required');
        $this->form_validation->set_rules('txt_productQty', 'Product quantity', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('adminMain',$data);
        }
        else
        {
          /*  // Saving the values inside the array*/
            $data = array(
                'productID' => $this->input->post('txt_productId'),
                'productName' => $this->input->post('txt_productName'),
                'price' => $this->input->post('txt_productPrice'),
                'category' => $this->input->post('combo_productCategory'),
                'type'=>$this->input->post('combo_productType'),
                'quantity'=>$this->input->post('txt_productQty'),
                'description'=>$this->input->post('txt_productDesc')

            );
            /*// Transfering Data To Model*/
            try {
                $this->insert_product_model->form_insert($data);

            }
            catch(ErrorException $e)
            {
                echo 'The ProductID is duplicated.';
            }

           /* $this->load->view('formsuccess');*/

        }



    }

  /*  //displaying the product details in a table*/

    function display($offset=0){

        $limit=15;
        $this->load->model('product_model');
        $results=$this->product_model->search($limit,$offset);
        $data['products']=$results['rows'];
        $data['num_results']=$results['num_rows'];
        $this->load->view('adminMain',$data);
    }



    function delete($productID){
        $this->db->where('productID', $productID);
        $this->db->delete('products');
        $this->display();
    }

    /*Displaying the product details before updating*/

    function display_before_update()
    {
        $id = $this->uri->segment(3);
        $data['products'] = $this->update_model->show_products();
        $data['single_product'] = $this->update_model->show_product_id($id);
        $this->load->view('update_view', $data);
    }

    /*function updateProduct()
    {
        $data = array(
            'title' => $title,
            'name' => $name,
            'date' => $date
        );

        $this->db->where('id', $id);
        $this->db->update('mytable', $data);
    }*/

}
