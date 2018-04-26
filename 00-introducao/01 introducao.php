<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Introdução</title>
        <link rel="stylesheet" type="text/css" href="../assets/framework/bootstrap-3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="../assets/framework/jquery-ui-1.12.1.custom/jquery-ui.min.cs" />
        <link rel="stylesheet" type="text/css" href="../assets/css/@font-face.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/@responsive.css" />
    </head>
    <body>
        <div class="container">
            <h2 class="demoHeaders">Introdução</h2>
            <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">Verifica a Vesão</a></li>
                        <li><a href="#tabs-2">Info PHP</a></li>
                    </ul>
                    <div id="tabs-1">
                        <?php
                            if (phpversion() >= 5.4)
                            {
                               echo ' Podemos progrmar';
                            }
                            else
                            {
                                echo ' Preciso atualizar';
                            }
                            //echo phpinfo();
                            $inis = ini_get_all();
                            //var_dump($inis);
                            echo "<hr>"; 
                            //echo date_default_timezone_get();  
                            //$data = new DateTimeZone('America/Sao_Paulo');
                            //var_dump($data,$data->getLocation(), $data->getName());
                            echo "<hr>";
                            echo ini_get('date.timezone') . "<br>";  // paris Europa
                            echo "<hr>"; 
                            // degine horário do brasil
                            date_default_timezone_set('America/Sao_Paulo');
                            echo date_default_timezone_get() . "<br>";    // paris Europa// do sitema
                            echo date('d/m/Y H:i:s');
                        ?>
                    </div>
                    <div id="tabs-2"><?php echo phpinfo(); ?></div>
            </div>
        </div> <!-- end container -->
        <!-- Javascript -->
        <script type="text/javascript" src="../assets/js/jquery-3.0.0.min.js"></script>
        <script type="text/javascript" src="../assets/framework/bootstrap-3.3.7/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../assets/framework/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script> 
        <script type="text/javascript" src="../assets/js/controller.js"></script>
    </body>
</html>
