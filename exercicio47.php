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
47.Função com String: Crie uma função contar Vogais que
receba uma string e retorne o número de vogais
******************************************************************************
*/

// Conta quantas vogais aparecem no texto.


function contarVogais($texto) {

    // preg_match_all procura as vogais dentro do texto.
    // Os colchetes indicam os caracteres que serão procurados.
    // A letra i ignora diferenças entre maiúsculas e minúsculas.
    // A letra u permite trabalhar com caracteres UTF-8.
    // $vogais guarda as correspondências encontradas.
    preg_match_all('/[aeiouáéíóúâêôãõà]/iu', $texto, $vogais);

    // count conta quantos elementos foram encontrados.
    // $vogais[0] contém todas as vogais encontradas.
    // return devolve a quantidade.
    return count($vogais[0]);
}

// Solicita uma palavra ou frase ao usuário.
$texto = readline("Digite uma palavra ou frase: ");

// Chama a função e mostra a quantidade de vogais.
echo "Quantidade de vogais: " . contarVogais($texto);

?>