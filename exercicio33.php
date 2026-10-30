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
Descritivo: 31: Escreva um programa que leia três números e os exiba na tela em ordem crescente e,
posteriormente, em ordem decrescente
******************************************************************************
*/
?>

<?php
function tabuada($numero){
    for($i = 1; $i <= 10; $i++){
        echo "$numero x $i = " . ($numero * $i) . "\n";
    }
}
tabuada(7);
?>