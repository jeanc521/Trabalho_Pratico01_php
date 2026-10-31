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
49.Função: Faça uma função gerarArrayPares que receba um número n
e retorne um array com todos os números pares de 0 até n.
******************************************************************************
*/

// Monta e retorna a lista de números pares.


// Cria uma função que recebe um número limite.
function gerarArrayPares($n) {

    // Cria um array vazio para guardar os números pares.
    $pares = [];

    // O contador começa em 0.
    // Continua enquanto for menor ou igual ao limite.
    // $i += 2 aumenta o contador de 2 em 2.
    for ($i = 0; $i <= $n; $i += 2) {

        // Adiciona o número par ao array.
        $pares[] = $i;
    }

    // Devolve o array com os números pares.
    return $pares;
}

// Solicita o número limite ao usuário.
$n = (int) readline("Digite o número limite: ");

// Chama a função e guarda o array retornado.
$pares = gerarArrayPares($n);

// implode transforma o array em um texto.
// A vírgula separa os números na tela.
echo "Números pares: " . implode(", ", $pares);

?>