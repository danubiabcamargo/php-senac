<?php
    #Verificação de tipos de dados e palavras reservadas

    /*Verificação de Tipo de Dados*/
    $numero = 10;
    $string = "Olá, mundo!";
    $booleano = true;
    $array = [1, 2, 3];

    echo 'Tipo de dado da variável $numero : ' . gettype($numero) . "<br>";
    echo 'Tipo de dado da variável $string: ' . gettype($string) . "<br>";
    echo 'Tipo de dado da variável $booleano: ' . gettype($booleano) . "<br>";
    echo 'Tipo de dado da variável $array: ' . gettype($array) . "<br>";

    /* Verificação de Tipo de Dados com Funções */
    echo 'Verificação se $numero é do tipo int : ' . (is_int($numero)? "Sim" : "Não") . "<br>";
    echo 'Verificação se $string é do tipo string: ' . (is_string($string)? "Sim" : "Não") . "<br>";
    echo 'Verificação se $booleano é do tipo boolean: ' . (is_bool($booleano)? "Sim" : "Não") . "<br>";
    echo 'Verificação se $array é do tipo array: ' . (is_array($array)? "Sim" : "Não") . "<br>";





?>