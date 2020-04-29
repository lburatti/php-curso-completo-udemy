<div class="titulo">Mapa</div>

<?php

    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );
    print_r($dados);
    echo '<br>';
    // echo $dados[0]; // erro
    print_r($dados['idade']);
    echo '<br>';
    echo $dados['peso'];
    echo '<br>';

    // forma errada:
    $lista = array(
        "a",
        "cinco" => "b",
        "c",
        8 => "d",
        6 => "e"
    );
    print_r($lista);
    echo '<br>';

    $lista[] = "f";
    print_r($lista);
    echo '<br>';

    $lista["vinte"] = "g";
    print_r($lista);
    echo '<br>';

    