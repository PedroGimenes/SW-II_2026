<?php
    $a = 10;
    $b = 5;

    $soma = $a + $b;

    echo "A soma de ". $a . " e ". $b ." é: " . $soma;
    echo "<br>";
    echo "A variável a é: ";
    var_dump($a);
    echo "<br>";
    echo "A variável b é: ";
    var_dump($b);
    echo "<hr>";

    if ($a == $b){
       echo "A variável A é igual a B";
    }else {
       echo "A variável A é diferente de B";
    }
    echo "<hr>";

    $n1 = 4; 
    $n2 = 5;
    $n3 = 6;

    $media = ($n1 + $n2 + $n3)/3;

    if ( $media > 5 ){
        echo "Aprovado com média = " . $media;
    }else{
        if ($media < 4){
            echo "Reprovado com média = " . $media;
        }else{
            echo "Recuperação com média = " . $media;
        }
    }

    echo "<hr>";

    $dia = 1;

    switch ($dia) {
        case 1:
            echo "DOMINGO";
            break;
        case 2:
            echo "SEGUNDA";
            break;
        case 3:
            echo "TERÇA";
            break;
        case 4:
            echo "QUARTA";
            break;
            
        default:
            echo "DIA INVALIDO";
            break;
    }

    echo "<hr>";

    for ($i=1; $i < 11; $i++) { 
        echo "$i - ";    
    }

    echo "<hr>";

    $a = 1;
    while ($a <= 10) {
        echo "$a - ";
        $a++;
    }

    echo "<hr>";

    $b = 1;
    do {
       echo "$b - ";
       $b++;
    } while ($b <= 10);

    echo "<hr>";

    $nomes = ['Fulano', 'Ciclano', "Beltrano"];
    //echo "$nomes";

    foreach ($nomes as $nome) {
        echo "O nome é: $nome <br>";
    }
?>