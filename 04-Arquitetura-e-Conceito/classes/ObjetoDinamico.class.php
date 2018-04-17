<?php

/**
 * associacao, agregacao, composicao
 * conceito desssa arqueturas e como utilizar
 */
class ObjetoDinamico {

    public $Nome;
    private $Email;
    
    public function Novo($Cliente){
        if(is_object($Cliente)):
            $this->Nome = $Cliente->Nome;
            $this->Email = $Cliente->Email;
        else: 
            die('Erro, informe um obejto com nome e e-mail');
        endif;
    }
}
