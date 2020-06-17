<?php

use Alura\DesignPattern\GerarPedidoCommand;
use Alura\DesignPattern\GerarPedidoHandler;

require_once 'vendor/autoload.php';


$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedidoCommand($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);
