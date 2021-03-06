<!DOCTYPE html>
﻿<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Interacão de Classe </title>
    </head>
    <body>
        <?php
        /*
          INSTANCIAR: uma classe significa criar um objeto daquela classe,
          ou seja: objeto é o conjuto de atributos e métodos da classe.
          Métodos são 'Funções' que alteram o comportamento dos objetos.
         */
        require('./classes/InteracaoClasse.class.php');
        require('./classes/InteracaoDeObjetos.class.php');

        $wagner = new InteracaoClasse('wagner', 29, 'Programador', 3600);
        $joao = new InteracaoClasse('joao', 35, 'Futebol', 500);
        $joao->setNome('Joaozinho');

        $web = new InteracaoDeObjetos('WEB TECNOLOGIA');
        $web->Contratar($wagner, 'WebMaster', 3600.12);
        $web->Pagar();
        $web->Promover('Gerente de Projetos', '1500.32');
        $web->Pagar();
        //$web->Demitir(5600);

        $web->Contratar($joao, 'Design', 980.12);
        $web->Pagar();
        
        // voltar a manipular o Objeto $wagner
        $web->Funcionarios($wagner);
        $web->Pagar();
        
        //AQUI EXIBE OS RESULTADOS
        echo"<br> <hr width='50%' align='left'> </hr>";

        echo "<pre>";
        print_r($wagner);
        echo"<br> <hr width='50%' align='left'> </hr>";

        print_r($joao);
        echo "<pre>";
        echo"<br> <hr width='50%' align='left'> </hr>";

        print_r($web);
        echo "<pre>";
        echo"<br> <hr width='50%' align='left'> </hr>";
        ?>
    </body>
</html>

