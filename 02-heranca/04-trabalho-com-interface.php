<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title> TRABALHO COM INTERFACES </title>
    
  </head>
  <body>
    <?php
    require('./Interface/IAluno.php');
    require('./inc/Config.inc.php');
    
    $aluno = new TrabalhoComInterfaces('Wagner', 'PHP');
    $aluno->Matricular('HTML');
    $aluno->Formar();
   

   echo "<hr> <pre>";
   print_r($aluno);
   echo "</pre> <hr>";
   
   
    
    ?>
  </body>
</html>
