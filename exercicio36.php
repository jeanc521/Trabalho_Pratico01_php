<?php
/*
Descritivo: 36: Cria uma função que desenha uma linha horizontal com a quantidade de traços informada.
*/
function desenharLinhas(int $quantidade){
    for($i = 0; $i < $quantidade; $i++){
        echo "-";
    }
}
desenharLinhas(20);

?>