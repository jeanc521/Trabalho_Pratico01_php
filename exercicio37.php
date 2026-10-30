<?php
/*
Descritivo: 37: Cria uma função que organiza e exibe nome, idade e cidade usando um array associativo.
*/
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