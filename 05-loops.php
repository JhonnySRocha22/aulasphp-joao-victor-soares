<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>

    <style>
        ol li:nth-child(even) { color:orangered; }
        ol li:nth-child(odd) { color:slateblue; }
        ol li{font-size: 20px;}
    </style>
</head>
<body>
    <p> <?=ESCOLA?> - <?=$anoLetivo?></p>
<!-- Usando o foreach para acessar os dados do array criado em outro arquivo (acessivel devido ao include) -->
<?php foreach($linguagens as $linguagem){ ?>
    <p><i><?=$linguagem?></i></p>
<?php } ?>
    <h1>Loops</h1>
    <hr>
    <h2>Tradicionais: for, while, do/while</h2>

    <h3>while</h3>
<?php
$i = 1;
while($i <= 3){
?>
<p>Senac Penha - I vale <?=$i?></p>

<?php
    $i++;
}
?>

<h3>do/while</h3>
<ul>

<?php
$j = 1;
do{
?>

<li>Item: <?=$j?></li>

<?php
$j++;
} while($j <= 5)
?>

</ul>

<h3>for</h3>

<?php
$alunos = ["Jean", "Guiseppe", "Athur", "Pedro", "Paola"];

$quantidade = count($alunos);

for( $i = 0; $i < $quantidade; $i++ ){
?>

<p> Aluno: <?=$alunos[$i]?> </p>

<?php
}

?>

<h3>foreach</h3>

<?php foreach( $alunos as $aluno ){ ?>

  <p> <?=$aluno?> </p>

<?php } ?>


<h2>Exercício 03</h2>
<ol>
<?php
$mesesDoAno = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ];

$contagem = count($mesesDoAno);

for ( $i = 0; $i < $contagem; $i++ ){
?>

<li> <?=$mesesDoAno[$i]?></li>

<?php
}
?>

</ol>

















</body>
</html>