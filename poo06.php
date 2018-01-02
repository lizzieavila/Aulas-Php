<?php
class Documento{

private $numero;

public function getNumero(){
return $this->numero;

}

public function setNumero($n){
	$this->numero=$n;
}
}

/**
* 
*/
class Cpf extends Documento{

	public function validar(){
		$numCpf=$this->getNumero();
		return true;

	}
	
	}
$doc = new Cpf();
$doc->setNumero('0005230820-12');
var_dump($doc->validar());
echo $doc->getNumero();
?>