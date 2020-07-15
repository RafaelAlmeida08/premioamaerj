<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Juradota extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $user = $this->session->userdata("jurado_ta");

        //Atribuindo o conteúdo que veio do formulário para a váriável

        if(empty($user))
        {
            
            redirect(base_url('admin'));
        }

       

        // Se o usuário estiver logado

    }

    public function index()
    {   
        $this->load->view('includes/header');
        $this->load->view('jurados/trabalhosacademicos');
        $this->load->view('includes/footer');
    }

    public function trabalhosacademicos()
    {
        $this->load->model('listagem_model');
        $data['trabalhos'] = $this->listagem_model->getTrabalhosAcademicos();

        $this->load->view('includes/header');
        $this->load->view('trabalhos/jurados/trabalhosacademicos',$data);
        $this->load->view('includes/footer');
    }

    public function candidatotrabalhosacademicos($inscricao_id)
    {
        
        $this->load->model('listar_model');
        $query = $this->listar_model->getCandidato($inscricao_id);

        $this->load->view('includes/header');
        $this->load->view('jurados/candidatota',$query);
        $this->load->view('includes/footer');
      
        
    }

}

