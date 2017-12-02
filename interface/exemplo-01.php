<?php 

interface Vehicle {

	public function accelerated($velocidade);
	public function break($velocidade);
	public function changeGear($marcha);
}
class Civic implements Vehicle {
	public function accelerated($velocidade){
		echo "the vehicle accerelated to ".$velocidade."km/h";
	}
	public function break($speed){

		echo "The vehicle breaked to".$speed."km/h";
	}
	public function changeGear($gear){
		echo "The vehicle engaged the gear".$gear;
	}
}
$car = new Civic();
$car->changeGear(1);
 ?>
