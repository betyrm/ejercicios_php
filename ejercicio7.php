<?php 
//  obtener el factorial de un número
$numero = readline("Ingrese un número: ").PHP_EOL;
$factorial = 1; 
for ($i = 1; $i <= $numero; $i++){ 
      $factorial = $factorial * $i; 
} 

echo "Factorial de $numero es $factorial";
?> 