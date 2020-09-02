<?php

namespace Alfa;
use Alfa\Valor;

class RaizQuadrada extends Valor
{
    
    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    public function raizQuadrada()
    {
        return sqrt($this->getValor());
    }
}