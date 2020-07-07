<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Icpp;
use Alura\DesignPattern\Impostos\Ikcv;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo "ICMS: " . $calculadora->calcula($orcamento, new Icms()) . PHP_EOL;
echo "ISS: " . $calculadora->calcula($orcamento, new Iss()) . PHP_EOL;
echo "ICPP: " . $calculadora->calcula($orcamento, new Icpp()) . PHP_EOL;
echo "IKCV: " . $calculadora->calcula($orcamento, new Ikcv()) . PHP_EOL;
echo "ICMS + ISS: " . $calculadora->calcula($orcamento, new Iss(new Icms())) . PHP_EOL;
