<?php

if (isset($_GET['nome'])) {
    //isso ( htmlspecialchars($_GET['nome']); ) livra de alguns ateques tipo XSS
    $nome = htmlspecialchars($_GET['nome']);
    $idade = htmlspecialchars($_GET['idade']);
    echo "Olá, seja bem vindo $nome, você tem $idade anos.";
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu formulário</title>
</head>

<body>

    <h2>Exemplo de form</h2>
    <form action="5_formularios.php" method="GET">
        <label for="nome">Digite seu nome:</label>
        <input type="text" id="nome" name="nome">
        <label for="idade">Digite sua idade:</label>
        <input type="text" name="idade" id="idade">
        <button type="submit">Enviar</button>
    </form>

</body>

</html>
