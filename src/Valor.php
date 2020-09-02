<?php

namespace Alfa;

class Valor{

    public float $valor;

    public function __construct() 
    {
        
    }

    public function getValor():float
    {
        return $this->valor;
    }

    public function setValor(float $valor):void
    {
        $this->valor = $valor;
    }
}