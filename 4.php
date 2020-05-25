<?php

  function soma($num1, $num2) {
    return $num1 + $num2;
  }

  function subtracao($num1, $num2) {
    return $num1 - $num2;
  }

  function multiplicacao($num1, $num2) {
    return $num1 * $num2;
  }

  function divisao($num1, $num2) {
    return $num1 / $num2;
  }

  $num1 = 10;
  $num2 = 10;

  $operacao = 'multiplicacao';

  if ($operacao == 'soma') {
    echo soma($num1, $num2);
  } elseif ($operacao == 'subtracao') {
    echo subtracao($num1, $num2);
  } elseif ($operacao == 'divisao') {
    echo divisao($num1, $num2);
  } elseif ($operacao == 'multiplicacao') {
    echo multiplicacao($num1, $num2);
  } else {
    echo "operação não encontrada";
  }

