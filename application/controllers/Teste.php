<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends CI_Controller {

    public function cadastro()
    {
        $this->load->view('teste');
    }

    public function insere()
    {

        $config['upload_path'] =FCPATH . "uploads/inscricoes";
        $config['allowed_types'] = 'pdf';    
        $config['encrypt_name'] = TRUE;    

        $this->load->library("upload",$config);


        $data['usuario_nome'] = $this->input->post('nome');
        $this->load->model('teste_model');

        if(!$this->teste_model->valida($data['usuario_nome']))
        {
            if($this->upload->do_upload('nome_arquivo'))
            {
                $info_arquivo = $this->upload->data();
                $data['nome_arquivo'] = $info_arquivo['file_name'];
    
            }

            $this->teste_model->cadastrar($data);
            $this->session->set_flashdata('msg', 'Cadastrado com sucesso!');
            return redirect('teste/cadastro');
            
        }
        else
        {   
            $this->session->set_flashdata('msg', 'Não foi possível cadastrar');
            return redirect('teste/cadastro');
            
            
        }
    }

    public function emailform()
    {
        $this->load->view('testeemail');
    }
    function enviar_mensagem(){

       /* $config = array(
            'protocol' => 'smtp', 
            'smtp_host' => 'ssl://smtp.live.com',
            'smtp_port' => 587,
            'smtp_user' => 'someEmail@gmail.com',
            'smtp_pass' => 'Password'
        
        );

        $mensagem = "Nome:".$this->input->post('txt_nome').br();
        $mensagem .= "E-mail:".$this->input->post('txt_email').br();
        $mensagem .= "Menagem:".$this->input->post('txt_mensagem').br();*/


        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.googlemail.com',
            'smtp_port' => '587',
            'smtp_user' => 'rafael.engcomp8@gmail.com',
            'smtp_pass' => 'rafaelxp13',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
       

        $this->email->from('rafael.engcomp8@gmail.com', 'Meu');
        $this->email->to('rafaelalmeida.08@hotmail.com');
        $this->email->subject('assunto de e-mail');
        $this->email->message('teste');
        if ($this->email->send()) {
            echo 'foi';
        }
        else {
            echo 'nao';
        }
      }

}

