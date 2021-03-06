<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(string $nome, $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->validaNome($nome);
    }
    private function validaNome(string $nome)
    {
        if (strlen($nome < 5)){
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }
    public function getNome(): string
    {
        return $this->nome;
    }
}
