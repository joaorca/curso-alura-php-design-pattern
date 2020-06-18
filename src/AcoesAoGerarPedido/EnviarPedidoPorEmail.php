<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;


class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(\SplSubject $pedido) : void
    {
        echo "Enviando email de pedido gereado" . PHP_EOL;
    }
}
