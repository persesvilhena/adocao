<?php
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('logar_model');
    }

    public function index() {
        $this->logar_model->verifica_logado();
        redirect("home/logar/");
    }

    public function logar($aviso = null){
        $this->logar_model->verifica_logado();

        //verifica avisos
        $dados = null;
        if($aviso == "incorreto"){ $dados['aviso'] = "Dados Incorretos"; $dados['tipo'] = "danger"; }
        if($aviso == "logout"){ $dados['aviso'] = "Logoff realizado com sucesso!"; $dados['tipo'] = "success"; }
        if($aviso == "cadastrou"){ $dados['aviso'] = "Cadastro realizado com sucesso!"; $dados['tipo'] = "success"; }
        if($aviso == "problema"){ $dados['aviso'] = "Houve um problema! Por favor contate o administrador!"; $dados['tipo'] = "danger"; }

        //$this->load->view('login/header');
        $this->load->view('login/home', $dados);
        //$this->load->view('login/footer');
    }

    public function login() {
        //Recebe do formulário
        $user = $this->input->post('login');
        $pass = $this->input->post('senha');
        ///chama a funcao de logar
        $this->logar_model->logar($user, $pass);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect("home/logar/logout");
    }

    ////////////////////////////////////////////////////////
    ////////////////// SISTEMA DE CADASTRO /////////////////
    ////////////////////////////////////////////////////////
    public function cadastro(){
        $this->logar_model->verifica_logado();
        if($this->input->post('cadastrar') != null){
            $login = $this->input->post('login');
            $senha = $this->input->post('senha');
            $nome = $this->input->post('nome');
            $sobre = $this->input->post('sobre');

            $resultado = $this->logar_model->cadastrar($login, $senha, $nome, $sobre);

            if($resultado){ 
                redirect("home/logar/cadastrou");
            }else{
                redirect("home/logar/problema");
            }
        }
        $this->load->view('login/header');
        $this->load->view('login/cadastro');
        $this->load->view('login/footer');
    }





}
