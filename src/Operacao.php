<?php

namespace Alfa;
use Alfa\Valor;
use League\CLImate\CLImate;


class Operacao extends Valor
{
    protected $climate;

    public function __construct(CLImate $climate)
    {
        $this->climate = $climate;
    }

    public function input()
    {
        $msg = 'Valor: ';
        if (func_num_args() > 0) {
            $msg = func_get_args()[0];
        }
        $input = $this->climate->input($msg);
        $response = $input->prompt();
        $this->valor = (float) $response;
    }
}
