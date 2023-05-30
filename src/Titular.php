<?php

class Titular extends Pessoa
{
    private Endereco $endereco;


    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    private function validaNome(string $nome)
    {
        if(strlen ($nome) < 4 ){
            echo 'O Nome precisa de no minimo 5 caracteres';
            exit();
        }
    }

    public function getEndereco() : Endereco
    {
        return $this->endereco();
    }
}