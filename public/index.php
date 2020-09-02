<?php

require_once('../vendor/autoload.php');


use Alfa\Fatorial;
use Alfa\RaizQuadrada;
use Alfa\Quadrado;
use Alfa\Operacao;
use League\CLImate\CLImate;


$climate = new CLImate;

$options  = [
    'Raiz Quadrada',
    'Fatorial',
    'Ao Quadrado'
];
$menu = $climate->radio('Por favor selecione uma opção:', $options)->prompt();
$operacao = new Operacao($climate);

switch ($menu) {
    case 'Raiz Quadrada':

        $operacao->input('Insira um valor: ');
        $raiz     = new RaizQuadrada($operacao->getValor());
        echo "Resultado Raiz Quadrada: ".  $raiz->raizQuadrada();
        break;

    case 'Fatorial':

        $operacao->input('Insira um valor: ');
        $fatorial = new Fatorial();
        echo "Resultado Fatorial: ". $fatorial->fatorial((int)$operacao->getValor());
        break;

    case 'Ao Quadrado':

        $operacao->input('Insira o valor da base: ');
        $base=(int) $operacao->getValor();
        $operacao->input('Insira o valor a calcular: ');
        $valor=(float) $operacao->getValor();
        $quadrado = new Quadrado($valor,$base);
        echo "Resultado Fatorial: ". $quadrado->quadrado();
        break;

    default:
        # code...
        break;
}