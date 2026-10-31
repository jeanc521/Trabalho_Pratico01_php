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
45.Função com Array: Crie uma função obter o Primeiro Elemento 
que receba um array e retorne seu primeiro elemento.
******************************************************************************
*/

// Retorna o primeiro elemento da lista.

// Cria uma função que recebe um array.
function obterPrimeiroElemento($array) {

    // A posição 0 representa o primeiro elemento do array.
    return $array[0];
}

// Cria um array vazio para guardar os elementos.
$array = [];

// Pergunta quantos elementos o usuário quer digitar
$quantidade = (int) readline("Quantos elementos deseja digitar? ");

{
    echo "Digite pelo menos 1 elemento.\n"; 
}

// O for repete a leitura conforme a quantidade informada.
// $i = 0 inicia o contador.
// $i < $quantidade mantém a repetição.
// $i++ aumenta o contador em 1 até chegar na quantidade informada//
for ($i = 0; $i < $quantidade; $i++) {

    // Adiciona ao array o elemento digitado pelo usuário.
    $array[] = readline("Digite o elemento: ");
}

// Chama a função e mostra o primeiro elemento.
echo "Primeiro elemento: " . obterPrimeiroElemento($array);

?>
