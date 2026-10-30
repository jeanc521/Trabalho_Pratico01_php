<?php
/*
*****************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ADS2A
Componentes:
 26013478-2 - Davi Ferreira da Costa
 26008617-2 - Fernando Cesar Cravo
 26008668-2 - Gabriel Eduardo Consorte
 26010149-2 - Jean Carlos 
 26007982-2 - João Gabriel Subtil 
Data: 30 de Outubro de 2026
Descritivo: 40: Cria uma função que armazena e exibe a marca, o modelo e o ano de um carro em um array associativo.
******************************************************************************
*/
?>
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
