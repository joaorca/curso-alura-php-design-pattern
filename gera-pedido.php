<?php

use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\GerarPedidoCommand;
use Alura\DesignPattern\GerarPedidoHandler;

require_once 'vendor/autoload.php';


$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedidoCommand = new GerarPedidoCommand($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcao(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcao(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcao(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedidoCommand);
