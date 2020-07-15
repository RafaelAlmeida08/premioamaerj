<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Juradoph extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $user = $this->session->userdata("jurado_ph");

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
        $this->load->view('jurados/praticashumanisticas');
        $this->load->view('includes/footer');
    }

    public function praticashumanisticas()
    {
        $this->load->model('listagem_model');
        $data['trabalhos'] = $this->listagem_model->getPraticasHumanisticas();

        $this->load->view('includes/header');
        $this->load->view('trabalhos/jurados/praticashumanisticas',$data);
        $this->load->view('includes/footer');
    }

    public function candidatopraticashumanisticas($inscricao_id)
    {
        
        $this->load->model('listar_model');
        $query = $this->listar_model->getCandidatoPh($inscricao_id);

        $this->load->view('includes/header');
        $this->load->view('jurados/candidatoph',$query);
        $this->load->view('includes/footer');
      
        
    }

}

