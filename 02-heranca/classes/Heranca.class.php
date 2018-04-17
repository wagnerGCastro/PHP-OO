<?php

 class Heranca {
    private $Nome;
    private $Idade;
    private $Formacao;
    
    //parent:: executa esse metodo
    function __construct($Nome, $Idade) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Formacao = array();
    }
    
    public function Envelhecer(){
       return $this->setIdade($this->Idade += 1) ;
    }
    
    
    public function Formar($cursos){
        $this->setFormacao($cursos);
    }
    
    public function VerPessoa() {
        $formacao = implode(', ', $this->getFormacao());
        echo "{$this->getNome()} tem {$this->getIdade()} anos de idade, é formado em: {$formacao} .<hr>";
    }
    
    /* seters
    -----------------------------------------------------------------------*/
    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setIdade($Idade) {
        $this->Idade = $Idade;
    }

    /**
     * @this -> formacao indíce de array
     * @param array $Formacao
     */
    function setFormacao($Formacao) {
        $this->Formacao[] = (string) $Formacao;
    }

    /* geters
    -----------------------------------------------------------------------*/
    function getNome() {
        return $this->Nome;
    }

    function getIdade() {
        return $this->Idade;
    }

    function getFormacao() {
        return $this->Formacao;
    }
    
  } //end class
