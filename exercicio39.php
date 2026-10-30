<?php
function contagemRegressiva(int $numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "\n";
    }
}
contagemRegressiva(15);
?>