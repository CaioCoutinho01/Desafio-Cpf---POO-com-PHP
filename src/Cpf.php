<?php

class Cpf
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }
    public function getNumero(): string
    {
        return $this->numero;
    }
}