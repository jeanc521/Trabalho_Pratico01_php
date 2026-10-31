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
Descritivo: 28. Array/Busca: Crie um array de frutas. Escreva um código que verifique se a fruta "Maçã" existe no array.
******************************************************************************
*/

// Descrição: Verifica se a fruta "Maçã" existe no array usando in_array().
$frutas = ["Banana", "Uva", "Maçã", "Laranja"];

if (in_array("Maçã", $frutas)) {
    echo "A fruta Maçã existe no array!";
} else {
    echo "A fruta Maçã não foi encontrada.";
}
?>