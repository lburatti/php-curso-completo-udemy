<div class="titulo">Variáveis</div>

<?php 
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';

$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;
echo '<br>';

echo isset($soma);
echo '<br>';

// unset($soma);
var_dump($soma);
echo '<br>';

$variavel = 10;
echo $variavel;
echo '<br>';

$variavel = "Agora sou uma string";
echo $variavel;
echo '<br>';

// Nomes de variáveis
$var = "valida";
$var2 = "valida";
$VAR3 = "valida";
$_var_4 = "valida";
$vâr5 = "valida, mas EVITAR";
// $6var = "invalida";
// $%var7 = "invalida";
// $var8% = "invalida";
echo '<br>';
var_dump($_SERVER["HTTP HOST"]);