<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Operador de resoluçao de escopo </title>

    </head>
    <body>
        <?php
        
        
        /**
         * Operador de resolucao Escopo serve para acessar a classe
         * diretamente os membros da c de fora dela.
         * ResolucaoEscopo::Relatorio();  //acessa o metodo diretamente
         * ResolucaoEscopo::$Vendas;    //acessa o atributo estatico diretamente
         */
        /**
         * uma propriedade se refencia diretamenta a classe e não ao objeto.
         * deixa de ser estanciada pelo $this.
         * pois a pseudo variável $this se referencia ao objeto.
         */
         require('./inc/Config.inc.php');
        
         $produto = new ResolucaoDeEscopo('Livro PHP', 2.50);
         $digital = new ResolucaoDeEscopoDigital('Livro PHP', 1.50);
         
         $produto->Vender();
         $produto->Vender();
         $produto->Vender();
         $produto->Vender();
         
         $digital->Vender();
         $digital->Vender();
     
         
         $produto->Relatorio();
         
         // exemplo de resolução de escopo (static) acessa  diretamente os membros da classe
         // neste acessou diretamente o metodo Relatorio()
         ResolucaoDeEscopo::Relatorio();
         
         
         // neste acessou diretamente o atributo da clasee ResolucaoEscopo;
         echo " <br> O produto {$produto->getProduto()}  vendeu ". ResolucaoDeEscopo::getVendas();
         
         echo "<br>" . ResolucaoDeEscopoDigital::$Digital . " Livro(s) Digital(is) <br>";
  
         echo ResolucaoDeEscopo::getVendas() - ResolucaoDeEscopoDigital::getDigital() . " Livros Impressoss";
         
        //debug
        echo "<hr> <pre>";
        print_r($produto);
        echo "</pre> <hr>";

        echo "<hr> <pre>";
        print_r($digital);
        echo "</pre> <hr>";

        ?>
    </body>
</html>
