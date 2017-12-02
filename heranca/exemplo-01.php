<?php 

class Document {
	private $number;

	public function getNumber() {
		return $this->number;
	}
	public function setNumber($n) {
		$this->number = $n;
	}
}
class CPF extends Document {

	public function validate(): bool {
		$numberCPF = $this->getNumber();
		//validação de cpf
		return true;
	}
}
$doc = new CPF();
$doc->setNumber("111222333-44");
$doc->validate();
var_dump($doc->validate());
echo "<br/>";
echo $doc->getNumber();
 ?>
