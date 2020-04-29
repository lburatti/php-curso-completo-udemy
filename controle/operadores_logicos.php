<div class="titulo">Operadores Lógicos</div>

<?php
    echo "<p>Negação Lógica:</p>";
    var_dump(true);
    echo '<br>';
    var_dump(!true); // ! (negação), portando = false
    echo '<br>';

    echo '<hr>';

    echo "<p>Tabela Verdade 'AND ou &&':</p>";
    var_dump(true && true); // true 
    var_dump(true AND true); // true
    echo '<br>';
    var_dump(true && false); // false
    var_dump(true AND false); // false
    echo '<br>';
    var_dump(false && true); // false
    var_dump(false AND true); // false
    echo '<br>';
    var_dump(false && false); // false
    var_dump(false AND false); // false
    echo '<br>';

    echo '<hr>';

    echo "<p>Tabela Verdade 'OR ou ||':</p>";
    var_dump(true || true); // true 
    var_dump(true OR true); // true
    echo '<br>';
    var_dump(true || false); // true
    var_dump(true OR false); // true
    echo '<br>';
    var_dump(false || true); // true
    var_dump(false OR true); // true
    echo '<br>';
    var_dump(false || false); // false
    var_dump(false OR false); // false
    echo '<br>';

    echo '<hr>';

    echo "<p>Tabela Verdade 'XOR ou !=' (OU exclusivo):</p>";
    var_dump(true XOR true); // false 
    var_dump(true != true); // false
    echo '<br>';
    var_dump(true XOR false); // true
    var_dump(true != false); // true
    echo '<br>';
    var_dump(false XOR true); // true
    var_dump(false != true); // true
    echo '<br>';
    var_dump(false XOR false); // false
    var_dump(false != false); // false
    echo '<br>';

    echo '<hr>';

    echo "<p>Exemplo:</p>";
    $idade = 65;
    $sexo = 'M';

    $criterioM = ($idade >= 65 && $sexo = 'M');
    $criterioF = ($idade >= 60 && $sexo = 'F');

    $atingiuCriterio = $criterioM || $criterioF;

    if($criterioF) {
        echo "Pode se aposentar => $sexo";
    } elseif($criterioM) {
        echo "Pode se aposentar => $sexo";
    } else {
        echo "Vai ter que trabalhar mais um pouco...";
    }
?>