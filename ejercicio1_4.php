<?php
/* ejercicio 1 -Imprime números del 1 al 10*/
echo("Números del 1 al 10: ").PHP_EOL;
for($i=0;$i<=10;$i++){
    
    echo($i).PHP_EOL;

}
/*--------------------------------------*/
/*ejercicio2- numeros pares de 1 al 20*/
echo("Números pares del 1 al 20:").PHP_EOL;
for($i=0;$i<=20;$i++){
    if($i%2==0){
        echo($i).PHP_EOL;
    }
}
/*--------------------------------------*/
/*ejercicio3- tabla de multiplicar del 5*/
echo("TABLA DE MULTIPLICAR DEL 5").PHP_EOL;
for($i=0;$i<=10;$i++){
    echo($i*5).PHP_EOL;
}
/*--------------------------------------*/
/*ejercicio4- calcular e imprimir la suma de los primeros 10 numeros naturales*/

$contador = 0;
for($i=0;$i<=10;$i++){
        $contador = $contador + $i;
}
echo("SUMA DE LOS PRIMEROS 10 NÚMEROS NATURALES ES: "),$contador.PHP_EOL;
?>
