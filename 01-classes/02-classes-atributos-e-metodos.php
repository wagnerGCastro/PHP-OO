<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Classes</title>
        <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../assets/framework/bootstrap-3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../assets/framework/jquery-ui-1.12.1.custom/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/@font-face.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/@responsive.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/index.css" />
    </head>
    <body>
        <div class="container">
            <h2 class="demoHeaders">Classes e Atributos</h2>
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Atributos</a></li>
                </ul>
                <div id="tabs-1">
                    <?php
                        require('./classes/AtributosMetodos.class.php');
                        $pessoa = new AtributosMetodos();
                        $pessoa->setUsuario('wagner', 29, 'programador');
                        $usuario = $pessoa->getUsuario();
                        echo $usuario;
                        
                        echo "<hr>";
                        $pessoa->Idade = 'banana';
                        $pessoa->setUsuario('wagner', 30, 'programador');
                        $pessoa->Envelhecer();
                        $pessoa->Envelhecer();       
                        $pessoa->getClasse();
                    ?>
                </div>
            </div>
        </div> <!-- end container -->
        <!-- Javascript -->
        <script type="text/javascript" src="../assets/js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="../assets/framework/bootstrap-3.3.7/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../assets/framework/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> 
        <script type="text/javascript" src="../assets/js/controller.js"></script>


    </body>
</html>

