<?php
require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Funcionario, Gerente, Desenvolvedor};

$umFuncionario = new Desenvolvedor('Bernardo Castellani',
    new CPF('543.448.288-36'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaGerente = new Gerente('Izabelly',
    new CPF('123.212.313-31'),
    3000
);

$umDiretor= new Diretor('Juninho',
    new CPF('332.212.313-31'),
    5000
);
$umEditor = new EditorVideo('Paulo',
new CPF('342.221.332-54'),
1500);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaGerente);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();