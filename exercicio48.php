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
48.Função: Escreva uma função fatorial que
receba um número e retorne seu fatoria
******************************************************************************
*/

// Multiplica os números até chegar ao valor informado.


// Cria uma função que recebe um número.
function fatorial($numero) {

    // Começa o resultado em 1.
    // Isso permite realizar as multiplicações corretamente.
    $resultado = 1;

    // O for começa em 1 e vai até o número informado.
    // $i++ aumenta o contador em 1 a cada repetição.
    for ($i = 1; $i <= $numero; $i++) {

        // *= multiplica o resultado pelo contador.
        // É o mesmo que: $resultado = $resultado * $i;
        $resultado *= $i;
    }

    // Devolve o resultado final do fatorial.
    return $resultado;
}

// Solicita um número inteiro ao usuário.
$numero = (int) readline("Digite um número inteiro não negativo: ");

// Verifica se o número é negativo.
// Se for, pede outro número.
while ($numero < 0) {

    echo "O número não pode ser negativo.\n";

    $numero = (int) readline("Digite um número inteiro não negativo: ");
}

// Chama a função e mostra o fatorial calculado.
echo "Fatorial: " . fatorial($numero);

?>