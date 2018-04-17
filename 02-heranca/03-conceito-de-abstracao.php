<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Conceito Abstração </title>
    </head>
    <body>

    <?php
    // Conceito de abstração //dividir em pequnas partespara organizar o código
    // Exemplo de conta_bancaria (onde vai ter uma genérica,
    // para ser herdada pela conta corrente  e conta poupança).

    require('./inc/Config.inc.php');

    //depois de torna a class abstracao em abstract( não pode mais instanciar a classe

    /*
      $conta1 = new Abstracao('Fagner', 2500);
      $conta2 = new Abstracao('Wagner', 500);

      $conta1->Depositar(1000);
      $conta1->Sacar(500);
      $conta1->Transferir(500, $conta1);
      $conta1->Transferir(500, $conta2);

      echo "<pre>";
      print_r($conta1);
      echo"<br> <hr width='50%' align='left'> </hr>";
      
      echo "<pre>";
      print_r($conta2);
      echo"<br> <hr width='50%' align='left'> </hr>";

    */
    
    $cc = new AbstracaoCC('Wagner', 0, 1000);
    $cp = new AbstracaoCP('Robson', 0);

    $cc->Depositar(1000);
    $cc->Sacar(500);
    $cc->Transferir(500, $cp);
    
    //----------------------------//
    $cp->Depositar(1000);
    $cp->Sacar(500);
    $cp->Transferir(500, $cc);
    
   //----------------------------//

    $cc->VerSaldo();
    $cp->VerSaldo();
    
    echo "<pre>";
    print_r($cc);
    echo"<br> <hr width='50%' align='left'> </hr>";
    
    echo "<pre>";
    print_r($cp);
    echo"<br> <hr width='50%' align='left'> </hr>";
    
    ?>
    </body>
</html>

