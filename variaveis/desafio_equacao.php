<div class="titulo">Desafio Equação</div>

<img src="assets/img/desafio_equacao.jpeg" alt="Desafio Equação">

<p>Resultado:</p>
<?php

$numA = (6 * ( 3 + 2 )) ** 2;
$denA = 2 * 3;

$numB = (1 - 5) * (2 - 7);
$denB = 2;

$resultA = $numA / $denA;
$resultB = $numB / $denB;

$numC = ($resultA - ($resultB ** 2));
$denC = 10 ** 3;

$resultC = ($numC ** 3) / $denC;

echo $resultC;
?>