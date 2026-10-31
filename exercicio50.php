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
50.Função: Crie uma função inverterString que receba uma string e
a retorne invertida, sem usar a função strrev().
******************************************************************************
*/

// Monta o texto começando pela última letra.

// Cria uma função que recebe um texto.
function inverterString($texto) {

    // preg_split separa o texto em caracteres.
    // O modificador u permite trabalhar com UTF-8.
    // PREG_SPLIT_NO_EMPTY evita elementos vazios.
    // Os caracteres são armazenados em um array.
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);

    // Cria uma variável vazia para guardar o texto invertido.
    $invertido = "";

    // count conta a quantidade de caracteres.
    // O -1 encontra a posição do último caractere.
    // $i >= 0 faz o contador continuar até a primeira posição.
    // $i-- diminui o contador em 1 a cada repetição.
    for ($i = count($caracteres) - 1; $i >= 0; $i--) {

        // .= adiciona o caractere ao texto invertido.
        // $caracteres[$i] acessa o caractere da posição atual.
        $invertido .= $caracteres[$i];
    }

    // Devolve o texto invertido.
    return $invertido;
}

// Solicita uma palavra ou frase ao usuário.
$texto = readline("Digite uma palavra ou frase: ");

// Chama a função e mostra o texto invertido.
echo "Texto invertido: " . inverterString($texto);

?>