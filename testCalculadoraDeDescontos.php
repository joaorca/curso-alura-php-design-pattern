<?php

use Alura\DesignPattern\CalculadoraDeDesconto;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 6;

echo "Desconto: " . $calculadora->calcula($orcamento) . PHP_EOL;
