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
Descritivo: 26. Array/Funções Nativas: Dado o array [10, 2, 5, 8, 1], ordene-o em ordem crescente usando sort().
******************************************************************************
*/

// Descrição: Ordena o array em ordem crescente com a função sort().
$numeros = [10, 2, 5, 8, 1];
sort($numeros);

foreach ($numeros as $num) {
    echo "$num ";
}
?>