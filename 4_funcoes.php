<?php
echo "<h1>Funções</h1> <br><br>";


//funcoes = bloco de codigo que serao resutilizados
function boasVindas(): void
{
    echo "Seja bem-vindo!<br>";
}

boasVindas();

function boasVindas2($nome): void
{
    echo "Seja bem-vindo $nome! <br><br>";
}

boasVindas2(nome: "Eduardo");

$meuNome = "Nícolas";

boasVindas2(nome: $meuNome);

function soma($a, $b): mixed
{
    return $a + $b;
}

$resultado = soma(a: 4, b: 4);
echo "O resultado é  $resultado <br><br>";
