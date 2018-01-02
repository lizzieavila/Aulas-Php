<?php

class Endereco{

	private $logradouro;
	private $num;
	private $cidade;

 public function __construct($a,$b,$c){

 	$this->logradouro=$a;
 	$this->num=$b;
 	$this->cidade=$c;

//__destruct()

 	//public function __destruct(){}


// __to string

 	//public function _toString(){}
 }
}
$meu_endereco = new Endereco("rua","123","cidade");
var_dump($meu_endereco);
?>