<?php

class Cao_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    function todos(){
        $this->db->select('*');
        $this->db->from('cao');
        $this->db->where('cao_inativo', 0);
        return $this->db->get()->result();
    }

    function busca($par){
        $this->db->select('*');
        $this->db->from('cao_ativo');
        $this->db->like('cao_apelido', $par, 'both'); 
        $this->db->or_like('cao_raca', $par, 'both'); 
        $this->db->or_like('cao_obs', $par, 'both'); 

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
