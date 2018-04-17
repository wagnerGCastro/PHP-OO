<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lançando Excessões</title>
    </head>
    <body>
        <?php
        /**
         * TRABALHANDO COM EXCEPCION CLASSE NATIVA DO PHP
         * EXCEPCION CLASSE NATIVA DO PHP  PRA TRATAMENTOS DE ERRROS
         */
        $eu = null;
        if (!$eu) {

            //construct  (PHP 5 >= 5.1.0) Construct the exception($string, $int, $Exception)
            $a = new Exception("Eu é NULL", E_USER_NOTICE);
        }

        echo $a->getMessage();
        echo "<br>";
        echo $a->getCode();

        echo "<pre>";
        print_r($a);
        echo "</pre>";



        // EXEMPLO DE TRY e CAT          //
        // TRY significa tente isso, se não consegui jogue o erro pro CAT para resolver
        echo "<hr>";
        try {
            //lançamentos de erros vai se dar aqui dentro
            // todo erro sendo compy , montary, vai ser jogado para try.
            // todo erro sendo compy , montary se trata aqui
            $err = null;
            if (!$err) {
                /* quando gera erro dentro do try , habilita o xdebug */
                //é aquele erro que gera automaticamente pelo PHP
                throw new Exception("Eu Novamente está NULL", E_USER_NOTICE);
            }
        } catch (Exception $ex) {
            echo "<p> Erro # {$ex->getCode()} : {$ex->getMessage()} <br>";
            echo "<small> {$ex->getFile()} # # # na linha {$ex->getLine()} </small> </p>";

            echo "<hr>";
            // xdebug é mesmo erro que php gera nativamente
            echo $ex->xdebug_message;
        }
        ?>
    </body>
</html>
