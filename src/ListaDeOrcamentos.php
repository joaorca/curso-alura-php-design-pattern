<?php

namespace Alura\DesignPattern;

use Exception;
use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }
}
