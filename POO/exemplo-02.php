<?php 
class Car {
	private $model;
	private $motor;
	private $year;

	public function getModel() {
		return $this->model;
	}
	public function setModel($model) {
		$this->model = $model;
	}
	public function getMotor():float {
		return $this->motor;
	}
	public function setMotor($motor) {
		$this->motor = $motor;
	}
	public function getYear():int {
		return $this->year;
	}
	public function setYear($year) {
		$this->year = $year;
	}
	public function show() {
		return array(
			"modelo"=>$this->getModel(),
			"motor"=>$this->getMotor(),
			"year"=>$this->getYear()
		);
	}
}
$gol = new Car();
$gol->setModel("Gol GT");
$gol->setMotor("1.8");
$gol->setYear("2004");

var_dump($gol->show());
 ?>
