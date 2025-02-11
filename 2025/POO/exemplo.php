<?php

//Atributos:
public $marca;

protected $seguro;

private $renavam;


//Método:
public function ligar(){
    return "0".$this->modelo .  "está ligado";


}

//Instanciando meus objetos:

$polo = new Veiculos ();
$polo->marca = "Wolkswagem";
$polo->renavam = "123123123";

?>