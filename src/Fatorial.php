<?php

declare(strict_types=1);

namespace Alfa;

class Fatorial
{
    public function __construct()
    {

    }

    public function fatorial(int $n):int
    {
        return ($n) ? $n * $this->fatorial($n - 1) : 1;
    }
}