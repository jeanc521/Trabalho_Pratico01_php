<?php

/*
***************************
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
Data: 01 de Novembro de 2026
Descritivo: Encontrar e imprimir todos os números primos entre 1 e 50.
******************************************************************************/

echo "<h3>Números primos entre 1 e 50:</h3>";

for ($numero = 2; $numero <= 50; $numero++) {
    $primo = true;

    for ($divisor = 2; $divisor < $numero; $divisor++) {
        if ($numero % $divisor == 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo $numero . "<br>";
    }
}

?>
