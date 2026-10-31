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
Descritivo: 27. Array Associativo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a média.
******************************************************************************
*/

// Descrição: Calcula e exibe a média das notas armazenadas em um array associativo.
$notas = [
    "Matemática" => 8.5,
    "Português" => 7.0,
    "História" => 9.0,
    "Ciências" => 8.0
];

$media = array_sum($notas) / count($notas);
echo "A média das notas é: " . number_format($media, 2, ',', '.');
?>