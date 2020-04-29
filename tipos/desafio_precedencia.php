<div class="titulo">Desafio Precedência</div>

<?php

echo '<p>1. Qual valor será impresso?</p>';
echo "2 + 5 * 3 + (12/6) / (-8 + 2 ** 3) <br>";
echo "O resultado é um ERRO <br> Trecho 1: 2 + 5 * 3 + (12/6) = 19 <br> Trecho 2: (-8 + 2 ** 3) = 0";

echo "<hr>";

echo '<p>2. Qual expressão imprime o valor 100?</p>';
echo 'a) ', (1 + 2) * 20 - 15,' - O resultado imprime: 45<br>';
echo 'b) ', 4 * 5 ** 2,' - O resultado imprime: 100<br>';
echo 'a) ', 2 ** 3 ** 4 / 1e25,' - O resultado imprime: 0,24<br>';
echo 'a) ', 3 + (3 * 8) / 2 - 3,' - O resultado imprime: 12<br>';