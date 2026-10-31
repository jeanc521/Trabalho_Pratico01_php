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
Descritivo: 22. Array Associativo/FOREACH: Usando o array do exercício 21, imprima cada dado no formato "chave: valor".
******************************************************************************
*/

// Descrição: Imprime cada chave e valor do array utilizando foreach.
$aluno = [
    "nome" => "Carlos Silva",
    "idade" => 17,
    "curso" => "Desenvolvimento de Sistemas"
];

foreach ($aluno as $chave => $valor) {
    echo "$chave: $valor<br>";
}
?>