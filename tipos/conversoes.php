<div class="titulo">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);
echo '<br>';

// int para float
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);
echo '<br>';

echo '<hr>';
// float para int
var_dump("3" + 2);
echo '<br>';
echo is_string("3". 2);
echo '<br>';
// var_dump(1 + "cinco"); // ERRO
// echo '<br>';
// var_dump(1 + "5 cinco"); // ERRO
// echo '<br>';
// var_dump(1 + "cinco 5"); // ERRO
// echo '<br>';
// var_dump(1 + "2+5"); // ERRO
// echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump((int) "10.5");