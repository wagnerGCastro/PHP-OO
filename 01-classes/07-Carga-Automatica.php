<html lang="pt-br">

<head>
  <meta charset="${project.encoding}" >
  <tilte> </title>
</head>

<body>
<?php
  /*
    INSTANCIAR: uma classe significa criar um objeto daquela classe, 
    ou seja: objeto é o conjuto de atributos e métodos da classe. 
    Métodos são 'Funções' que alteram o comportamento dos objetos.
  */

  require('./inc/Config.inc.php');
  $classeA = new ClassObjetos;
  $classeC = new ComportamentoInicial('Wagner', 27,'Programador',2200  );
  $classeB = new AtributosMetodos;

  
  
  
//AQUI EXIBE OS RESULTADOS
 echo"<br> <hr width='50%' align='left'> </hr>";
 
 echo "<pre>";
 print_r($classeA);
 echo"<br> <hr width='50%' align='left'> </hr>";
 
 echo "<pre>";
 print_r($classeB);
 echo"<br> <hr width='50%' align='left'> </hr>";
 
 echo "<pre>";
 print_r($classeC);
 echo"<br> <hr width='50%' align='left'> </hr>";
 
 

 
?>
</body>
</html>

