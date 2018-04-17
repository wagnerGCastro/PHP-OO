
<?php 
   //require('./_app/Config.inc.php'); 
    date_default_timezone_set("UTC");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title>Tratamento de Erros</title>
  </head>
  <body>
    <?php
     
    /*
     * disparando o gatilho do php .
     * personalizando erros do usuario, como também erros do sitema
     * como rumtime_erro e compary_time_erro
    */

    $uso = '12345678911'; // 11 caractere
    $cpf = '';
    $cpf = '500';
    $cpf = $uso;
    $cpf = "abs";
    $cpf = '12345678912';
    
    if(!$cpf){  //igual a branco
  
      //trigger_error($mens, $tipo de errro) — Gera uma mensagem a nível de usuário de erro/aviso/notícia
      //E_USER_NOTICE - APENAS UMA NOTICIA AO USUARIO
      trigger_error("Informe seu CPF", E_USER_NOTICE); 
      //user_error("Informe seu CPF", E_USER_NOTICE); //IGUAL AO DE CIMA
    }
     
    elseif($cpf == '500') {
      
      //E_USER_DEPRECATED = 16384 mensagem de aviso gerado pelo usuário.
      trigger_error("Formato não é mais utizado", E_USER_DEPRECATED);  
    }
    
    elseif($cpf == $uso) {
      
      //E_USER_WARNING = 512 Aviso gerado pelo usuário . 
      trigger_error("CPF em uso", E_USER_WARNING);
    }
    
    elseif(!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11 ) {
      //E_USER_ERROR = 256 mensagem de aviso gerado pelo usuário.
     trigger_error("CPF inválido ", E_USER_ERROR);
    }
    
    else {
      echo "CPF Válido";
    }
    
    echo ":)" ;
    echo "<hr>" ;
    
    /** função para personalização de erros **/
    //triger_error é um gatilho que vai dispar uma função para mostar o erro.
    
    function Erro($tipo_erro, $mens_erro, $arq_erro, $linha_erro) {
      $erro = ($tipo_erro == E_USER_ERROR ? 'red' : ($tipo_erro == E_USER_WARNING ? 'darkorange' : 'Blue' ));
      echo "<p style='font-weight: bold; color:{$erro}'> Erro na linha # {$linha_erro}: {$mens_erro} <br>";
      echo "<small> {$arq_erro} </small> </p>";
      
      if($tipo_erro == E_USER_ERROR):
          die('Código travado');
      endif;
    }
    
    //set_error_handler (PHP 4> = 4.0.1, PHP 5) 
    //Define a função de manipulador de erro definida pelo usuário
    set_error_handler('Erro');
   
    $uso = '12345678911'; // 11 caractere
    $cpf = '';
    $cpf = '500';
    $cpf = $uso;
   // $cpf = "abs";
   // $cpf = '12345678912';
    
  if(!$cpf){  //igual a branco
  
      //trigger_error($mens, $tipo de errro) — Gera uma mensagem a nível de usuário de erro/aviso/notícia
      //E_USER_NOTICE - APENAS UMA NOTICIA AO USUARIO
      trigger_error("Informe seu CPF", E_USER_NOTICE); 
      //user_error("Informe seu CPF", E_USER_NOTICE); //IGUAL AO DE CIMA
    }
     
    elseif($cpf == '500') {
      
      //E_USER_DEPRECATED = 16384 mensagem de aviso gerado pelo usuário.
      trigger_error("Formato não é mais utizado", E_USER_DEPRECATED);  
    }
    
    elseif($cpf == $uso) {
      
      //E_USER_WARNING = 512 Aviso gerado pelo usuário . 
      trigger_error("CPF em uso", E_USER_WARNING);
    }
    
    elseif(!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11 ) {
      //E_USER_ERROR = 256 mensagem de aviso gerado pelo usuário.
      trigger_error("CPF inválido ", E_USER_ERROR);
    }
    
    else {
      echo "CPF Válido";
    }
    
    echo ":)" ;
    
    ?>
  </body>
</html>
