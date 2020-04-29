<div class="titulo">Array</div>

<?php 

    $lista = array(1, 2, 3.4, "texto");
    // echo $lista; // erro
    echo '<br>';
    var_dump($lista);
    echo '<br>';
    print_r($lista);
    echo '<br>';

    $lista[0] = 1234;
    print_r($lista);
    echo '<br>';

    echo $lista[0].'<br>';
    echo $lista[1].'<br>';
    echo $lista[2].'<br>';
    echo $lista[3].'<br>';

    // var_dump($lista[4]); // erro, não tem posição 4
    echo '<br>';

    $texto = 'Esse é um texto de teste';
    echo $texto[0].'<br>';
    echo $texto[2].'<br>';
    echo $texto[11].'<br>'; // cuidado com acentos, contam como 1 posição
    echo mb_substr($texto, 10, 1).'<br>'; // mb_substr(string, posição de inicio, posição buscada)

