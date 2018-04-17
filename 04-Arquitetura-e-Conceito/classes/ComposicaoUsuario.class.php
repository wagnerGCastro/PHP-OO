<?php

/**
 * Na Composicao precisamos ter um local na memoria da classe,
 * onde vamos criar um novo objeto.
 */
class ComposicaoUsuario {

    private $Nome;
    private $Email;
    private $Endereco;
    
    function __construct($Nome,$Email){
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
    public function CadastrarEnderco($Cidade, $Estado){
        $this->Endereco = new ComposicaoEndereco($Cidade, $Estado);
    }
    
    /** @return ComposicaoEnderco */
    public function getEndereco(){
        return $this->Endereco;
    }
    
    public function getNome() {
        return $this->Nome;
    }

    public function getEmail() {
        return $this->Email;
    }


    
}
