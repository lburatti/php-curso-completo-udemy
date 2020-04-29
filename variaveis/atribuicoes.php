<div class="titulo">Atribuições</div>

<?php
echo '<p>Numeros</p>';
$numero = 10;
echo $numero."<br>";
$numero = $numero - 3;
echo $numero."<br>";
$numero = $numero + 1.5;
echo $numero."<br>";
$numero--; // $numero = $numero - 1;
--$numero; // $numero = $numero - 1;
echo $numero."<br>";
$numero++; // $numero = $numero + 1;
++$numero; // $numero = $numero + 1;
echo $numero."<br>";
$numero = 20;
echo $numero."<br>";
$numero -= 5;
echo $numero."<br>";
$numero += 5;
echo $numero."<br>";
$numero *= 10;
echo $numero."<br>";
$numero /= 2;
echo $numero."<br>";
$numero %= 6;
echo $numero."<br>";
$numero **= 4;
echo $numero."<br>";
$numero .= 4; // apenas concatenação
echo $numero."<br>";

echo '<p>Textos</p>';
$texto = 'Esse é um texto';
echo $texto."<br>";
$texto = $texto . ' qualquer';
echo $texto."<br>";
$texto .= ' de verdade!';
echo $texto."<br>";

echo '<p>Variável inexistente</p>';
// $variavelInexistente = 'Valor existente';
echo $variavelInexistente."<br>";
$valor = $variavelInexistente ?? 'Valor default';
echo $valor."<br>";
?>