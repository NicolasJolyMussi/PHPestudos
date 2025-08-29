<?php

// Variáveis  e tipos de dados
echo "Variáveis e Tipos de Dados <br></br>";
echo "test <br></br>";

// Variáveis
$nome = "Nícolas";
echo "Olá meu nome é $nome <br></br>";
$sobreNome = "Mussi";
$nomeCompleto = $nome . "" . $sobreNome;
echo "O meu nome completo é $nomeCompleto <br></br>";

//Topos de Dados
//inteiro
$idade = 18;
echo "Eu tenho $idade anos. <br></br>";
$somaIdade = $idade + 5;
echo "A soma da minha idade mais 5 é $somaIdade <br></br>";

// float * numeros quebrados

$altura = 1.80;
echo "Minha altura é $altura <br></br>";
$somarAltura = $altura + .03;
echo "Somando 03 a mais na minha altura fica $somarAltura <br></br>";

//boolean
//verdadeiro ou false / Verdadeiro é igual a 1 e False é igual a 0

$maiorDeIdade = true;
$podeDirigir = false;
echo "$maiorDeIdade <br></br>";

//arrays - list 
$frutas = ["maçã", "banana", "laranja"];
//indices -> posicao dos elementos numa lista
//toda lista comeca na posicao 0

echo "Primeira frutas => $frutas[0] <br></br>";
echo "$frutas[2] <br></br>";
$frutas[] = "abacaxi";
echo "$frutas[3] <br></br>";

//operadores 
//+, -, /, *

echo "Soma:" . (10 + 5) . "<br></br>";
$a = 12;
$b = 7;

echo "Subtração: " . ($a - $b) . "<br></br>";
echo "Sub negativo: " . ($b - $a) . "<br></br>";
echo "Divisão: " . ($a / $b) . "<br></br>";
echo "Multiplicação: " . ($a * $b) . "<br></br>";

//operadores de comparacao
// ==, ===, !=
// 1 igual (=) significa atribuicao
// 2 iguaias (==) significa comparacao
// 3 iguais (===) siginificam identicos
$c = "12";

echo "Igualdade " . ($a == $c ? "Verdadeiro" : "Falsa") . "<br></br>";
echo "Igualdade " . ($b == $c ? "Verdadeiro" : "Falsa") . "<br></br>";
echo "Identico " . ($a === $c ? "Verdadeiro" : "Falso") . "<br></br>";
echo "É diferente " . ($a != $b ? "Verdadeiro" : "Falsa") . "<br></br>";

// operadores  logicos (tabela verdade)
// && -> end(e) -> se as duas forem verdadeiras
// || -> or(ou) -> se UMA apenas for verdadeira
// ! -> not -> inverte o booleano 

$idade = 20;
$idade2 = 17;
$temCarteira = false;

//true e !false -> true 
echo "Deve tirar a carteira? " . (($idade >= 18 && !$temCarteira) ? "Sim" : "Não") . "<br></br>";
//true OU false
echo "É maior de idade? " . (($idade >= 18 || $temCarteira) ? "Sim" : "Não") . "<br></br>";

echo "Deve tirar a carteira? " . (($idade2 >= 18 && !$temCarteira) ? "Sim" : "Não") . "<br></br>";
echo "É maior de idade? " . (($idade2 >= 18 || $temCarteira) ? "Sim" : "Não") . "<br></br>";

//Operadores de atribuicao

$saldo = 100;

//$saldo = $saldo + 50;
$saldo += 100;

echo "Meu saldo: " . ($saldo) . "<br></br>";

$saldo -= 100;

echo "Meu saldo: " . ($saldo) . "<br></br>";

$saldo *= 100;

echo "Meu saldo: " . ($saldo) . "<br></br>";

$saldo /= 100;

echo "Meu saldo: " . ($saldo) . "<br></br>";
