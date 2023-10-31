<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>

<?php
$dados = [
    "Usuário" => "Flavin dos pneu",
    "Senha" => "123987",
    "Idade" => 28,
    "Cidade" => "Florianópolis",
    "Telefones" => ["11-4435-5567", "11-92256-7789"]
];
?>

<ol>
    <li>Nome de usuário: <?=$dados["Usuário"]?>.</li>
    <li> Idade: <?=$dados["Idade"]?> anos.</li>
    <li>Cidade: <?=$dados["Cidade"]?>.</li>
    <li>Telefone: <?=$dados ["Telefones"][1]?>.</li>
</ol>

<pre><?=var_dump($dados)?></pre>
     

</body>
</html>