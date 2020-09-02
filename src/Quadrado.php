<?php

namespace Alfa;
use Alfa\Valor;

class Quadrado extends Valor
{
    public int $base;

    public function __construct(float $valor,int $base)
    {   
        $this->valor = $valor;
        $this->base = $base;
    }

    public function getBase() :int
    {
        return $this->base;
    }

    public function setBase(int $valor) :void
    {
        $this->base = $valor;
    }


    public function quadrado():float
    {
        return $this->getValor() ** $this->getBase();
    }

}