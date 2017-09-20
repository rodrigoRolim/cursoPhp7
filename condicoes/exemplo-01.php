<?php
$qualSuaIdade = 125;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualSuaIdade < $idadeCrinca) {
	echo "criança";
} else if($qualSuaIdade < $idadeMaior) {
	echo "Adolescente";
} else if($qualSuaIdade < $idadeMelhor) {
	echo "adulto";
} else {
	echo "Idoso";
}
echo "<br>";

echo ($qualSuaIdade < $idadeMaior)?"menor de idade":"Maior de idade";
?>

