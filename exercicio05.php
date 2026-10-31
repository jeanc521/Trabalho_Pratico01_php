<?php
/*
***************************
Curso: Tecnologia em Analise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Tecnicas de Programacao
Professor: Flores
Turma: ADS2A
Componentes:
 26013478-2 - Davi Ferreira da Costa
 26008617-2 - Fernando Cesar Cravo
 26008668-2 - Gabriel Eduardo Consorte
 26010149-2 - Jean Carlos 
 26007982-2 - Joao Gabriel Subtil 
Data: 19 de Setembro de 2026
Descritivo: 5.FOR: Calcular e imprimir a soma dos numeros de 1 a 100.
**************************
*/
$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}
echo "<h3>Soma dos numeros de 1 a 100</h3>";
echo "Resultado = " . $soma;
?>
