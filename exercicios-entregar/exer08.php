<?php



function gerarArray(){
    
    $numeros = array();

    for($i = 0; $i < 10; $i++){
        $numeros[$i] = rand(1, 100);
    }

    return $numeros;
}


$resultado = gerarArray();






for($i = 0; $i < count($resultado); $i++){
    echo $resultado[$i] . "<br>";
}


?>  