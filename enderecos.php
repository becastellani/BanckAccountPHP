<?php

use Alura\Banco\Modelo\Endereco;
require_once 'autoload.php';

$umEndereco = new Endereco('Toledo', 'Jardim Santa Maria', 'Rua da Faculdade','927');
$outroEndereco = new Endereco('Barretos', 'Irineu', 'Jose', '123');


echo $umEndereco . PHP_EOL;
echo $outroEndereco;