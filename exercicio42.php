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
42.Função: Crie uma função maior Numero que receba
dois números e retorne o maior entre eles.
******************************************************************************
*/

// Compara os números e retorna o maior.


function maiorNumero($num1, $num2) {
    if ($num1 > $num2) {
        return $num1;
    } else {
        return $num2;
    }
}

$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");

echo "O maior número é: " . maiorNumero($num1, $num2);
// Chama a função e mostra o maior número.
?>