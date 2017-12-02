<?php 

require_once("config.php");
use Cliente\Cadastro;
$cad = new Cadastro();

$cad->setNome("rodrigo rolim");
$cad->setEmail("rodrigorolimveras@gmail.com");
$cad->setSenha("123423432");
$cad->registrarVenda();


 ?>	