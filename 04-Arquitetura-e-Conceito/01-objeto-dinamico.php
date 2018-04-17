<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Objeto Dinâmico</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');


        /* como não tem comportamnto inical só estancia o objeto   */
        $cliente = new ObjetoDinamico;
        
        // 1º criação do Objeto Dinãmico
        $wagner = new stdClass();
        $wagner->Nome = 'Wagner';
        $wagner->Email = 'Wagner@hotmail.com';

        // atribuindo o objeto $wagner a classe ObjetoDinamico
        $cliente->Novo($wagner);

        // replicando objeto dinâmico
        /*
        $fagner = $wagner;
        $fagner->Nome = 'Fagner';
        $fagner->Email = 'fagner@hotmail.com';
        */
        
        // clonar  objeto dinâmico
        $fagner = clone $wagner;
        $fagner->Nome = 'Fagner';
        $fagner->Email = 'fagner@hotmail.com';
        
        
        
        echo "<hr> <pre>";
        print_r($cliente);
        echo "</pre> <hr>";

        echo "<hr> <pre>";
        print_r($wagner);
        echo "</pre> <hr>";

        echo "<hr> <pre>";
        print_r($fagner);
        echo "</pre> <hr>";
        ?>
    </body>
</html>
