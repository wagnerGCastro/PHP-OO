<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Concetos de Herança </title>
    </head>
    <body>
        <?php
        // Na herança consegue herdar o código pronto(atributos, metodos da classe)
        require('./inc/Config.inc.php');
        
        $pessoa = new Heranca('wagner', 31);
        $pessoa->Formar('Pro PHP');
        $pessoa->Formar('WS PHP');
        $pessoa->Envelhecer();
        $pessoa->VerPessoa();
        
        $pessoaME = new HerancaJuridica('Joao', 42, 'JS Pneus');
        $pessoaME->Formar('PHP');
        $pessoaME->Formar('JAVASCRIPT');
        $pessoaME->Envelhecer();
        $pessoaME->VerPessoa();
        $pessoaME->Contratar('Marcos');
        $pessoaME->VerEmpresa();
        
        echo "<pre>";
        print_r($pessoa);
        echo"<br> <hr width='50%' align='left'> </hr>";

        echo "<pre>";
        print_r($pessoaME);
        echo"<br> <hr width='50%' align='left'> </hr>";
        ?>
    </body>
</html>

