<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "lichiking");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$result =  $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);
foreach($result as $row){
    foreach($row as $key => $value) {

        echo "<strong>".$key.":</strong>".$value."<br>";
    }
    echo "<hr>";
}
?>