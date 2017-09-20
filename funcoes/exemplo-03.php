<?php 
function ola($texto="Mundo", $periodo) {

	return "olá $texto! $periodo! <br>";
}

echo ola("","bom dia");
echo ola("","boa noite");
echo ola("Glaucio", "boa tarde");
echo ola("João","");

 ?>
