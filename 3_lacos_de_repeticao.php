<?php

echo "<h1>Laços/Estrutura de repetição </h1> <br></br>";

//while, do while, for

//for => parece ser mais complexo, mas e o preferido
//é uma opcao para eu dominar

//repetir o codigo x vezes
//onde x ela é baseada numa condicao
//quando a gente 'ultrapassa' satisfaz essa condicao a gente sai do lupim

//for(INCREMENTADOR; CONDICAO; INCREMENTO) {//}
for ($i = 0; $i <= 10; $i++) {
    if ($i > 5) {
        echo "Test";
    }

    echo "Número $i <br>";
}

for ($j = 20; $j > 10; $j--) {
    echo "Diminuindo J $j <br>";
}

//while

$contador = 1;

while ($contador <= 10) {
    echo "Número $contador <br>";

    $contador++;
}

//loop infinito => eu defino errado uma condicao.
//de finalizacao de loop
// é so trocar o sinal do incremento para decremento ($contador--;)

// foreach -> array

$frutas = ['maçã', 'uva', 'banana', 'laranja'];

foreach ($frutas as $fruta) {
    echo "Fruta $fruta <br>";
}

// //exemplo que eu fiz!!
// $eletronicos = ['celular', 'computador', 'carregador', 'monitor'];

// foreach ($eletronicos as $eletronico) {
//     echo "Eletrônico $eletronico <br>";
// }


//arrays associativas chave => valor

$pessoas = [
    'Nícolas' => 20000,
    'Eduardo' => 30000,
    'Acaz' => 15000
];

echo '->' . $pessoas['Nícolas'] . "<br>";

foreach ($pessoas as $pessoa => $salario) {
    echo "Dados: $pessoa ganha $salario <br>";
}

//Eu que fiz esse.
// $amigos = [
//     'Victor' => "moto",
//     'Carlos' => "bike",
//     'Octávio' => "carro"
// ];

// echo '->' . $amigos['Victor'] . "<br>";

// foreach ($amigos as $amigo => $automovel) {
//     echo "Estátistica: $amigo tem $automovel <br>";
// }
