<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Trabalhos extends CI_Controller {

    public function __construct()

    {
        parent::__construct();

    }

	public function index()

	{
		$this->load->view('index');
    }

    public function trabalhosAcademicos()

    {
        $this->load->view('includes/header');
        $this->load->view('trabalhos-academicos');
        $this->load->view('includes/footer');
    }
    
    public function praticashumanisticas()

    {
        $this->load->view('includes/header');
        $this->load->view('praticas-humanisticas');
        $this->load->view('includes/footer');
    }

    public function reportagensjornalisticas()

    {
        $this->load->view('includes/header');
        $this->load->view('reportagens-jornalisticas');
        $this->load->view('includes/footer');

    }

    public function trabalhosdosmagistrados()

    {
        $this->load->view('includes/header');
        $this->load->view('trabalhos-dos-magistrados');
        $this->load->view('includes/footer');
    }

    public function teste()

    {
        $this->load->view('cadastro/formulario');
    }

    public function cadastrar()

    {

        // Pegando os valores que vieram do formulário e inserindo na variável data

        $data = array(

            'inscricao_nome'            => $this->input->post('nomeCadastro'),

            'inscricao_coautor'         => $this->input->post('coautorCadastro'),

            'inscricao_profissao'       => $this->input->post('profissaoCadastro'),

            'inscricao_email'           => $this->input->post('emailCadastro'),

            'inscricao_telefone'        => $this->input->post('telefoneCadastro'),

            'inscricao_cpf'             => $this->input->post('cpfCadastro'),

            'inscricao_titulotrabalho'  => $this->input->post('titulodotrabalhoCadastro'),

            'inscricao_descricao'       => $this->input->post('descricaoCadastro')

        );



       // Carregando a nossa model

       $this->load->model('trabalhos_model');



    // Se não existir o cpf no banco de dados, ele faz o cadastro, passando o array para a nossa model

       if(!$this->trabalhos_model->verificaCPF($data['inscricao_cpf']))

       {

            $this->trabalhos_model->insert($data);

            echo "usuario cadastrado com sucesso";

       }

       // Se existir o cpf no banco de dados, ele retorna um erro

       else

       {

           redirect('trabalhos/');

       }

    }

}

