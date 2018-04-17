<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Acesso Privado</title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');
        //tudo é privado, menos o comportamento inical
        $wagner = new AcessoPrivado('1Wagner', 'wagner@gm ail.com', 10558791698);
        echo "<hr> <pre>";
        print_r($wagner);
        echo "</pre> <hr>";
        ?>
    </body>
</html>
