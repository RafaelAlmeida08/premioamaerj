<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public $emailLogin;
    public $senhaLogin;
   
    public function __construct()
    {
        parent::__construct();
    }   
    
    public function login($email,$senha)
    {    
        // Verifica no banco de dados se existe o usuário //
        $this->db->where('admin_email', $email);
        $this->db->where('admin_senha', $senha);

        // Se existir, busca os dados //
        $usuario = $this->db->get('admin')->row_array();

       // retorna os dados
        return $usuario;

    }


}
