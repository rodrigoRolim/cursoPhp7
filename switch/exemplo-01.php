<?php
$diaDasemana = 8;//date("w");
echo $diaDasemana;
echo "<br>";
switch($diaDasemana) {
	case 0:
	echo "Domingo";
	break;
	case 1:
	echo "Segunda-feira";
	break;
	case 2:
	echo "Terça-feira";
	break;
	case 3:
	echo "Quarta-feira";
	break;
	case 4:
	echo "quinta-feira";
	break;
	case 5:
	echo "Sexta-feira";
	break;
	case 6:
	echo "Sábado";
	break;
	default:
	echo "Entrada inválida";

}
?>