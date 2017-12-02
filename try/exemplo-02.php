<?php 

function tratarNome($name){
	if(!$name) {
		throw new Exception("Nenhum nome foi informado."."<br>", 1);
	}
	echo ucfirst($name)."<br>";
}
try {

	tratarNome("Joao");
	tratarNome("");

} catch(Exception $ex) {

	echo $ex->getMessage();

} finally {

	echo "Executou o try!";
}
 ?>


