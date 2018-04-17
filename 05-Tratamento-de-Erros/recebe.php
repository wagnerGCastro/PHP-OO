<?php
  
    
    function Idade($idade  ) {
      if(!$idade) { // se idade não existe e se for null. 
        return false;
      }
      
      elseif(!is_int($idade)) { // se idade não for um número inteiro
        return false;
      }
      
      else {
        return "<mark> Voce nasceu em: " . ( date('Y') - $idade)."</mark>";
      }
    }

    $idade = isset($_POST["idade"]) ? $_POST["idade"] : '';
    $idade = (int)$idade;
    
    if(Idade($idade)){
      echo Idade($idade);
    }
    else {
       echo Idade($idade);
    }

?>