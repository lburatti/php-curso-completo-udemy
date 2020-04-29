<div class="titulo">Integração CSS</div>

<h1 center>
<?php
    echo 'Olá ';
    echo 'Mundo!';
?>
</h1>
<?= "<div center cor>Outra forma de me 'expressar'!</div>" ?>
<br>
<div center><button dobro><?= "LEGAL ;)" ?></button></div>

<style>
    button {
        padding: 5px <? 2 * 10 ?>px;
        background-color: #925363bb;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }
    /* seletor de propriedade [], usado em tags HTML, exemplos acima */
    [center] {
        display: flex;
        justify-content: center;
    }

    [cor] {
        color: #925363bb;
    }

    [dobro] {
        font-size: <?= 10 - 8 ?>rem;
    }

</style>