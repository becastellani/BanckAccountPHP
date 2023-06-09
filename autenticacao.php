<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Bernardo Castellani', new CPF('123.456.331-21'), 10000);


$autenticador->tentaLogin($umDiretor, '1234');