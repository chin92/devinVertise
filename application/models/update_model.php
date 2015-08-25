<?php
/**
 * Created by PhpStorm.
 * User: Chinthana
 * Date: 22/03/2015
 * Time: 09:30
 */
class update_model extends CI_Model{
// Function To Fetch All product Record
    function show_products(){
        $query = $this->db->get('products');
        $query_result = $query->result();
        return $query_result;
    }
// Function To Fetch Selected Product Record
    function show_product_id($data){
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('productID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected Product
    function update_product_id1($id,$data){
        $this->db->where('productID', $id);
        $this->db->update('products', $data);
    }
}