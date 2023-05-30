<?php

class Pessoa
{
   public string $nome;
   public string $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome() : string
    {
            return $this->nome;
    }

    public function getCpf() : string
    {
        return $this->cpf->recuperaNumero();
    }
}