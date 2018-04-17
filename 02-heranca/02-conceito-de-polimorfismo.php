<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> </title>
    </head>
    <body>

        <?php
        /**
         *  Na herança consegue herdar o código pronto(atributos, metodos da classe)
         * POLIMORFISMO SÓ OCORRE NA HERANÇA
         * POLIMORFISMO(varias formas)OCORRE HÁ UMA SOBBRE ESCRITA NA POO.
         */
        require('./inc/Config.inc.php');

        $boleto = new Polimorfismo('Pro PHP', 334.90);
        $boleto->Pagar();

        echo "<pre>";
        print_r($boleto);
        echo"<br> <hr width='50%' align='left'> </pre>";

     
        //------------------------------------------------//
        $deposito = new PolimorfismoDeposito('Pro PHP', 334.90);
        $deposito->Pagar();

        echo "<pre>";
        print_r($deposito);
        echo"<br> <hr width='50%' align='left'> </pre>";


        //------------------------------------------------//
        $cartao = new PolimorfismoCartao('Pro PHP', 334,90);
        $cartao->Pagar();


        echo "<pre>";
        print_r($cartao);
        echo"<br> <hr width='50%' align='left'> </pre> ";

         

        $cartao->Pagar(10);

        echo "<pre>";
        print_r($cartao);
        echo"<br> <hr width='50%' align='left'> ";
          
        ?>
    </body>
</html>

