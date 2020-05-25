<?php

$notas = [8, 7, 8];
$soma = 0;

for ($cont = 0; $cont < 3; $cont++) {
  $soma += $notas[$cont];
}

$resultado = $soma / 3;

if ($resultado >= 5) {
  echo "Aprovado, média $resultado \n";
} else {
  echo "Reprovado, média $resultado";
}