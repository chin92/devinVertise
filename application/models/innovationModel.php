<?php

class InnovationModel extends CI_Model
{

    function save($title,$description,$quantity,$url){
        $this->db->set('title',$title);
        $this->db->set('description',$description);
        $this->db->set('quantity',$quantity);
        $this->db->set('image',$url);
        $this->db->insert('innovation');

    }




}

