<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Listar_model extends CI_Model {

    public function getCandidato($inscricao_id)
    {   
       
       
        $this->db->where('inscricao_id', $inscricao_id);

        $query = $usuario = $this->db->get('inscricoes_trabalhosacademicos')->row_array();

        return $query;

        
        
    }

    public function getCandidatoTm($inscricao_id)
    {   
       
       
        $this->db->where('inscricao_id', $inscricao_id);

        $query = $usuario = $this->db->get('inscricoes_trabalhosdosmagistrados')->row_array();

        return $query;

        
        
    }

    public function getCandidatoPh($inscricao_id)
    {   
       
       
        $this->db->where('inscricao_id', $inscricao_id);

        $query = $usuario = $this->db->get('inscricoes_praticas')->row_array();

        return $query;

        
        
    }

    public function getCandidatoRj($inscricao_id)
    {   
       
       
        $this->db->where('inscricao_id', $inscricao_id);

        $query = $usuario = $this->db->get('inscricoes_reportagens')->row_array();

        return $query;

        
        
    }

}

