<div class="titulo">Desafio String</div>

<?php

// Enunciado:
// Avaliando os métodos da documentação da string, qual o método que encontra a posição do texto 'abc' na string '!AbcaBcabc' retorne 17?

echo strpos('!AbcaBcabc', 'abc'), '<br>';
echo stripos('!AbcaBcabc', 'abc'), '<br>';

echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC')), '<br>';