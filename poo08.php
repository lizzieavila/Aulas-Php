<?php

interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($velocidade);
}

abstract class Automovel implements Veiculo{
	
	public function acelerar($velocidade){

		echo $velocidade;
	}
	public function freiar($velocidade){

		echo $velocidade;
	}
	public function trocarMarcha($velocidade){

		echo $velocidade;
	}

}

class Delrey extendes Automovel{
	public function empurrar(){

	}
}
$carro=new Delrey();
$carro->acelerar(200);
?>

