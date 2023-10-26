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

<hr>

<?php
//Constantes (recomenda-se dar nome em MAIÚSCULAS)
//Forma antiga, tradicional 
define("AUTOR", "João Victor Soares da Rocha");
//Forma moderna, Atual
const EMPRESA = "ABC Tecnologia";
const ANO_FUNDACAO = 2000;
?>

<!-- Saídas -->
<p>Autor do site: <?=AUTOR?></p>
<p>Nome da empresa: <?=EMPRESA?></p>
<p>Fundada em: <?=ANO_FUNDACAO?></p>















</body>
</html>