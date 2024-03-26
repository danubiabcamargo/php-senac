<?php

    # FLOATS E BOOLEANOS

    /*
    Exercício 1 - Índice de Massa Corporal (IMC):
    Solicite ao usuário que insira sua altura (em metros) e peso (em quilogramas). Calcule o IMC usando a fórmula IMC = peso / (altura * altura). Exiba o resultado e informe se o usuário está abaixo do peso, com peso normal, com sobrepeso ou obeso, com base nos intervalos de IMC padrão.
    */
    $altura = 1.65;
    $quilogramas = 70;

    $imc = $quilogramas / ($altura * $altura);
    echo "O cálculo do IMC: " . ($imc) . "<br><br>";


    /*
    Exercício 2 - Verificação de Pagamento:
    Pergunte ao usuário se ele tem saldo na conta (booleano). Se tiver, pergunte se ele deseja fazer uma compra. Se a resposta for afirmativa, peça ao usuário para inserir o valor da compra (float). Verifique se o valor da compra é menor ou igual ao saldo disponível e informe se a transação foi concluída com sucesso ou se o saldo é insuficiente.
    */

    //$saldo_disponivel = true;
    //$valor_compra = "500.00";

    //$saldo_conta = ($valor_compra <= $saldo_disponivel);
    //if($saldo_conta  < 400) {
   ////     echo "Saldo insuficiente";
    //    return ("Saldo Insuficiente")
    //}
    ## não consegui


    /*
    Exercício 3 - Conversor de Temperatura:
    Solicite ao usuário que insira uma temperatura em Celsius (float). Converta essa temperatura para Fahrenheit usando a fórmula: Fahrenheit = (Celsius * 9/5) + 32. Exiba o resultado da conversão.
    */
    $celsius = 20.5;
    $conversao = ($celsius * 9/5) + 32;

    echo "Conversão: " . $conversao . " ºF" . "<br><br>";



    /*
    Exercício 4 - Verificação de Acesso:
    Pergunte ao usuário se ele é maior de idade (booleano). Se ele for maior de idade, pergunte se ele possui autorização dos pais (booleano). Com base nas respostas, determine se o usuário tem acesso ao conteúdo restrito. 
    */
    $maior_idade = true;
    $pais = false;

    $autorizacao = $maior_idade && $pais;
    echo "Seu acesso foi liberado? " . ($autorizacao? "Sim" : "Não");




    /*
    Exercício 5 - Verificação de Números Primos:
    Peça ao usuário que insira um número inteiro (int) e verifique se ele é um número primo. Use um booleano para indicar se o número é primo ou não.
    */

?>