<div class="titulo">Valor vs Referência</div>

<?php

$variavel = 'Valor inicial';
echo "$variavel<br>";

// Atribuição por valor
$variavelValor = $variavel;
echo "$variavelValor<br>";
$variavelValor = 'Novo valor';
echo "$variavel<br>";
echo "$variavelValor<br>";

// Atribuição por referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referência';
echo "$variavel $variavelReferencia";