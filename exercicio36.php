<?php 
function desenharLinhas(int $quantidade){
    for($i = 0; $i < $quantidade; $i++){
        echo "-";
    }
}
desenharLinhas(20);

?>