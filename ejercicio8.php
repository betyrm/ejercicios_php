<?php
//Imprimir los primeros 10 números primos*/
echo "Números Primos: ".PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
    
    $primo = ($i%2 !=0 || $i==2);
    $numero = 3;
  
  while ($primo && $numero<$i/2) {
      $primo=($i%$numero)!=0;
      $numero=$numero+2;
    }
    if($primo){
      echo "$i";
    }

  }
  

?>