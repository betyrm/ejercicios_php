<?php

function esPrimo($numero){
    for($i = 2; $i < $numero;$i++){
        if (($numero % $i)==0){
            return false;
        }
    }
    return true;
}

echo "Números Primos: ".PHP_EOL;

for($i=1;$i<=10;$i++){
    if(esPrimo($i)){
        echo $i;
    }
}

?>