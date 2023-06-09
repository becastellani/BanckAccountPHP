<?php

namespace Alura\Banco\Modelo;

trait AcessoProp
{
    public function __get(string $name)
    {
        $metodo = 'get' . ucfirst($name);
        return $this->$metodo();
    }
}