<?php
abstract class Animal {
    abstract public function fazerSom();

    public function mover() {
        return "Anda";
    }
}

class Cachorro extends Animal {
    public function fazerSom(): string {
        return "Latido";
    }
}

class Gato extends Animal {
    public function fazerSom(): string {
        return "Miado";
    }
}

class Passaro extends Animal {
    public function fazerSom(): string {
        return "Canto";
    }

    public function mover(): string {
        return "Voa e " . parent::mover();
    }
}

$cachorro = new Cachorro();
echo "Cachorro: " . $cachorro->fazerSom() . " - " . $cachorro->mover() . "<br>";
$gato = new Gato();
echo "Gato: " . $gato->fazerSom() . " - " . $gato->mover() . "<br>";
$passaro = new Passaro();
echo "Passaro: " . $passaro->fazerSom() . " - " . $passaro->mover() . "<br>";
