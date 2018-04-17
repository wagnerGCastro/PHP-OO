<?php

  class ModelagemDeClasse {
    public $Nome;
    public $Idade;
    public $Profissao;
    public $ContaSalario;
    
    function __construct($Nome, $Idade, $Profissao, $ContaSalario){
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;  
        $this->ContaSalario = $ContaSalario;

    }
    
    public function Trabalhar($trabalho, $valor){
        $this->ContaSalario += $valor;
        $this->DarEcho("{$this->Nome} desenvolveu um projeto {$trabalho} e recebeu {$this->ToReal($valor)}");
    }
    
    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    
    public function setIdade($Idade){
        $this->Idade = $Idade;
    }
    
    public function setProfissao($Profissao){
        $this->Profissao = $Profissao;
    }
    
     public function setContasalarioo($ContaSalario){
        $this->Contaalario = $ContaSalario;
    }
    
    public function ToReal($valor){
        return number_format($valor, '2','.','');
    }
    
    public function DarEcho($mendagem){
        echo "<p> {$mendagem} </p>";
    }
    
    
  } //end class