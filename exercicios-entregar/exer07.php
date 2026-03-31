<?php



function somaElementos($numeros){
    $soma = 0;

    for($i = 0; $i < count($numeros); $i++){
        $soma = $soma + $numeros[$i];
    }

    return $soma;
}

$valores = array(10, 20, 30, 40);

echo somaElementos($valores);


?>