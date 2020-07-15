<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Juradorj extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $user = $this->session->userdata("jurado_rj");

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
        $this->load->view('jurados/reportagensjornalisticas');
        $this->load->view('includes/footer');
    }

    public function reportagensjornalisticas()
    {

        $this->load->model('listagem_model');
        $data['trabalhos'] = $this->listagem_model->getReportagensJornalisticas();

        $this->load->view('includes/header');
        $this->load->view('trabalhos/jurados/reportagensjornalisticas',$data);
        $this->load->view('includes/footer');

      
    }

    public function candidatoreportagensjornalisticas($inscricao_id)
    {
        
        $this->load->model('listar_model');
        $query = $this->listar_model->getCandidatoRj($inscricao_id);

        $this->load->view('includes/header');
        $this->load->view('jurados/candidatorj',$query);
        $this->load->view('includes/footer');
      
        
    }



}

