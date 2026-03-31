<?php

function somaArray($numeros){


    $soma = 0;
    
    for($i = 0; $i < count($numeros); $i++){
        $soma = $soma + $numeros[$i];
    }
    
    return $soma;
}

$array = array(1, 2, 3, 4, 5);
echo somaArray($array);




?>