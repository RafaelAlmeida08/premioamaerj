<?php

class ControleAcesso{
    public function controlar()
    {
        $CI = &get_intance();
        $user = $CI->session->userdata("usuario_logado");
        if(empty($user))
        {           
            redirect("http://localhost/premio/admin");
        }
    }
}


?>