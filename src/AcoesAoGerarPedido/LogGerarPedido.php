<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;


class LogGerarPedido implements \SplObserver
{
    public function update(\SplSubject $pedido) : void
    {
        echo "Log de pedido gerado" . PHP_EOL;
    }
}
