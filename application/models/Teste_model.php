<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Teste_Model extends CI_Model {

    public function cadastrar($data)
    {
        return $this->db->insert('teste',$data);
    }

    public function valida($nome)
    {
        $this->db->where('usuario_nome',$nome);
        return $this->db->get('teste')->row_array();
    }
}