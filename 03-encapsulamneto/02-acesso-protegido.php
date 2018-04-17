<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> </title>
    </head>
    <body>
        <?php
        require('./inc/Config.inc.php');

        $maria = new AcessoProtegido('Wagner', 29, 'wagner@hotmail.com');
        $maria->Nome = 'Maria Santos';
        
        /* erro! atributo do Objeto está protegido, não pode setar direto  */
        //$maria->Email = 'maria.com';            
        $maria->setEmail('maria@hotmail.com');
        $maria->ValidaIdade(30);
        
        /* erro! metodo do Objeto está protegido, não pode setar direto  */
        //$maria->setNome('wagner');
        
        
        
        echo "<hr> <pre>";
        print_r($maria);
        echo "</pre> <hr>";
        
        
        //----------------------------------------------------------//
        $pablo = new AcessoProtegidoFilha('pablo', 29, 'pablo@hotmail.com');
        // $pablo->setNome(); //meto está com final
        $pablo->AddCpf('pablo', 105189891656);
        $pablo->ValidaIdade(32);
        
        
        echo "<hr> <pre>";
        print_r($pablo);
        echo "</pre> <hr>";
        
       
        ?>
    </body> 
</html>
