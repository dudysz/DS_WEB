<?php
    abstract class Produto {
        protected $nome;
        protected $preco;
        protected $estoque;

        public function __construct($nome, $preco, $estoque) {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->estoque = $estoque;
        }

        abstract public function calcularDesconto();
    }


    class Eletronico extends Produto {
        public function calcularDesconto() {
            $preco_com_desconto = $this->preco * 0.90;
            if ($this->estoque < 5) {
                $preco_com_desconto *= 0.90;
            }
            return $preco_com_desconto;
        }
    }


    class Roupa extends Produto {
        public function calcularDesconto() {
            $preco_com_desconto = $this->preco * 0.80;
            if ($this->estoque < 5) {
                $preco_com_desconto *= 0.90;
            }
            return $preco_com_desconto;
        }
    }


    $produto1 = new Eletronico("Smartphone", 1000, 4);
    echo "Preço final do Smartphone: R$" . number_format($produto1->calcularDesconto(), 2) . "\n";

    $produto2 = new Roupa("Camiseta", 100, 2);
    echo "Preço final da Camiseta: R$" . number_format($produto2->calcularDesconto(), 2) . "\n";
