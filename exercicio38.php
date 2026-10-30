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