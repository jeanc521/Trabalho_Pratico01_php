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
Descritivo: 38: Cria uma função que calcula a média de duas notas e informa se o aluno foi aprovado ou reprovado.
******************************************************************************
*/
?>
<?php
function calcularNotaMedia(float $nota1, float $nota2){
    $media = ($nota1 + $nota2) / 2;
  if($media >= 7){
    echo "Aprovado com média: " . $media;
  }elseif($media < 7){
    echo "Reprovado com média: " . $media;
  }
}
calcularNotaMedia(8.5, 5.0);

?>
