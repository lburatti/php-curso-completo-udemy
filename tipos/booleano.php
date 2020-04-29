<div class="titulo">Tipo Booleano</div>

<?php
echo true;
echo '<br>';
var_dump(true);
echo '<br>';
echo false;
echo '<br>';
var_dump(false);
echo '<br>';
echo is_bool(true);
echo '<br>';

// fazer as regras de conversão:
echo '<p>Regras:</p>';
var_dump((bool) 0); // false
echo '<br>';
var_dump((bool) 20); // true
echo '<br>';
var_dump((bool) -1); // true
echo '<br>';
var_dump((bool) 0.0); // false
echo '<br>';
var_dump((bool) 0.00000001); // true
echo '<br>';
var_dump((bool) ""); // false
echo '<br>';
var_dump((bool) "0"); // false
echo '<br>';
var_dump((bool) "00"); // true
echo '<br>';
var_dump((bool) "false"); // true
echo '<br>';