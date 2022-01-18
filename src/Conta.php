<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numerodeContas = 0;

    public function __construct($titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numerodeContas++;
    }
    public function __destruct()
    {
        self::$numerodeContas--;
    }
    public function sacar( float $valorASacar){
        if ($valorASacar > $this->saldo){
            echo "saldo Indisponível";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar <= 0) {
            echo "Valor precisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }
    public function transferir(float $valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo Inisponível";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
    public function getsaldo(): float
    {
        return $this->saldo;
    }
    public static function getNumerodeContas(): int
    {
        return self::$numerodeContas;
    }
    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }
    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }
}
