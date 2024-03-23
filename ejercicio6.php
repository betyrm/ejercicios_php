<?php
/*imprimir la suma de los digitos de un numero */

$num = readline("Ingrese un número entero: ").PHP_EOL;
  while ($num > 0) {
    $digito = $num % 10;
    $suma += $digito;
    $num = $num / 10;
  }
echo "La suma total del número es: ", $suma;
?>