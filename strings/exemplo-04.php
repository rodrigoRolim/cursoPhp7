<?php
$frase = "A repeticao e mae da retencao.";
$palavra = "mae";
$q = strpos($frase, $palavra);
var_dump($q);
$texto = substr($frase, 0, $q);
var_dump($texto);
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br>";
var_dump($texto2);
echo "<br>";
echo "<br>";
$nome = "rodrigo rolim veras";
$sobrenome = "rolim";
$p = strpos($nome, $sobrenome);
var_dump($p);
$t = substr($nome, 0, $p);
var_dump($t);
?>