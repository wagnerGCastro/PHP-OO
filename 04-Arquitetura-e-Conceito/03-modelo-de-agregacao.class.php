<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Modelo Agregação</title>
    </head>
    <body>
        <?php
        /**
         * AGREGACÃO:
         * Conceito: consegue determinar qual classe o objeto deve ser inofrmado.
         * ou seja : tem duas classes disntintas , nenhuma herdando a outra.
         * Mas consegue ter uma interação maior entre essas  classes praticando a resposabilidade clara.
         * Porque ao informar um objeto que não foi solicitado a clase, vai indentificar que esse ojeto não tem acesso.
         * */
        require('./inc/Config.inc.php');
        // estanciando objetos
        $cliente = new AssociacaoCliente('wagner', 'wagner@hotmail.com');
        $prodPHP = new AgregacaoProduto(20, 'Pro PHP', 25.10);
        $prodCSS = new AgregacaoProduto(21, 'CSS', 20.10);
        $outrocurso = new stdClass();
        $carrinho = new AgregacaoCarrinho($cliente);
        
        // atribuição dos objetos
        $outrocurso->Produto = 22;
        $outrocurso->Nome = 'JQuery';
        $outrocurso->Valor = 65.52;

        $carrinho->addCarrinho($prodPHP);
        $carrinho->addCarrinho($prodCSS);
        //$carrinho->addCarrinho($outrocurso);
        
        $carrinho->removeCarrinho($prodCSS);

        // debug
        echo "<pre>";
        print_r($cliente);
        echo "</pre> <hr>";

        echo "<pre> ";
        print_r($prodPHP);
        echo "</pre> <hr>";
        
        echo "<pre> ";
        print_r($prodCSS);
        echo "</pre> <hr>";

        echo "<pre> ";
        print_r($outrocurso);
        echo "</pre> <hr>";

        echo "<pre> ";
        print_r($carrinho);
        echo "</pre> <hr>";
        ?>
    </body>
</html>
