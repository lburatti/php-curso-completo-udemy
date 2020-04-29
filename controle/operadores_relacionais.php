<div class="titulo">Operadores Relacionais</div>

<?php

    var_dump(1 == 1); // true
    echo '<br>';
    var_dump(1 > 1); // false
    echo '<br>';
    var_dump(1 >= 1); // true
    echo '<br>';
    var_dump(4 < 23); // true
    echo '<br>';
    var_dump(1 <= 7); // true
    echo '<br>';
    var_dump(1 != 1); // false
    echo '<br>';
    var_dump(1 <> 1); // false
    echo '<br>';

    echo '<hr>';

    var_dump(111 == '111'); // true (compara valor)
    echo '<br>';
    var_dump(111 === '111'); // false (compara valor e tipo)
    echo '<br>';
    var_dump(111 != '111'); // false (compara valor)
    echo '<br>';
    var_dump(111 !== '111'); // true (compara valor e tipo)
    echo '<br>';

    echo '<hr>';

    echo "<p>Relacionais no If/Else:</p>";
    $idade = 15;
    if($idade < 18) {
        echo "Menor de idade: $idade anos<br>";
    } elseif($idade <= 65) {
        echo "Adulto: $idade anos<br>";
    } else {
        echo "Terceira idade: $idade anos<br>";
    }

    echo '<hr>';

    echo "<p>Spaceship:</p>";
    // O operador <=> é utilizado para fazer comparações combinadas.
    // Retorna 0 se os valores de ambos os lados são iguais.
    // Retorna 1 se o valor à esquerda é maior.
    // Retorna -1 se o valor à direita é maior.
    var_dump(500 <=> 3); // 1
    echo '<br>';
    var_dump(50 <=> 50); // 0
    echo '<br>';
    var_dump(5 <=> 50); // -1
    echo '<br>';

    echo '<hr>';

    echo "<p>Valores que podem ser V ou F:</p>";
    var_dump(!!5); // V
    echo '<br>';
    var_dump(!!0); // F
    echo '<br>';
    var_dump(!!""); // F
    echo '<br>';
    var_dump(!!" "); // V
    echo '<br>';
?>