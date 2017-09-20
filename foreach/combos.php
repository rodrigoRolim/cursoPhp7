<?php 
$conexao = mysqli_connect("127.0.0.1", "root", "lichiking", "ProjetoWeb");
$dados = mysqli_query($conexao, "SELECT * FROM grupo");
$produto = mysqli_fetch_array($dados);
 ?>
 
<select>
	<?php foreach ($produto as $key => $value): ?>
		<option value="<?= $key?>"><?= $value?></option>
	<?php endforeach ?>
</select>
 