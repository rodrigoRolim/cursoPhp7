<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","lichiking");


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Inserido OK!";


 ?>