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
43.Função: Elabore uma função converter Para Maiusculas que
receba uma string e a retorne em letras maiúsculas.
******************************************************************************
*/

// Retorna o texto com letras maiúsculas.

// Cria uma função que recebe um texto.
function converterParaMaiusculas($texto) {

    // mb_strtoupper transforma as letras em maiúsculas.
    // UTF-8 permite trabalhar corretamente com caracteres acentuados.
    // return devolve o texto convertido.
    return mb_strtoupper($texto, "UTF-8");
}

// Solicita uma palavra ou frase ao usuário.
$texto = readline("Digite uma palavra ou frase: ");

// Chama a função e mostra o texto convertido.
echo converterParaMaiusculas($texto);

?>