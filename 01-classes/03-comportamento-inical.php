<html lang="pt-br">
<head>
	<meta charset="${project.encoding}" >
  <tilte>Comportamento Inicial</title>
</head>
<body>
<?php
	require('./classes/ComportamentoInicial.class.php');
	// todos os comportamentos inical dos metodos recebem null
	//$wagner = new ComportamentoInical; 
	//$wagner->ver();

	// mudar esse comprtamento inical // atraves do method construtor
	//$wagner->Nome = "Wagner";
	//$wagner->Salario = "R$ 1500,00";
	//$wagner->ver();

	/*
        Métodos Mágicos:
        Os nomes de funções 
        __construct,   __destruct,    __call, 
        __callStatic,   __get,   __set,   __isset,   __unset, 
        __sleep,   __wakeup,   __toString,   __invoke,   __set_state    and     __clone __debugInfo() 
        são mágicos nas classes do PHP. 
        Você não pode ter funções com esses nomes em nenhuma 
        de suas classes a não ser que queria que a funcionalidade mágica associada com eles. 

	*/

	//AQUI MUDANDO O COMPORTAMNETO INICAL
	$fagner = new ComportamentoInicial('Fagner' , 'banana' , 'Prog' , 'R$ 1600,00');
	$fagner-> ver();  // apresenta variavies com zero , porque foram incorretas ao tipo de dado definido

	$fagner->Idade = 29 ;
	$fagner->Salario = 1500.15 ;
	$fagner->ver();  // agora inseridos certo como tipo de dado definido

    //NOVOS OBJETOS
	$wagner = new ComportamentoInicial('Wagner' , '30' , 'Logistica' , 'R$ 1200,0');
	$amanda = new ComportamentoInicial('Amanda' , 'banana' , 'Empresaria' , 'R$ 2600,0');

	//  Aqui para baixo a memoria esta limpa 
	$wagner-> ver(); 
?>
</body>
</html>

