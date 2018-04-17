<html lang="pt-br">

<head>
  <meta charset="${project.encoding}" >
  <tilte>Documentacão De Classe </title>
</head>

<body>
<?php
  /*
    INSTANCIAR: uma classe significa criar um objeto daquela classe, 
    ou seja: objeto é o conjuto de atributos e métodos da classe. 
    Métodos são 'Funções' que alteram o comportamento dos objetos.
  */

  require('./inc/Config.inc.php');
  
  $documentar = new DocumentacaoDeClasse('WEB TECNOLOGIA');

//AQUI EXIBE OS RESULTADOS
 
 echo "<pre>";
 print_r($documentar);
 echo "</pre>"; 
 echo"<br> <hr width='50%' align='left'> </hr>";
 
 
 

 
?>
</body>
</html>

