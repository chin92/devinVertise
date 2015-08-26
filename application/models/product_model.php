<?php
/**
 * Created by PhpStorm.
 * User: Chinthana
 * Date: 21/03/2015
 * Time: 07:03
 */
class product_model extends CI_Model{

    function search($limit,$offset)
    {
        //results query
        $query=$this->db->select('productID,productName,price,category,quantity,type,description')
            ->from('products')
            ->limit($limit,$offset);

        $ret['rows']=$query->get()->result();

        //count query

        $query2=$this->db->select('COUNT(*) as count',FALSE)
        ->from('products');

        $tmp=$query2->get()->result();
        $ret['num_rows']=$tmp[0]->count;

        return $ret;
    }

}