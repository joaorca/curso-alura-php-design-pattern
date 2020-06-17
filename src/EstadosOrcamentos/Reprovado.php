<?php

namespace Alura\DesignPattern\EstadosOrcamentos;

use Alura\DesignPattern\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento) : float
    {
        throw new \DomainException(
            'Um orçamento reprovado não pode receber descontos'
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
