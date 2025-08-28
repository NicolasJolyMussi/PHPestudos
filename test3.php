<?php

echo "Estruturas condicionais <br></br>";
// estruturas que usam operadores e comparacoes
// para atingir resultados diferente no programa.

// if, else, else if

$idade = 20;

// if(comparacao -> booleano(T/F)){ //executo }
if($idade >= 18)
{
    echo "Você é maior de idade <br></br>";
}

//else executa quando o if da falso
// else { // executa se falso}

$salario = 1000;

if($salario > 2000)
{
    echo "O seu salário é bom! <br></br>";
}
else
{
    echo "Seu salário é baixo! <br></br>";
}

// if -> se  o operacao é verdadeira
// else -> se o if for falsa

// else if Condicao intermediaria 
// if, else if, else

$nota = 7.5;

if($nota > 9 )
{
    echo "Você tirou uma nota alta! <br></br>";
}
elseif($nota > 7)
{
    echo "Você tirou uma nota boa! <br></br>";
}
else
{
    echo "Você tirou uma nota baixa! <br></br>";
}
?>
