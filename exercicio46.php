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
46.Função: Elabore uma função ehPrimo que receba um número
e retorne true se ele for primo e false caso contrário.
******************************************************************************
*/


// Retorna true se o número for primo.

// Cria uma função que recebe um número inteiro.
function ehPrimo($numero) {


    // Criamos a variável $divisores começando em zero.
    // Ela vai contar quantas vezes o número pode ser dividido
    // exatamente, ou seja, sem deixar resto.
    $divisores = 0;

    // Utilizamos o for para testar todos os possíveis divisores.
    // $i = 1 significa que começamos testando pelo número 1.
    // $i <= $numero significa que vamos até o número digitado.
    // $i++ aumenta o valor de $i em 1 a cada volta.
    for ($i = 1; $i <= $numero; $i++) {

        // O símbolo % calcula o resto de uma divisão.
        // Aqui verificamos se o número dividido por $i
        // deixa resto igual a zero.
        // Se o resto for zero, encontramos um divisor exato.
        if ($numero % $i == 0) {

            // Cada vez que encontramos um divisor exato,
            // aumentamos o contador $divisores em 1.
            $divisores++;
        }
    }

    // Um número primo possui exatamente dois divisores:
    // o número 1 e ele mesmo.
    // Por isso verificamos se encontramos dois divisores.
    if ($divisores == 2) {

        // Se encontramos exatamente dois divisores,
        // a função retorna true, indicando que é primo.
        return true;

    } else {

        // Se a quantidade de divisores for diferente de dois,
        // a função retorna false, indicando que não é primo.
        return false;
    }
}

// O readline pede ao usuário que digite um número.
// O (int) transforma a entrada em um número inteiro.
// O valor digitado fica armazenado na variável $numero.
$numero = (int) readline("Digite um número: ");

// Aqui chamamos a função ehPrimo e enviamos o número digitado.
// O if verifica o resultado retornado pela função.
// Se retornar true, significa que o número é primo.
if (ehPrimo($numero)) {

    echo "O número é primo.";

} else {

    // Se a função retornar false, o else será executado.
    echo "O número não é primo.";
}

?>