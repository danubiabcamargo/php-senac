<?php
    /// STRINGS

    ///Para unir duas ou mais strings em PHP, usamos o operador de concatenação.
    $nome = "Danubia";
    $sobrenome = "Camargo";
    echo $nome. " ". $sobrenome; //Saída: Danubia Camargo
    echo "<br>";

    // Para obter o comprimento de uma string em PHP, usamos a função strlen()
    $texto = "Olá, mundo!";
    echo strlen($texto);
    echo "<br>";

    // Para substituir partes de uma string, usamos a função str_replace()
    $texto = "O rato roeu a roupa do rei.";
    $novo_texto = str_replace("rato","gato",$texto);
    echo $novo_texto; // Saída: o gato roeu a roupa do rei.
    echo "<br>";
    echo "<br>";

    //strtolower(): Converte uma string para letras minúsculas
    //strtoupper(): Converte uma string para letras maiúsculas
    $texto = "Olá, mundo!";
    $texto_minusculo = strtolower($texto);
    $texto_maiusculo = strtoupper($texto);

    echo $texto_maiusculo;
    echo "<br>";
    echo $texto_minusculo;
    echo "<br>";
    echo $texto;
    echo "<br>";
    echo "<br>";

    //trim(): Remove espaços em branco no inicio e no final de uma string.
    $texto = "Olá, mundo!     ";
    $texto_sem_espacos = trim($texto);
    echo $texto_sem_espacos;
    echo "<br>";

    // strpos(): Encontra a posição da primeira ocorrência de uma sbustring em uma string
    $texto = "O rato roeu a roupa do rei";
    $posicao = strpos($texto, "rato");
    echo $posicao;  // Saída: 2 (posição da primeira letra da palavra "rato")
    echo "<br>";
    echo "<br>";

    // strrev(): Inverte uma string
    $texto = "scorram-se subi no onibus em Marrocos";
    $texto_invertido = strrev($texto);
    echo $texto_invertido; // Saída: socorraM me subino on ibus es-marrocs




?>