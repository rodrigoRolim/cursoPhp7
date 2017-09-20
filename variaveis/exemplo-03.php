<?php
	$nome1 = "rodrigo rolim";
	$nome2 = 'www.rodrigo.com';
	$ano = 1992;
	$salario = 5600.90;
	$bloqueado = false;

	//////////////////////////////////

	$frutas = array("abacaxi", "laranja", "acerola");

	echo $frutas[1];

	$nascimento = new DateTime();

	var_dump($nascimento);

	////////////////////////////////////////////

	$arquivo = fopen("exemplo-03.php", "r");

	var_dump($arquivo);

	$nulo = NULL;

	var_dump($nulo);
?>