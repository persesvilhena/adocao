<?php

class Conf extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function user(){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('id', $this->session->userdata['id']);
        $res = $this->db->get()->result()[0];
        return $res;
    }

    


    function qtde_form_na(){
    	$this->db->select('count(*) as qtde');
    	$this->db->from('form');
    	$this->db->where('for_res', 0);
    	return $this->db->get()->result()[0]->qtde;
    }

    function qtde_form_a(){
        $this->db->select('count(*) as qtde');
        $this->db->from('form');
        $this->db->where('for_res', 1);
        return $this->db->get()->result()[0]->qtde;
    }

    function qtde_users(){
        $this->db->select('count(*) as qtde');
        $this->db->from('usuario');
        return $this->db->get()->result()[0]->qtde;
    }

    function qtde_caes(){
        $this->db->select('count(*) as qtde');
        $this->db->from('cao');
        $this->db->where('cao_inativo', '0');
        return $this->db->get()->result()[0]->qtde;
    }

    function forms(){
    	$this->db->select('*');
    	$this->db->from('form');
        $this->db->join('cao', 'for_cao = cao_id', 'left');
        $this->db->where('for_res', 0);
    	return $this->db->get()->result();
    }

    function apagar($id){
    	$this->db->where('inscricao', $id);
        $this->db->delete('questionario');
        return $this->db->affected_rows();
    }

  

    function ver_form($id){
        $this->db->select('*');
        $this->db->from('form');
        $this->db->where('for_id', $id);
        $this->db->join('cao', 'for_cao = cao_id', 'inner');
        return $this->db->get()->result()[0];
    }

    function apaga_form($id){
        $dados = array(
            'for_res' => 1,
        );
        $this->db->where('for_id', $id);
        $this->db->update('form', $dados);
        return $this->db->affected_rows();
    }

    function adota_form($id, $cao){
        $dados = array(
            'for_res' => 1,
        );
        $this->db->where('for_id', $id);
        $this->db->update('form', $dados);
        $dados = array(
            'cao_inativo' => 1,
        );
        $this->db->where('cao_id', $cao);
        $this->db->update('cao', $dados);
        return $this->db->affected_rows();
    }












    function caes(){
        $this->db->select('*');
        $this->db->from('cao');
        $this->db->where('cao_inativo', 0);
        return $this->db->get()->result();
    }

  

    function ver_cao($id){
        $this->db->select('*');
        $this->db->from('cao');
        $this->db->where('cao_id', $id);
        return $this->db->get()->result()[0];
    }

    function editar_cao($id, $dados){
        $this->db->where('cao_id', $id);
        $this->db->update('cao', $dados);
        return $this->db->affected_rows();
    }

    function apagar_cao($cao){
        $dados = array(
            'cao_inativo' => 1,
        );
        $this->db->where('cao_id', $cao);
        $this->db->update('cao', $dados);
        return $this->db->affected_rows();
    }

    function inserir_cao($data){
        $this->db->insert('cao', $data);
        return $this->db->affected_rows();
    }














    function users(){
        $this->db->select('*');
        $this->db->from('usuario');
        return $this->db->get()->result();
    }

    function apagar_user($id){
        $this->db->where('id', $id);
        $this->db->delete('usuario');
        return $this->db->affected_rows();
    }

    function inserir_user($data){
        $this->db->insert('usuario', $data);
        return $this->db->affected_rows();
    }



  



    function set_alertas($alerta){
        if(!isset($this->session->userdata['alertas'])){
            $this->session->set_userdata('alertas', null);
        }
        $alertas = $this->session->userdata['alertas'];
        if($alertas == null){
            $alertas = array();
        }
        array_push($alertas, $alerta);
        $this->session->set_userdata('alertas', $alertas);
    }

    function get_alertas(){
        if(isset($this->session->userdata['alertas'])){
            $alertas = $this->session->userdata['alertas'];
            $this->session->set_userdata('alertas', null);
            $result = "";
            foreach ($alertas as $n) {
                $tipo = explode("|", $n)[0];
                $msg = explode("|", $n)[1];
                $result .= "<div class=\"alert alert-". $tipo ." alert-dismissible\" role=\"alert\" style=\"margin-top: 15px;\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <strong>Aviso!</strong> ". $msg ."
                </div>";
            }
            return $result;
        }
    }
}
