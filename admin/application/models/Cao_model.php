<?php

class Cao_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function todos(){
        $this->db->select('*');
        $this->db->from('cao');
        return $this->db->get()->result();
    }

    function ver($id){
        $this->db->select('*');
        $this->db->from('cao');
        $this->db->where('cao_id', $id);
        return $this->db->get()->result()[0];
    }

    function alterar($id, $data){
        $this->db->where('cao_id', $id);
        $this->db->update('cao', $data);
        return $this->db->affected_rows();
    }


}
