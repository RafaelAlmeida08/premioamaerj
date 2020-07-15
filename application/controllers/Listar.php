<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Listar extends CI_Controller {



    public function __construct()

    {

        parent::__construct();



        //Atribuindo o conteúdo que veio do formulário para a váriável

        $user = $this->session->userdata("usuario_admin");

        // Se o usuário estiver logado

        if(empty($user))

        {           

            redirect(base_url('admin'));

        }

    }



    public function candidatotrabalhosacademicos($inscricao_id)
    {
        
        $this->load->model('listar_model');
        $query = $this->listar_model->getCandidato($inscricao_id);

        $this->load->view('includes/header');
        $this->load->view('candidatota',$query);
        $this->load->view('includes/footer');
      
        
    }

    public function candidatotrabalhosdosmagistrados($inscricao_id)
    {
        
        $this->load->model('listar_model');
        $query = $this->listar_model->getCandidatoTm($inscricao_id);

        $this->load->view('includes/header');
        $this->load->view('candidatotm',$query);
        $this->load->view('includes/footer');
      
        
    }

    public function candidatoreportagensjornalisticas($inscricao_id)
    {
        
        $this->load->model('listar_model');
        $query = $this->listar_model->getCandidatoRj($inscricao_id);

        $this->load->view('includes/header');
        $this->load->view('candidatorj',$query);
        $this->load->view('includes/footer');
      
        
    }

    public function candidatopraticashumanisticas($inscricao_id)
    {
        
        $this->load->model('listar_model');
        $query = $this->listar_model->getCandidatoPh($inscricao_id);

        $this->load->view('includes/header');
        $this->load->view('candidatoph',$query);
        $this->load->view('includes/footer');
      
        
    }
    

}

