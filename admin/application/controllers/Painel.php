<?php
class Painel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('logar_model');
        $this->load->model('perfil_model');
        $this->load->model('cao_model');
        $this->load->model('conf');
        $this->logar_model->protege();
        $this->user = $this->perfil_model->retorna_dados_usuario();
    }



    public function index() {
        $this->load->view('include/header');
        $this->load->view('painel/home');
        $this->load->view('include/footer');
    }

    public function form() {
        $this->load->view('include/header');
        $this->load->view('painel/form');
        $this->load->view('include/footer');
    }

    public function ver($id) {
        $dados['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('painel/ver', $dados);
        $this->load->view('include/footer');
    }

    

    public function apaga_form($id) {
        if ($this->input->post('enviar') != null) {
            if($this->conf->apaga_form($id)){
                $this->conf->set_alertas("success|Formulário apagado!");
                redirect('painel/form');
            }
        }
        $dados['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('painel/apaga_form', $dados);
        $this->load->view('include/footer');
    }


    public function adota_form($id) {
        $cao = $this->conf->ver_form($id)->cao_id;
        if ($this->input->post('enviar') != null) {
            if($this->conf->adota_form($id, $cao)){
                $this->conf->set_alertas("success|Adoção realizada com sucesso!");
                redirect('painel/form');
            }
        }
        $dados['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('painel/adota_form', $dados);
        $this->load->view('include/footer');
    }




















    public function caes() {
        $this->load->view('include/header');
        $this->load->view('cao/todos');
        $this->load->view('include/footer');
    }

    public function ver_cao($id) {
        $dados['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('cao/ver', $dados);
        $this->load->view('include/footer');
    }

    

    public function apagar_cao($id) {
        if ($this->input->post('enviar') != null) {
            if($this->conf->apagar_cao($id)){
                $this->conf->set_alertas("success|Cão removido!");
                redirect('painel/caes');
            }
        }
        $dados['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('cao/apagar', $dados);
        $this->load->view('include/footer');
    }


    public function edita_cao($id) {
        $cao = $this->conf->ver_form($id)->cao_id;
        if ($this->input->post('enviar') != null) {
            $form = $this->input->post();
            unset($form['enviar']);
            if($this->conf->editar_cao($id, $form)){
                $this->conf->set_alertas("success|Cão editado com sucesso!");
                redirect('painel/caes');
            }
        }
        $dados['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('cao/edita', $dados);
        $this->load->view('include/footer');
    }

    public function inserir_cao() {
        if ($this->input->post('enviar') != null) {
            $form = $this->input->post();
            unset($form['enviar']);
            
            $foto = $_FILES['foto'];
            //var_dump($foto);
            $imagedata = file_get_contents($foto["tmp_name"]);
            $base64 = 'data:'.$foto["type"].';base64,'.base64_encode($imagedata);
            //var_dump($base64);
            $form['cao_foto'] = $base64;
            if($this->conf->inserir_cao($form)){
                $this->conf->set_alertas("success|Cão inserido com sucesso!");
                redirect('painel/caes');
            }
        }
        $this->load->view('include/header');
        $this->load->view('cao/inserir');
        $this->load->view('include/footer');
    }









    public function users() {
        $this->load->view('include/header');
        $this->load->view('users/todos');
        $this->load->view('include/footer');
    }

    

    public function apagar_user($id) {
        if ($this->input->post('enviar') != null) {
            if($this->conf->apagar_user($id)){
                $this->conf->set_alertas("success|Usuário removido!");
                redirect('painel/users');
            }
        }
        $dados['id'] = $id;
        $this->load->view('include/header');
        $this->load->view('users/apagar', $dados);
        $this->load->view('include/footer');
    }


    public function inserir_user() {
        if ($this->input->post('enviar') != null) {
            $form = $this->input->post();
            unset($form['enviar']);
            if($this->conf->inserir_user($form)){
                $this->conf->set_alertas("success|Usuário inserido com sucesso!");
                redirect('painel/users');
            }
        }
        $this->load->view('include/header');
        $this->load->view('users/inserir');
        $this->load->view('include/footer');
    }
  


}
