<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index ()
    {
        $this->load->view('includes/header');
        $this->load->view('login');
        $this->load->view('includes/footer');
    }

    public function sair()
    {
        $this->session->set_userdata("usuario_admin","");
        $this->session->set_userdata("jurado_ph","");
        $this->session->set_userdata("usuario_admin","");
        $this->session->set_userdata("usuario_admin","");
        $this->session->set_userdata("usuario_admin","");
        $this->session->set_flashdata('logout_sucesso', 'Deslogado com sucesso!');         
        redirect(base_url(''));
    }

    public function entrar()
    {
        $this->load->model('login_model');
        // Setando os dados que vieram do formulário para as variáveis //
        $email = $this->input->post('emailLogin');
        $senha = $this->input->post('senhaLogin');
        // Passando para a model os dados que vieram do formulário através das variáveis //
        $usuario = $this->login_model->login($email,$senha);
        
            if($usuario)
            {                 
                if ($usuario['admin_lvl'] == 1)
                {
                    if($usuario['admin_cat'] == 1)
                    {
                        $this->session->set_userdata("jurado_ph", $usuario['admin_email']);   
                        redirect(base_url('juradoph'));              
                    }
                    if($usuario['admin_cat'] == 2)
                    {
                        $this->session->set_userdata("jurado_rj", $usuario['admin_email']);   
                        redirect(base_url('juradorj'));  
                    }
                    if($usuario['admin_cat'] == 3)
                    {
                        $this->session->set_userdata("jurado_ta", $usuario['admin_email']);   
                        redirect(base_url('juradota'));  
                    }
                    if($usuario['admin_cat'] == 4)
                    {
                        $this->session->set_userdata("jurado_tm", $usuario['admin_email']);   
                        redirect(base_url('juradotm'));  
                    }
                } 
                else 
                {
                    $this->session->set_userdata("usuario_admin", $usuario['admin_email']);
                    redirect(base_url('painel')); 
                }
                
            }
            else
            {
                $this->session->set_flashdata('erro_login', 'Usuário ou senha inválidos'); 
                redirect('admin');        
            }

    }

}
