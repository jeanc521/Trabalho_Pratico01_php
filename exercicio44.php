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
44.Função: Escreva uma função calcular Area Retangulo que
receba a largura e a altura e retorne a área
******************************************************************************
*/

// Multiplica a largura pela altura.

// Cria uma função que recebe largura e altura.
function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

// Solicita a largura do retângulo.
$largura = (float) readline("Digite a largura: ");

// Solicita a altura do retângulo.
$altura = (float) readline("Digite a altura: ");

// Chama a função e mostra a área calculada.
echo "Área do retângulo: " .
    calcularAreaRetangulo($largura, $altura);
