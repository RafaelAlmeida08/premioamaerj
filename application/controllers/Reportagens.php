<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Reportagens extends CI_Controller {



    public function __construct()

    {

        parent::__construct();

      

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

            'inscricao_descricao'       => $this->input->post('descricaoCadastro'),

            'inscricao_link'            => $this->input->post('linkMateriaCadastro')

        );

         // Setando o caminho do upload do trabalho, o tipo permitido e o nome

         $config['upload_path'] =FCPATH . "uploads/inscricoes/reportagens";
         $config['allowed_types'] = 'pdf';    
         $config['encrypt_name'] = TRUE;  
 
         //carregando a biblioteca de upload e passando as configurações
         
         $this->load->library("upload",$config);
 
        // Carregando a nossa model
 
        $this->load->model('trabalhos_model');



       // Carregando a nossa model

       $this->load->model('trabalhos_model');



    // Se não existir o cpf no banco de dados, ele faz o cadastro, passando o array para a nossa model

       if(!$this->trabalhos_model->vCPFrj($data['inscricao_cpf']))

       {
            if($this->upload->do_upload('pdfCadastro'))
            {
                $info_arquivo = $this->upload->data();
                $data['inscricao_pdf'] = $info_arquivo['file_name'];
            }

            $this->trabalhos_model->insert_reportagens($data);
            $this->session->set_flashdata('sucesso', 'Trabalho cadastrado com sucesso!');
            redirect('trabalhos/reportagensjornalisticas');

       }

       // Se existir o cpf no banco de dados, ele retorna um erro

       else

       {
            $this->session->set_flashdata('erro', 'CPF já cadastrado!');
            redirect('trabalhos/reportagensjornalisticas');          

       }



      

    }

}

