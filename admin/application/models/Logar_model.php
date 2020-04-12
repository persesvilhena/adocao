<?php

class Logar_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }


    ////////////////////////////////////////////////////
    ////////////////// SISTEMA LOGIN ///////////////////
    ////////////////////////////////////////////////////

    function logar($usuario, $senha){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('login', $usuario);
        $this->db->where('senha', $senha);
        $resultado = $this->db->get()->result();
        if($resultado){
            $this->session->set_userdata('id', $resultado[0]->id);
            $this->session->set_userdata('login', $resultado[0]->login);
            $this->session->set_userdata('logado', '1');
            redirect("painel");
        }else{
            $this->session->set_userdata('logado', '0');
            redirect("home/logar/incorreto");
        }
    }

    function protege(){
        if(isset($this->session->userdata['logado'])){
            if($this->session->userdata['logado'] == 1){
                //echo "ta";
            }else{
                redirect("home/logar/");
            }
        }else{
            redirect("home/logar/");
        }
    }

    function verifica_logado(){
        if(isset($this->session->userdata['logado'])){
            if($this->session->userdata['logado'] == 1){
                redirect("painel/");
            }
        }
    }






    ////////////////////////////////////////////////////////
    ////////////////// SISTEMA DE CADASTRO /////////////////
    ////////////////////////////////////////////////////////
    /*function cadastrar($login, $senha, $nome, $sobre){
        if(($login != null) && ($senha != null) && ($nome != null) && ($sobre != null)){
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('login', $login);
            $resultado = (bool)($this->db->get()->result());
            if(!$resultado){
                $data = array(
                'login' => $login,
                'senha' => $senha,
                'nome' => $nome,
                'sobre' => $sobre,
                'cidade' => 0,
                'apriori' => '{"car":"","classIndex":"-1","delta":"0.05","lowerBoundMinSupport":"0.1","metricType":"0","minMetric":"0.9","minRules":"10","outputItemSets":"","removeAllMissingCols":"","significanceLevel":"-1.0","upperBoundMinSupport":"1.0","treatZeroAsMissing":"","verbose":""}',
                'config' => '{"dir":"C:\/xampp\/htdocs\/tcc\/"}',
                'campus' => 0,
                'es_campus' => 'null',
                'es_editais' => 'null'
                );
                $this->db->insert('usuario', $data);

                return $this->db->affected_rows();
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }*/




}
