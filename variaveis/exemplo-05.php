<?php
$nome = "rodrigo";

function teste() {
	global $nome;
	echo $nome;
}

function teste2() {
	$nome = "joao";
	echo $nome." no teste2 ";
}

teste();
teste2();
?>