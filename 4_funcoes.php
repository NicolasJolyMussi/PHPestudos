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

//funcoes da linguagem -> built in functions
//podemos saber o tamanho do texto

$tamanho = strlen(string: "Este é o meu texto <br><br>");
echo "O tamanho do texto é $tamanho <br><br>";

$cores = ["verde", "amarelo"];

array_push($cores, "vermelho");

print_r(value: $cores);
