<?php

  /*
   * ${name} [tipo]
   * Descricao
   * @copyright (C) year, Wagner
  */

  class ComportamentoInicial{
  	var $Nome, $Idade, $Profissao, $Salario; 

    // __construct()   DEFININDO COMPORTAMENTO INICIAL PADRAO MÁGICO
    function __construct ($Nome, $Idade, $Profissao, $Salario) {
      $this->Nome = (string) $Nome;
      $this->Idade = (int) $Idade;
      $this->Profissao = (string) $Profissao;
      $this->Salario = (float) $Salario;
      echo "Objeto {$this->Nome} foi iniciado ! \n";
    }

    // __destruct() METHOD QUE LIBERA A MEMORIA ASSIM O  OBJETO FOR DEIXADO DE LADO
    //TAMBÉM É UM CORPORTAMNETO PADRÃO PARA QU A MEMORIA FIQUE MAIS RÁPIDA
    function __destruct() {
      echo "Objeto {$this->Nome} foi destruído ! \n";
    }

    function  ver() {
      echo "<pre>";
      print_r($this);
      echo "<pre>";
    }
  	
  }
