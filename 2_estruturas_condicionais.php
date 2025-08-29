<?php

echo "Estruturas condicionais <br></br>";
// estruturas que usam operadores e comparacoes
// para atingir resultados diferente no programa.

// if, else, else if

$idade = 20;

// if(comparacao -> booleano(T/F)){ //executo }
if ($idade >= 18) {
    echo "Você é maior de idade <br></br>";
}

//else executa quando o if da falso
// else { // executa se falso}

$salario = 1000;

if ($salario > 2000) {
    echo "O seu salário é bom! <br></br>";
} else {
    echo "Seu salário é baixo! <br></br>";
}

// if -> se  o operacao é verdadeira
// else -> se o if for falsa

// else if Condicao intermediaria 
// if, else if, else

$nota = 7.5;

if ($nota > 9) {
    echo "Você tirou uma nota alta! <br></br>";
} elseif ($nota > 7) {
    echo "Você tirou uma nota boa! <br></br>";
} else {
    echo "Você tirou uma nota baixa! <br></br>";
}

//Nao tem limite de else if, posso ter 100
//sempre tenho que ter if
//posso ou nao ter 1 ou mais else if's
//posso ou nao ter 1 else

// > 100 = é muito rapido
// > 80 = acima do limite 
// > 60 = acitavel 
// < = muito lento

$velocidade = 120;

if ($velocidade >= 100) {
    echo "Você está muito acima do limite! <br></br>";
} elseif ($velocidade >= 80) {
    echo "Você está acima do limite! <br></br>";
} elseif ($velocidade >= 60) {
    echo "Você está em uma velocidade boa. <br></br>";
} else {
    echo "Você está muito lento, por favor aumente a sua velocidade. <br></br>";
}
