<?php

function numeroParaTexto($n): string
{
  $multiplo_3 = $n % 3 == 0;
  $multiplo_5 = $n % 5 == 0;

  $string = [];

  if ($multiplo_3 && $multiplo_5) {
    $string = "ploc";
  } elseif ($multiplo_3) {
    $string = "ping";
  } elseif ($multiplo_5) {
    $string = "pong";
  } else {
    $string = "ok";
  }

  return $string;
}
