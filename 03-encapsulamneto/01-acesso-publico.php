<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        /**
         * responsabilidade email, não deicar de ter @, se não dá invalido
         */
        // $wagner = new AcessoPublico('Wagner', 'wagner_gomes#gmail.com');    
        $wagner = new AcessoPublico('Wagner', 'wagner_gomes@gmail.com');
        $wagner->Nome = 'Fagner';
        $wagner->Email = 'fagner@gmail.com';

        echo "<hr> <pre>";
        print_r($wagner);
        echo "</pre> <hr>";
        ?>
    </body>
</html>
