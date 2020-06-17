<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function __construct(/*PedidoRepository, MailService*/)
    {
    }

    public function execute(GerarPedidoCommand $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidoRepository
        echo "Cria pedido no banco de dados" . PHP_EOL;

        // MailService
        echo "Envia e-mail para cliente" . PHP_EOL;

        echo "Gerar Log de criação de pedido" . PHP_EOL;
    }
}
