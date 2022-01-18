<?php

require 'src/Conta.php';
require 'src/Titular.php';
require 'src/Cpf.php';

$primeiraConta = new Conta(new Titular('Caio Coutinho', new Cpf('123.456.789-10')));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

//echo "Saldo: " . $primeiraConta->recuperarsaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular('Rebeca Fransin', new Cpf('987.654.321-10')));
$segundaConta->depositar(1000);
$segundaConta->transferir(300, $primeiraConta);

echo "Nome: " . $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo "CPF: " . $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "Saldo: " . $primeiraConta->recuperarsaldo() . PHP_EOL;

echo "Nome: " . $segundaConta->recuperaNomeTitular() . PHP_EOL;
echo "CPF: " . $segundaConta->recuperaCpfTitular() . PHP_EOL;
echo "Saldo: " . $segundaConta->recuperarsaldo() . PHP_EOL;


echo "total de Contas: " . Conta::recuperaNumerodeContas() . PHP_EOL;
