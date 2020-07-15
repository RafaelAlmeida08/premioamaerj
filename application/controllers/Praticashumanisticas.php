<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Praticashumanisticas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function cadastrar()

    {

        // Pegando os valores que vieram do formulário e inserindo na variável data

        $data = array(

            'inscricao_nome'                                => $this->input->post('nomeCadastro'),
            'inscricao_coautor'                             => $this->input->post('coautorCadastro'),
            'inscricao_profissao'                           => $this->input->post('profissaoCadastro'),
            'inscricao_email'                               => $this->input->post('emailCadastro'),
            'inscricao_telefone'                            => $this->input->post('telefoneCadastro'),
            'inscricao_cpf'                                 => $this->input->post('cpfCadastro'),
            'inscricao_titulotrabalho'                      => $this->input->post('titulodotrabalhoCadastro'),
            'inscricao_descricao'                           => $this->input->post('descricaoCadastro'),
            'inscricao_linkMateria'                         => $this->input->post('linkMateriaCadastro'),
            'inscricao_tempoFuncionamentoCadastro'          => $this->input->post('tempoFuncionamentoCadastro'),
            'inscricao_inovacaoPraticaCadastro'             => $this->input->post('inovacaoPraticaCadastro'),
            'inscricao_processoImplementacaoCadastro'       => $this->input->post('processoImplementacaoCadastro'),
            'inscricao_fatoresSucessoCadastro'              => $this->input->post('fatoresSucessoCadastro'),
            'inscricao_etapasFuncionamentoCadastro'         => $this->input->post('etapasFuncionamentoCadastro'),
            'inscricao_infraestruturaCadastro'              => $this->input->post('infraestruturaCadastro'),
            'inscricao_equipeCadastro'                      => $this->input->post('equipeCadastro'),
            'inscricao_orcamentoCadastro'                   => $this->input->post('orcamentoCadastro'),
            'inscricao_funcaoPessoaCadastro'                => $this->input->post('funcaoPessoaCadastro')

        );



       // Carregando a nossa model

       $this->load->model('trabalhos_model');



    // Se não existir o cpf no banco de dados, ele faz o cadastro, passando o array para a nossa model

       if(!$this->trabalhos_model->vCPFph($data['inscricao_cpf']))

       {
            $this->trabalhos_model->insert_praticas($data);
            $this->session->set_flashdata('sucesso', 'Trabalho cadastrado com sucesso!');
            redirect('trabalhos/praticashumanisticas');            

       }

       // Se existir o cpf no banco de dados, ele retorna um erro

       else

       {

        $this->session->set_flashdata('erro', 'CPF já cadastrado!');
        redirect('trabalhos/praticashumanisticas'); 

       }

    }

}

