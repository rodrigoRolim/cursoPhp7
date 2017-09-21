<?php 

class People {

	public $name;
	public function speaks(){
		return "my name is ".$this->name;
	}

}
$rodrigo = new People();
$rodrigo->name = "Rodrigo";
echo $rodrigo->speaks();

 ?>