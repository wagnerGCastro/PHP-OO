<!DOCTYPE html>
﻿<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Modelagem de classe</title>
</head>
<body>
    <?php
    /*
      INSTANCIAR: uma classe significa criar um objeto daquela classe,
      ou seja: objeto é o conjuto de atributos e métodos da classe.
      Métodos são 'Funções' que alteram o comportamento dos objetos.
     */
    require('./classes/ModelagemDeClasse.class.php');
    
    $wagner = new ModelagemDeClasse('wagner', 31, 'Consultor', 1500.62);
   
    $wagner->setProfissao('Programador');
    $wagner->Trabalhar('portal', 56.89);
    $wagner->Trabalhar('chat', 456.89);
    
    
    // debug 
    echo "<hr>";
    echo "<pre>";
    print_r($wagner);
    echo "</pre>";
    
    
    echo "<pre>";
    var_dump($wagner);
    echo "</pre>";
    
    ?>
</body>
</html>

