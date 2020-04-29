<div class="titulo">Operações Aritiméticas</div>

<?php

echo 1 + 1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; // deixa somente o primeiro numero inteiro
echo round(7 / 4), '<br>'; // para arredondar
echo 7 % 4, '<br>'; // resto da divisão
echo 7 % 2, '<br>';
echo 8 % 2, '<br>';
// echo 7 / 0, '<br>'; ERRO
echo 4 ** 2, '<br>'; // potência (= 4^2)

// Precedência de operadores: (), **, /, *, %, +, -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';