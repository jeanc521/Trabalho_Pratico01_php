<?php
/*
Descritivo: 35: Cria uma função que percorre um array e exibe todos os seus elementos.
*/
function imprimirArray($imprimir){
   for($i = 0; $i < count($imprimir); $i++){
       echo $imprimir[$i] . "\n";
    
   }
    
}
imprimirArray([1, 2, 3, 4, 5]);


?>