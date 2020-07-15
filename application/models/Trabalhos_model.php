<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trabalhos_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    

    public function insert_trabalhosacademicos($data)
    {
        // recebe os dados do controller e inserir no banco
        return $this->db->insert('inscricoes_trabalhosacademicos',$data);
    }

    public function insert_trabalhosdosmagistrados($data)
    {
        // recebe os dados do controller e inserir no banco
        return $this->db->insert('inscricoes_trabalhosdosmagistrados',$data);
    }

    public function insert_reportagens($data)
    {
        // recebe os dados do controller e inserir no banco
        return $this->db->insert('inscricoes_reportagens',$data);
    }

    public function insert_praticas($data)
    {
        // recebe os dados do controller e inserir no banco
        return $this->db->insert('inscricoes_praticas',$data);
    }

    public function vCPFta($inscricao_cpf)
    {
        // seleciona no banco o cpf que veio do controler
        $this->db->where('inscricao_cpf', $inscricao_cpf);
        return $this->db->get('inscricoes_trabalhosacademicos')->row_array();
    }

    public function vCPFtm($inscricao_cpf)
    {
        // seleciona no banco o cpf que veio do controler
        $this->db->where('inscricao_cpf', $inscricao_cpf);
        return $this->db->get('inscricoes_trabalhosdosmagistrados')->row_array();
    }

    public function vCPFrj($inscricao_cpf)
    {
        // seleciona no banco o cpf que veio do controler
        $this->db->where('inscricao_cpf', $inscricao_cpf);
        return $this->db->get('inscricoes_reportagens')->row_array();
    }

    public function vCPFph($inscricao_cpf)
    {
        // seleciona no banco o cpf que veio do controler
        $this->db->where('inscricao_cpf', $inscricao_cpf);
        return $this->db->get('inscricoes_praticas')->row_array();
    }

  

}
