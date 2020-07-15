<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Juradotm extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $user = $this->session->userdata("jurado_tm");

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
        $this->load->view('jurados/trabalhosdosmagistrados');
        $this->load->view('includes/footer');
    }

    public function trabalhosdosmagistrados()
    {
        $this->load->model('listagem_model');
        $data['trabalhos'] = $this->listagem_model->getTrabalhosDosMagistrados();

        $this->load->view('includes/header');
        $this->load->view('trabalhos/jurados/trabalhosdosmagistrados',$data);
        $this->load->view('includes/footer');
    }

    public function candidatotrabalhosdosmagistrados($inscricao_id)
    {
        
        $this->load->model('listar_model');
        $query = $this->listar_model->getCandidatoTm($inscricao_id);

        $this->load->view('includes/header');
        $this->load->view('jurados/candidatotm',$query);
        $this->load->view('includes/footer');
      
        
    }

}

