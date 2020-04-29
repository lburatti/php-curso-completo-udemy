<div class="titulo">Desafio Meses</div>

<?php

    echo '<p>usando a posição escolhida -1 (Maio=5, portando [5 - 1])</p>';
    $meses = array(
        "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    );

    print_r($meses);
    echo '<br>Maio, usando 5 - 1: ';
    echo $meses[5 - 1];
    echo '<br>Dezembro, usando 12 - 1: ';
    echo $meses[12 - 1];

    echo '<hr>';

    echo '<p>deslocando a posição 0, para posição 1 ( [1] => Janeiro )</p>';
    $meses = array(
        1 => "Janeiro",
        "Fevereiro",
        "Março",
        "Abril",
        "Maio",
        "Junho",
        "Julho",
        "Agosto",
        "Setembro",
        "Outubro",
        "Novembro",
        "Dezembro"
    );

    print_r($meses);
    echo '<br>Maio, usando 5: ';
    echo $meses[5];
    echo '<br>Dezembro, usando 12: ';
    echo $meses[12];
