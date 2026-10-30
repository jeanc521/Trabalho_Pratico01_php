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
Descritivo: 39: Cria uma função que realiza uma contagem regressiva a partir do número informado até zero.
******************************************************************************
*/
?>
<?
function contagemRegressiva(int $numero) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "\n";
    }
}
contagemRegressiva(15);
?>
