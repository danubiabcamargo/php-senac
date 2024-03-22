<?php
/*  Exercício 1 - Concatenação de Strings:
    Crie duas variáveis contendo o nome e a profissão de uma pessoa. Em seguida, concatene as duas variáveis para formar uma frase que descreva a pessoa. Por exemplo, se o nome for "Ana" e a profissão for "engenheira", a frase resultante será "Ana é engenheira".*/

    $nome = "Pedro";
    $profissao = "Medico";
    echo $nome. " ". "é"." " . $profissao;
    echo "<br>";
    echo "<br>";

/*
    Exercício 2 - Comprimento de uma String:
    Crie uma variável contendo uma senha. Em seguida, verifique se a senha tem pelo menos 8 caracteres de comprimento. Se tiver, exiba uma mensagem indicando que a senha é válida; caso contrário, exiba uma mensagem de erro.*/

    //$senha = "senha123";
    //if( $senha => "senha123"
    
    
    //)



/*  Exercício 3 - Substituição de Caracteres:
    Crie uma variável contendo uma frase. Substitua todas as ocorrências da palavra "cachorro" por "gato" na frase e exiba o resultado.
    */

    $frase = "Os cachorros adoram correr atrás do motoboy, gato não liga para ninguém.";
    $nova_frase = str_replace("cachorro","gato", $frase);
    echo $nova_frase;
    echo "<br>";
    echo "<br>";



/*  Exercício 4 - Conversão de Case:
    Crie uma variável contendo uma palavra. Converta a palavra para letras minúsculas e depois para letras maiúsculas. Exiba ambas as versões da palavra.*/

    $palavra = "senac lapa tito";
    $palavra_minusculo = strtolower($palavra);
    $palavra_maiusculo = strtoupper($palavra);

    echo $palavra_maiusculo;
    echo "<br>";
    echo $palavra_minusculo;
    echo "<br>";
    echo "<br>";

/*  Exercício 5 - Remoção de Espaços em Branco:
    Crie uma variável contendo uma URL. Remova todos os espaços em branco no início e no final da URL e exiba o resultado.*/




/*  Exercício 6 - Posição da Primeira Ocorrência:
    Crie uma variável contendo uma lista de compras. Use a função strpos() para encontrar a posição da primeira ocorrência do item "leite" na lista de compras e exiba a posição encontrada.*/
    $compra = "arroz leite acucar farinha achocolatado"; #errado arrumar
    $posicao_compra = strpos ($compra, "leite");
    echo $posicao_compra;





/*  Exercício 7 - Inversão de uma String:
    Crie uma variável contendo uma palavra. Inverta a palavra e exiba o resultado.*/



?>