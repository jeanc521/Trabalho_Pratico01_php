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
Descritivo: 36: Cria uma função que desenha uma linha horizontal com a quantidade de traços informada.
******************************************************************************
*/
?>
<?php
function desenharLinhas(int $quantidade){
    for($i = 0; $i < $quantidade; $i++){
        echo "-";
    }
}
desenharLinhas(20);

?>
