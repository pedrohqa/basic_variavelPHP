<?php
    //primeiro exercicio
    echo "<h3>Primeiro Exercicio</h3><br>";
    //variavel de tipo String
    $nome = "meu nome é Pedro";
    echo "$nome";
    echo "<br><br>";

    //variavel de tipo Inteiro
    $ano = 2023;
    echo "$ano";
    echo "<br><br>";

    //variavel de tipo Float
    $pi = 3.14159265;
    echo "$pi";
    echo "<br><br>";

    //variavel de tipo Booleano
    $sim = "true";
    echo "$sim";
    echo "<br><br>";

    //Exercic 2
    echo "<h3>Segundo Exercicio</h3>";
    echo "<br><br>";

    //variaveis
    $num = 23.8;

    //is_int() Verifica se o número é inteiro
    if(is_int($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_integer() Verifica se o número é inteiro
    if(is_integer($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_long() 
    if(is_long($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_float Verifica os numero que não é inteiro,ou seja, é quebrado
    if(is_float($num)){
        echo"$num nâo é Número Inteiro <br>";
    }
    else{
        echo "$num é Número Inteiro <br>";
    }

    //is_string()
    if(is_string($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_array()
    if(is_array($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_object()
    if(is_object($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }

    //is_real()
    if(is_real($num)){
        echo"$num é Número Inteiro <br>";
    }
    else{
        echo "$num nâo é Número Inteiro <br>";
    }
?>