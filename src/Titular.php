<?php

class Titular
{
    private $cpf;
    private string $nome;


    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeCorrente($nome);
        $this->nome = $nome;
    }

    private function validaNomeCorrente(string $nomeCorrente)
    {
        if(strlen ($nomeCorrente) < 4 ){
            echo 'O Nome precisa de no minimo 5 caracteres';
            exit();
        }
    }
    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }


}