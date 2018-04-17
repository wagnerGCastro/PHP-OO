<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="../assets/framework/bootstrap-3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../assets/framework/jquery-ui-1.12.1.custom/jquery-ui.min.css" />

        <link rel="stylesheet" type="text/css" href="../assets/css/@font-face.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/@responsive.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/index.css" />

    </head>
    <body>
        <div class="container">

            <!-- Tabs -->
            <h2 class="demoHeaders">Tabs</h2>

            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">ClassObjetos</a></li>
                    <li><a href="#tabs-2">Second</a></li>
                    <li><a href="#tabs-3">Third</a></li>
                </ul>
                <div id="tabs-1">
                    <?php
                        require('./classes/ClassObjetos.class.php'); 

                        $teste = new ClassObjetos();
                        $teste->getClass('De introdução','mostrar uma classe');
                        $teste->verClass();
                        $teste->Class = 'Classe 2';
                        $teste->Funcao = 'Ver os atributos';
                        $teste->verClass();
                      ?>
                </div>
                <div id="tabs-2"></div>
                <div id="tabs-3"></div>
            </div>


        </div> <!-- end container -->
        <!-- Javascript -->
        <script type="text/javascript" src="../assets/js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="../assets/framework/bootstrap-3.3.7/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../assets/framework/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> 
        <script type="text/javascript" src="../assets/js/controller.js"></script>
    </body>
</html>

