<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$pedido = new Pedido();
$pedido->nomeCliente = 'João Almeida';
$pedido->dataFinalizacao = new DateTimeImmutable();

$conteudoExportado = new OrcamentoExportado($orcamento);
$arquivoExportado = new ArquivoZipExportado('conteudoExportado');

echo $arquivoExportado->salvar($conteudoExportado);