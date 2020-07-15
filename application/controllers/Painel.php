<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $user = $this->session->userdata("usuario_admin"); 

        if(empty($user))
        {
            redirect(base_url('admin'));
        }

    }

    public function index()
    {       
        $this->load->view('includes/header');        
        $this->load->view('dashboard');
        $this->load->view('includes/footer');
    }

    public function trabalhos()
    {
        $this->load->view('includes/header');        
        $this->load->view('trabalhos');
        $this->load->view('includes/footer');
    }

    public function trabalhosacademicos()
    {
        $this->load->model('listagem_model');
        $data['trabalhos'] = $this->listagem_model->getTrabalhosAcademicos();
        $this->load->view('includes/header');
        $this->load->view('trabalhos/admin/trabalhosacademicos',$data);
        $this->load->view('includes/footer');
    }

    public function trabalhosdosmagistrados()
    {
        $this->load->model('listagem_model');
        $data['trabalhos'] = $this->listagem_model->getTrabalhosDosMagistrados();
        $this->load->view('includes/header');
        $this->load->view('trabalhos/admin/trabalhosdosmagistrados',$data);
        $this->load->view('includes/footer');
    }

    public function praticashumanisticas()
    {
        $this->load->model('listagem_model');
        $data['trabalhos'] = $this->listagem_model->getPraticasHumanisticas();
        $this->load->view('includes/header');
        $this->load->view('trabalhos/admin/praticashumanisticas',$data);
        $this->load->view('includes/footer');
    }

    public function reportagensjornalisticas()
    {
        $this->load->model('listagem_model');
        $data['trabalhos'] = $this->listagem_model->getReportagensJornalisticas();
        $this->load->view('includes/header');
        $this->load->view('trabalhos/admin/reportagensjornalisticas',$data);
        $this->load->view('includes/footer');
      
    }

}

