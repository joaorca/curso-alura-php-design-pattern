<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class LogGerarPedido
{
    public function executaAcao(Pedido $pedido) : void
    {
        echo "Log de pedido gerado" . PHP_EOL;
    }
}
