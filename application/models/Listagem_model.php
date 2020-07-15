<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Listagem_model extends CI_Model {

    public function getTrabalhosAcademicos()
    {   
        $this->db->from('inscricoes_trabalhosacademicos');
        //$this->db->get('inscricoes_trabalhosacademicos');
        $this->db->order_by('inscricao_id', 'DESC');
        $query = $this->db->get();
        
        return $query->result();
    }

    public function getTrabalhosDosMagistrados()
    {
        $query = $this->db->get('inscricoes_trabalhosdosmagistrados');
        return $query->result();
    }

    public function getReportagensJornalisticas()
    {
        $query = $this->db->get('inscricoes_reportagens');
        return $query->result();
    }

    public function getPraticasHumanisticas()
    {
        $query = $this->db->get('inscricoes_praticas');
        return $query->result();
    }

}

