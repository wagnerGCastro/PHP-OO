<?php

/**
 * Heranca.Juridica.class [TIPO]
 * Descricao
 * @copyright (c) year, Wagner 
 */

/**
 * EXTENDS(palavra reservada) aplica a herança.
 * Depois de aplicada todos os atributos e metodos 
 * estarão acessíveis na classe HerancaJuridica.
 */

// classe   pai  Heranca
// classe filha  HerancaJuridica
class HerancaJuridica extends Heranca {
    private $Empresa;
    private $Funcionario;
    
   
    function __construct($Nome, $Idade, $Empresa) {
       parent::__construct($Nome, $Idade);
       $this->Empresa = $Empresa;
    }
    
    public function Contratar($pessoa){
        echo "A empresa {$this->getEmpresa()} de {$this->getNome()} contratou {$pessoa} <hr>";
        $this->Funcionario += 1;
    }
    
    public function VerEmpresa(){
        echo "{$this->getEmpresa()} foi fundada por {$this->getNome()} e tem {$this->getFuncionario()} funcionários <br> <small style='color:#09f'> ";
        parent::VerPessoa();
        echo "</small>";
    }
    
    /* seters
    -----------------------------------------------------------------------*/
    function setEmpresa($Empresa) {
        $this->Empresa = $Empresa;
    }

    function setFuncionario($Funcionario) {
        $this->Funcionario = $Funcionario;
    }
    

    /* geters
    -----------------------------------------------------------------------*/
    function getEmpresa() {
        return $this->Empresa;
    }

    function getFuncionario() {
        return $this->Funcionario;
    }


 
} //end class
