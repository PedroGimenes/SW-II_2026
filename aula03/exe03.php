<?php
    //Função sem Parâmetros e sem Retorno
    function calcula_quandrado($a){
       $x = $a * $a;

       echo "$x <br>";
    }

    calcula_quandrado(4);
    calcula_quandrado(3);
    calcula_quandrado(5);
      
    echo "<hr>";

    function soma($x,$y){
       $soma = $x + $y;

       echo "A soma é: $soma <br>";
    }


    //Recebendo valor do formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    soma($num1,$num2);
    soma(3,4);
    soma(5,3);

?>