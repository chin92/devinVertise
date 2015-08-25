<?php
/**
 * Created by PhpStorm.
 * User: Chinthana
 * Date: 20/03/2015
 * Time: 12:35
 */
class insert_reviews_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    function form_insert($data){
        // data insertion to the inquiries table
        $this->db->insert('inquiries', $data);
    }
}
?>