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
Data: 19 de Setembro de 2026
Descritivo: 24. FOREACH Aninhado: Usando o array de produtos do exercício 23, imprima o nome e o preço de cada produto.
******************************************************************************
*/

// Descrição: Usa foreach aninhado para exibir o nome e o preço de cada produto.
$produtos = [
    ["nome" => "Caderno", "preço" => 15.50],
    ["nome" => "Caneta", "preço" => 2.50],
    ["nome" => "Mochila", "preço" => 120.00]
];

foreach ($produtos as $produto) {
    foreach ($produto as $chave => $valor) {
        echo ucfirst($chave) . ": $valor<br>";
    }
    echo "<hr>";
}
?>