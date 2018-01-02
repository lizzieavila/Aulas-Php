<?php

class Pessoa{
	public $nome="pessoa";
	protected $idade= 48;
	private $senha = "123456";

	public function verDados(){

		echo $this->nome;
		echo $this->idade;
		echo $this->senha;
	}
}

class Programador extends Pessoa{

	public function verDados(){

		echo get_class($this)."<br>";

		echo $this->nome;
		echo $this->idade;
		echo $this->senha;
	}

}
$objeto = new Programador();

$objeto->verDados();
?>