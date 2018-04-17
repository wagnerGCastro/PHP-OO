<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <link rel="stylesheet" type="text/css" href="css/mod6_reset.css" />
        <title> Personalização de Erros</title>
    </head>
    <body>
        <?php
        require_once ('./_app/Config.inc.php');


        echo "TRATAMENTO DE ERROS";

        trigger_error('Essa é uma NOTICE', E_USER_NOTICE);
        trigger_error('Essa é um ALERTA', E_USER_WARNING);
       // trigger_error('Essa é um Erro',E_USER_ERROR );

        //AQUI ESTÁ USANDO DIRETAMENTE A FUNCAO WSErro,  
        WSErro('Esse é um ACCEPT!', WS_ACCEPT);
        WSErro('Esse é um INFOR!', WS_INFOR);
        
        

        PHPErro(WS_ERROR, "Esse é um ERRO personalizado", __FILE__, __LINE__);


        //AQUI USANDO O MODO TRY CATCH
        try {
            //aqui gerando o erro
            throw new Exception("Essa é uma EXECESSÃO", E_USER_WARNING);
        } catch (Exception $ex) {
            //compire tyme (aqui)// mostrando o erro gerado na linha 27
            PHPErro($ex->getCode(), $ex->getMessage(), $ex->getFile(), $ex->getLine());

            //rumtime (aqui)
            WSErro($ex->getMessage(), $ex->getCode());
            WSErro($ex->getMessage(), WS_ACCEPT);   //igual ao de cima
        }
        ?>
    </body>
</html>
