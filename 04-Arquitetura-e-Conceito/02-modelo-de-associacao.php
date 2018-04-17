<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        //fora do contexto Exemplo md5(string, raw);
        /*
          $str = "Hello";
          echo "The string: ".$str."<br>";
          echo "TRUE - Raw 16 character binary format: ".md5($str, TRUE)."<br>";
          echo "FALSE - 32 character hex number: ".md5($str)."<br>";

         */


        /**
         * ASSOCIACAO de Objetos.
         * Conceito: ao invés de ter 2 classes, e herdar a outra, vai ser associada a outra
         * e ai vai ter a interacao de objetos.
         * A Associacao é definida por um atributo, onde a primeira classe vai
         * ter um atributo para ligar a 1º classe.
         * E apartir disso vamos ter acesso a todos os atributos e metodos dessa classe
         */
        /* AQUI NÃO DÁ PRA CRIAR OBJETO DINÂMICO , PORQUE ESTÃO PRIVADOS,
          $fagner = new stdClass();
          $fagner->Nome = 'FAGNER';
          $fagner->Email = 'FAGNER@GAMIL.COM';
         */

        $fagner = new AssociacaoCliente('fagner', 'banana');
        $login = new AssociacaoLogin($fagner);

        /*
          if($login->getLogin()){
          echo " Gerenciando o cliente id: {$login->Cliente->getCliente()} <br> ";
          echo "{$login->Cliente->Nome} logou com sucesso usando o e-mail {$login->Cliente->Email} <br>";
          }
          else {
          echo "Erro ao logar ";
          }


         *///AQUI SÓ ACESSA SEM CLIENTE PRIVATE NO ASSOCIACAOLOGIN()


        if ($login->getLogin()) {
            echo " Gerenciando o cliente id: {$login->getCliente()->getCliente()} <br> ";
            echo "{$login->getCliente()->getNome()} logou com sucesso usando o e-mail {$login->getCliente()->getEmail()} <br>";
        } else {
            echo "Erro ao logar ";
        }


        //$cliente = new AssociacaoCliente('wagner') ;  
        //$cliente->Nome = 'wagner';
        //$cliente->Email = 'wagner@htomail.com';



        echo "<hr> <pre>";
        print_r($fagner);
        echo "</pre> <hr>";

        echo "<hr> <pre>";
        print_r($login);
        echo "</pre> <hr>";

        //echo "<hr> <pre>";
        //print_r($cliente);
        //echo "</pre> <hr>";  
        ?>
    </body>
</html>