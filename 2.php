<?php
  $num = 2;

  $enq = true;
  $cont = 0;

  while($enq == true) {
    $result = $num * $cont;

    echo $result;
    echo "\n";
    $cont++;

    if ($cont == 11) {
      return $enq = false;
    }
  }