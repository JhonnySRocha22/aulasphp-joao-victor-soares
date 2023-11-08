<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando os Dados</title>
</head>
<body>
    <h1>Processamento de dados vindos do formulário</h1>
    <hr>
<?php
//Recebendo os dados via método POST
//usando o array superglobal $_POST[]
$nome = $_POST["nome"];
$email = $_POST["email"];
$nascimento = $_POST["nascimento"];
$mensagem = $_POST["mensagem"];


if (empty($nome) || empty($email)) {
?>
<p>Você deve preencher nome e e-mail</p>
<?php
}else {
?>
<h2>Dados Recebidos:</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>Email: <?=$email?></li>
    <li>Nascimento: <?=$nascimento?></li>
    <li>Mensagem: <?=$mensagem?></li>
</ul>
<?php } ?>
</body>
</html>