<?php

use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->valor = 1500.75;
$orcamento1->aprova();

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->valor = 150;
$orcamento2->reprova();

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->valor = 1350;
$orcamento3->aprova();
$orcamento3->finaliza();

$listaOrcamento = new \Alura\DesignPattern\ListaDeOrcamentos();
$listaOrcamento->addOrcamento($orcamento1);
$listaOrcamento->addOrcamento($orcamento2);
$listaOrcamento->addOrcamento($orcamento3);

foreach ($listaOrcamento as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd. Itens: " . $orcamento->quantidadeItens . PHP_EOL;
    echo PHP_EOL;
}
