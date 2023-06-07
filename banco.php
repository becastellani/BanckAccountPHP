<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Toledo', 'Jardim Santa Maria', 'Rua da Faculdade', '22b');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Bernardo Castellani', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->getNome() . PHP_EOL;
echo $primeiraConta->getCpf() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('212.222.111-22'), 'Izabelly', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
