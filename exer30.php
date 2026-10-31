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
Descritivo: 30. Array Multidimensional: Crie uma matriz 3x3 (array de arrays) e preencha-a com números. Imprima o elemento da segunda linha e terceira coluna.
******************************************************************************
*/

// Descrição: Cria uma matriz 3x3 e exibe o elemento da segunda linha e terceira coluna.
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$elemento = $matriz[1][2];
echo "O elemento da 2ª linha e 3ª coluna é: $elemento";
?>