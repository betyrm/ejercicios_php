<?php
/*imprimir del 1 al 100, pero múltiplos de 3 "hola", 
múltiplos de 5 "Mundo"
y múltiplos de ambos "Hola Mundo"*/
for($i=1;$i<=100;$i++){
   if(($i % 3 === 0)&&($i % 5 === 0)){
     echo("Hola Mundo <br>");
   }elseif ($i % 3 === 0) {
    echo("Hola <br>");
   } elseif ($i % 5 === 0) {
    echo("Mundo <br>");
   }else {
    echo($i)."<br>";
   }
}

?>