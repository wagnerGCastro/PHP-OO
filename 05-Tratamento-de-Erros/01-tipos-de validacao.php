<?php 
    require('./_app/Config.inc.php'); 
    date_default_timezone_set("UTC");

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Tratamento de Erros</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">

        <link rel="stylesheet" type="text/css" href="../assets/framework/bootstrap-3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../assets/framework/jquery-ui-1.12.1.custom/jquery-ui.min.css" />

        <link rel="stylesheet" type="text/css" href="../assets/css/@font-face.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/@responsive.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/index.css" />
    </head>
    <body>
     <div class="container">
            <!-- Tabs -->
            <br>
            <h2 class="demoHeaders">Tratamentos de Erros</h2>
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">TRATAMENTO POR EXISTENCIA</a></li>
                    <li><a href="#tabs-2">TOMADA DE DECISÃO</a></li>
                    <li><a href="#tabs-3">Retorno de Flags</a></li>
                    <li><a href="#tabs-4">COMPARAÇAO</a></li>
                </ul>
                <div id="tabs-1">
                    <h3> TRATAMENTO POR EXISTENCIA  </h3>
                    <hr>
                    <?php

                    $string = 'wagner';
                    $string = '';
                    $string = 3;

                    if (is_string($string)) {
                        echo "String é uma string!";
                    } elseif (!is_string($string)) {
                        echo "String não é uma string!";
                    }

                    echo "<hr>";
                    //empty($string) verifica se a variável é vazia
                    if (!empty($string)) {
                        echo "String não é vazia!";
                    }

                    //isset — Informa se a variável foi iniciada
                    elseif (isset($string)) {
                        echo "Variável String existe!";
                    }
                    ?>   
                </div>
                <div id="tabs-2">
                    <h3> TOMADA DE DECISÃO  </h3>
                    <hr>
                    <?php
                    $decisao = 'contato';
                    $decisao = 'wagner@hotmail.com';
                    $decisao = 'fagner@hotmail.com';
                    //$decisao = 'wagner@hotmail.com';
                    //AQUI COMPARANDO $decisao , se é igual a E-mail
                    if (!filter_var($decisao, FILTER_VALIDATE_EMAIL)) {
                        echo 'Não é um email  válido';
                    } elseif ($decisao == "wagner@hotmail.com") {
                        echo (' Esse Email é restrito');
                    } else {
                        echo 'Email válido';
                    }

                    echo " :)";
                    ?>
                </div>
                <div id="tabs-3">
                 <h3> Retorno de Flags (é dado como true ou false) </h3>
                 <br>
                 <?php

                 function Idade($idade) {
                     if (!$idade) { // se idade não existe e se for null. 
                         return false;
                     } elseif (!is_int($idade)) { // se idade não for um número inteiro
                         return false;
                     } else {
                         return "<br><br><mark> Voce nasceu em: " . ( date('Y') - $idade) . "</mark>";
                     }
                 }

                 if (isset($_POST['cadastre'])) {
                    echo "Você informou: ". $idade = (int) $_POST["idade"];
                    
                    if (Idade($idade)) {
                        echo Idade($idade);
                    } else {
                        echo "Erro, informe um número inteiro";
                    }
                  
                 }

                 ?>
                 <br><br>
                 
                 <form class="form-horizontal" name="md6-01-form" method="POST" action="" accept-charset="utf-8" enctype="multipart/form-data" >

                     <div class="form-group">
                         <label class="control-label col-sm-3" for="md6-01-idade">Idade:</label>
                         <div class="col-xs-12 col-sm-7"> 
                             <input type="text" class="form-control" name="idade" id="md6-01-idade" placeholder="Idade">
                         </div>
                     </div>

                     <div class="form-group"> 
                         <div class="col-sm-offset-2 col-xs-6 col-sm-10">
                             <button type="submit" id="md6-01-submit" name="cadastre" class="btn btn-default">Submit</button>
                         </div>
                     </div>
                 </form>
                   
                </div>
                <div id="tabs-4">
                    <h3> COMPARAÇAO</h3>
                    <hr>
                    
                    <?php
                    $um = 10;
                    $dois = '12';

                    if ($um == $dois):
                        echo "Variável \$um é igual variável \$dois";
                    elseif ($um != $dois):
                        echo "Um e dois tem valor diferente";
                    endif;


                    echo "  <hr> ";

                    $um = '12';
                    $dois = 12;

                    if ($um === $dois) {
                        echo "Um e dois tem  o mesmo valor e são do mesmo tipo";
                    } elseif ($um !== $dois) {
                        echo "Um e dois tem valor ou tipo diferente";
                    }
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
