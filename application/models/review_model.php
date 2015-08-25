<?php
/**
 * Created by PhpStorm.
 * User: Chinthana
 * Date: 12/05/2015
 * Time: 00:27
 */

class review_model extends CI_Model
{

    function search($limit, $offset)
    {
        //results query
        $query = $this->db->select('subject,inquiry,date,inquiryID,relationship,customer_email,country,interest')
            ->from('inquiries')
            ->limit($limit, $offset);

        $ret['rows'] = $query->get()->result();

        //count query

        $query2 = $this->db->select('COUNT(*) as count', FALSE)
            ->from('inquiries');

        $tmp = $query2->get()->result();
        $ret['num_rows'] = $tmp[0]->count;

        return $ret;
    }
}