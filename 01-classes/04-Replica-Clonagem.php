<html lang="pt-br">
<head>
	<meta charset="${project.encoding}" >
  <tilte>Replica e Clonagem </title>
</head>
<body>
<?php
	require('./classes/ReplicaClonagem.class.php');

	$readA = new ReplicaClonagem("posts", " categoria ='noticias' ", 'ORDER BY data DESC');
	$readA->Ler();
	$readA->setTermos("categoria = 'internet' ");
	$readA->Ler();
    //Réplica $readB é um objeto igual readA;   
	$readB = $readA ; 
	$readB->setTermos("categoria = 'redes sociais' ");
	$readA->Ler();
    //clonagem
	$readC = clone($readA) ;
	$readC->setTabela("comentarios");
	$readC->setTermos("post = 25");
	$readC->Ler();
	//var_dump($readA, $readB, $readC);
    echo "<pre>";
    var_dump($readA, $readB, $readC);
    echo "</pre>";
?>
</body>
</html>

