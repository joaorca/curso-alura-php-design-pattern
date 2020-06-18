<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;

class EnviarPedidoPorEmail
{
    public function executaAcao(Pedido $pedido) : void
    {
        echo "Enviando email de pedido gereado" . PHP_EOL;
    }
}
