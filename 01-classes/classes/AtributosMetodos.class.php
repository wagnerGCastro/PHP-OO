<?php

 // 3 elementos:atributos, metodos, paramentros

  class AtributosMetodos {
    
      var $Nome;
      var $Idade;
      var $Profissao;
      
      function setUsuario($Nome, $Idade, $Profissao){
          //  echo $Nome.' '. $Idade.' '. $Profissao;
          // atribuição ao atinbutos da classe
          $this->Nome = $Nome;
          $this->setIdade($Idade);
          $this->Profissao = $Profissao;
      }
      
      function getUsuario(){
          return "{$this->Nome} tem {$this->Idade} anos de idade. E trabalha como {$this->Profissao}. ";
      }
      
      function getClasse(){
          echo "<pre>";
          print_r($this);
          echo "</pre>";
      }
      
      function setIdade($Idade){
          if(!is_int($Idade)):
             die('Idade informada é incorreta');
          else:
              $this->Idade = $Idade;
          endif;
      }
      
      function Envelhecer(){
          $this->Idade = $this->Idade + 1;
      }
      
      
  } //end class
  	