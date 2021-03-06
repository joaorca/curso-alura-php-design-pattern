<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDesconto
{
    public function calcula(Orcamento $orcamento): float
    {
        $cadeiaDeDesconto =
            new DescontoMaisDe5Itens(
                new DescontoMaisDe500Reais(
                    new SemDesconto()
                )
            );

        $descontoCalculado = $cadeiaDeDesconto->calcula($orcamento);
        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}
