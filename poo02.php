<?php

class Carro{
	private $modelo;
	private $motor;
	private $ano;


public function getModelo(){
return $this->modelo;
}

public function setModelo($modelo){
	$this->modelo=$modelo;

}

public function getMotor(){
return $this->motor;
}

public function setMotor($motor){
	$this->motor=$motor;

}

public function getAno(){
	return $this->ano;
}

public function setAno($ano){
	$this->ano=$ano;

}

public function exibir(){
	return array(
		"modelo"=>$this->getModelo(),
		"motor"=>$this->getMotor(),
		"ano"=>$this->getAno()

	);
}

}


$gol = new Carro();
$gol->setModelo("gol01");
$gol->setMotor("0000000");
$gol->setAno("20000");

//print_r($gol->exibir());

var_dump($gol->exibir());
?>