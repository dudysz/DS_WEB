<?php
class Veiculo {
    public string $marca;
    public string $modelo;
    private float $velocidade = 0;

    public function setVelocidade(float $vel): void {
        $this->velocidade = $vel;
    }

    public function getVelocidade(): float {
        return $this->velocidade;
    }
}

class Carro extends Veiculo {
    public function acelerar(): void {
        $this->setVelocidade($this->getVelocidade() + 20);
        echo "Carro acelerando: " . $this->getVelocidade() . " km/h<br>";
    }
}

class Moto extends Veiculo {
    public function acelerar(): void {
        $this->setVelocidade($this->getVelocidade() + 30);
        echo "Moto acelerando: " . $this->getVelocidade() . " km/h<br>";
    }
}

$carro = new Carro();
$carro->marca = "Toyota";
$carro->modelo = "Corolla";
$carro->acelerar();

$moto = new Moto();
$moto->marca = "Honda";
$moto->modelo = "CBR";
$moto->acelerar();
