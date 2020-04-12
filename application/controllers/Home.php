<?php
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('cao_model');
        $this->load->model('conf');
    }



    public function index() {
        $this->load->view('include/header');
        $this->load->view('painel/home');
        $this->load->view('include/footer');
    }

    public function busca() {
        $dados['par'] = $this->input->get('busca'); 

        $this->load->view('include/header');
        $this->load->view('painel/busca', $dados);
        $this->load->view('include/footer');
    }

    public function notificacoes() {
        $this->load->view('include/header');
        $this->load->view('painel/notificacao');
        $this->load->view('include/footer');
    }

    public function sobre() {
        $this->load->view('include/header');
        $this->load->view('painel/sobre');
        $this->load->view('include/footer');
    }

    public function obrigado() {
        $this->load->view('include/header');
        $this->load->view('painel/obrigado');
        $this->load->view('include/footer');
    }

    public function ver($id) {
        $dados['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('painel/ver', $dados);
        $this->load->view('include/footer');
    }

    public function form($id) {
        $dados['id'] = $id;
        if($this->input->post('enviar') != null){
            $data = $this->input->post();
            unset($data['enviar']);
            if($this->conf->form($data)){
                redirect('home/obrigado');
            }
        }
        $this->load->view('include/header');
        $this->load->view('painel/form', $dados);
        $this->load->view('include/footer');
    }

  


}
