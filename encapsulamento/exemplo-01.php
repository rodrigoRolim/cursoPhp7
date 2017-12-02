<?php 
class People {
	public $nome = "Rasmus lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function seeDates() {
		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";

	}
}
$objeto = new People();

//echo $objeto->idade."<br>";

$objeto->seeDates();
 ?>
