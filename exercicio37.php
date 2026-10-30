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
Data: 30 de Outubro de 2026
Descritivo: 37: Cria uma função que organiza e exibe nome, idade e cidade usando um array associativo.
******************************************************************************
*/
?>
<?
function organizarDados(string $nome, int $idade, string $cidade) {
    $dados = array(
        'nome' => $nome,
        'idade' => $idade,
        'cidade' => $cidade
    );
    echo "Nome: " . $dados['nome'] . "\n";
    echo "Idade: " . $dados['idade'] . "\n";
    echo "Cidade: " . $dados['cidade'] . "\n";
}
organizarDados("João", 25, "São Paulo");
?>
