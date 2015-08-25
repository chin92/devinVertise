<?php

class customer_model extends CI_Model{

    function search($limit,$offset)
    {
        //results query
        $query=$this->db->select('customerID,customerEmail')
            ->from('customer')
            ->limit($limit,$offset);

        $ret['rows']=$query->get()->result();

        //count query

        $query2=$this->db->select('COUNT(*) as count',FALSE)
            ->from('customer');

        $tmp=$query2->get()->result();
        $ret['num_rows']=$tmp[0]->count;

        return $ret;
    }

}