<?php

interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($velocidade);
}

class Civic implements Veiculo{
	
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
$carro = new Civic();
$carro->trocarMarcha(1);
?>