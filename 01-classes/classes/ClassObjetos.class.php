<?php
  
 // 3 elementos: atributos, metodos, paramentros


  class ClassObjetos {
      
      // Atributos da classe  // são as caracteristicas das classes
      var $Class;
      Var $Funcao;
    
     // Métodos e parametros(dentro do parentesses)
     // Define os comportamentos da classe
      function getClass($Class, $Funcao){
          echo "<pre> A Classe {$Class} serve para {$Funcao} </pre>";
         
      }
      
      function verClass(){
          echo "<pre>";
          print_r($this);
          echo "</pre>";
      }
  
  }// end class
  	
