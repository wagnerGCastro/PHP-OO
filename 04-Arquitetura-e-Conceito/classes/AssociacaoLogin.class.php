<?php

/**
 * AssociacaoLogin.class [TIPO]
 * Descricao
 * @copyright (c) year, Wagner 
 */
class AssociacaoLogin {
    /** @var AssociacaoCliente */
    private $Cliente;
    
    private $Login;
    
    function __construct($Cliente){
        if(is_object($Cliente)):
            $this->Cliente = $Cliente;
            $this->Login = true;
        else:
            die('Erro ao logar');
        endif; 
 
    }
    
    public function getLogin(){
        return $this->Login;
    }
    
    public function getCliente(){
        return $this->Cliente;
    }
    
}
