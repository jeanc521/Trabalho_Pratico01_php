<?php
function associativo(string $marca, string $modelo, int $ano) {
    $carro = [
        "marca" => $marca,
        "modelo" => $modelo,
        "ano" => $ano
    ];
    echo "Marca: " . $carro["marca"] . "\n";
    echo "Modelo: " . $carro["modelo"] . "\n";
    echo "Ano: " . $carro["ano"] . "\n";
}
associativo("Toyota", "Corolla", 2020);
?>