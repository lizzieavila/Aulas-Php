<?php

class pessoa{

	public $nome;

	public function falar(){

		return "O meu nome é".$this->nome;
	}
}


$eu = new pessoa();
$eu->nome ="nome da pessoa";


?>