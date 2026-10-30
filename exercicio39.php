<?php
/*
Descritivo: 39: Cria uma função que realiza uma contagem regressiva a partir do número informado até zero.
*/
function contagemRegressiva(int $numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "\n";
    }
}
contagemRegressiva(15);
?>