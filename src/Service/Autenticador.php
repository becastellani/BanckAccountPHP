<?php

namespace Alura\Banco\Service;


class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha) :void
    {
    if($autenticavel->podeAutenticar($senha)){
        echo "Usuário Logado com Sucesso";

    }else{
        echo "Senha incorreta.";
    }


    }
}