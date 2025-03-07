<?php
class Pessoa {
   public $nome = "Diego";
   protected $idade = 50;

   public function verDados() {
      echo $this->nome . "<br>";
      echo $this->idade . "<br>";
   }
}

$objeto = new Pessoa();
$objeto->verDados();

class Funcionario extends Pessoa {
   public $salario = "5000";

   public function verSalario() {
      echo $this->salario . "<br>";
   }
}

$salario = new Funcionario();
$salario->verSalario();

class Gerente extends Funcionario {
   public function falar() {
      return "Gerente recebe 20% do salário como bônus.";
   }
}

class Desenvolvedor extends Funcionario {
   public function calcularBonus() {
      return "Desenvolvedor recebe 10%.";
   }
}

$gerente = new Gerente();
echo $gerente->falar() . "<br>";

$desenvolvedor = new Desenvolvedor();
echo $desenvolvedor->calcularBonus() . "<br>";
