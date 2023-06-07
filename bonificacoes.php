<?php
require_once 'autoload.php';
use Alura\Banco\Modelo\{CPF, Funcionario};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario('Bernardo Castellani',
    new CPF('543.448.288-36'),
    'Desenvolvedor',
    '1000'
);

$umaFuncionaria = new Funcionario('Izabelly',
    new CPF('123.212.313-31'),
    'Gerente',
    '3000'
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();