<?php
    # FLOATS E BOOLEANOS

    // Números Decimais (Floats)
    $altura = 1.75;
    $peso = 75.4;
    echo "Altura: $altura metros - Peso $peso quilogramas <br>";

    // Operações com Floats
    $preco_produto = 19.99;
    $quantidade = 3;

    $total = $preco_produto * $quantidade;
    echo "Total da compra de R$ $total Reais do produto que custa R$ $preco_produto ficou no Total R$ $total <br>";


    # Booleans
    $tem_idade = true;
    $tem_cartao = true;

    $pode_entrar = $tem_idade && $tem_cartao;
    echo "Pode entrar na festa: " .($pode_entrar ? "Sim <br>" : "Não <br>");

    //exercicio
    $tem_passaporte = false;
    $tem_visto = true;

    $pode_viajar =  $tem_passaporte || $tem_visto; //operador lógico OR
    echo "Pode viajar para exterior: ". ($pode_viajar? "Sim <br>" : "Não <br>");
    
    //exercicio
    $sem_carteira_motorista = true;
    $pode_dirigir = !$sem_carteira_motorista; //negação lógica (not)
    echo "NÃO tem carteira de motorista, pode dirigir? " . ($pode_dirigir? "Sim <br>" : "Não <br>");

    $eh_maior = 5 > 7; //atribuição lógica por comparação
    echo "5 é maior do que 7: " . ($eh_maior? "Sim <br>" : "Não <br>");

     // exemplos para utilizar
     $eh_maior = 7 > 5;
    if($eh_maior){
        echo "Resultado pela váriavel <br>";
    }

    if (7 > 5){
        echo "Resultado por comparação lógica <br>";
    }

    if(true){
        echo "Resultado HARD CODED";
    }








?>