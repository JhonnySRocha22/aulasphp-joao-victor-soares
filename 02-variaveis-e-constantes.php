<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>
    <hr>
<?php
$curso = "Programador Web";
$ano = 2023;
$area = "Back-End";

// Formas de saídas COMPLETAS VIA PHP


//Saída interpolada
echo "<p>Estamos no $curso em $ano</p>";

//Não dá certo, as variaveis são tratadas como texto
echo '<p>Estamos no $curso em $ano</p>';

//Saída como CONCATENAÇÃO 
echo '<p>Estamos no '.$curso.' em '.$ano.'</p>';
echo "<p>Estamos no ".$curso." em ".$ano."</p>";
?>
<hr>
<!-- Forma de saída ABREVIADA/SIMPLIFICADA -->

<p>Estamos no <?=$curso?> em <?=$ano?></p>













</body>
</html>