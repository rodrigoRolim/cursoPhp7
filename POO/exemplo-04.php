<?php 
class Address {

	private $logradouro;
	private $number;
	private $town;

	public function __construct($a,$b,$c){
		$this->logradouro = $a;
		$this->number = $b;
		$this->town = $c;
	}
	public function __destruct() {
		//var_dump("Destroy");
	}
	public function __toString() {
		return $this->logradouro. ", ".$this->number." - ".$this->town;
	}
}
$myAddress = new Address("rua do diabo","666","satanica");
echo $myAddress;
 ?>
