
<?php
//marca onde inicia e termina o php 
    echo "Hello World!" . "<br>";

    # Declaração de variáveis
     $nome = "Pedro";
     $sobrenome = "Fausta";
     $nome_completo = $nome. " ". $sobrenome;
// variavel é declaro direto e marcado com $//

    #echo $nome;
    #echo $sobrenome;
    echo $nome. " ". $sobrenome . "<br>";
    echo $nome_completo . "<br>" . "<br>" . "<br>";
    echo "$nome tem $idade anos de idade" . "<br>";

// variaveis numericas
    $idade = 25;
    $ano = 2024;

    echo  "Idade é: " . $idade . "<br>";
    echo  "Data de Nascimento: " . $ano . "<br>";

//Trabalhando com aspas simples e duplas
    echo 'Dom Pedro disse: "Independencia ou Morte!" <br>';

    echo "$nome tem $idade anos de idade <br>";
    echo '$nome tem $idade anos de idade <br>';
    
//Testando o case sensitive - palavras reservadas
    echo "Texto 1 <br>";
    ECHO "Texto 2 <br>";
    
//Testando o case sensitive - variáveis
    $primeiroNome = "Carlos";
    
    echo $primeiroNome;
    ECHO $PRIMEIRONOME;




?>