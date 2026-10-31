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
Data: 1 de novembro de 2026
41.Função: Crie uma função chamada somar, 
que receba dois números e retorne a soma deles.
******************************************************************************
*/

// Retorna a soma dos números recebidos.

function somar($num1, $num2) {
    return $num1 + $num2;
}

// Pede ao usuário que digite os números.
// O float permite trabalhar com números decimais.
$num1 = (float) readline("Digite o primeiro número: "); 
$num2 = (float) readline("Digite o segundo número: ");

echo "O Resultado da soma é: " . somar($num1, $num2);

?>



