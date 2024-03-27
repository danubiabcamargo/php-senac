<?php
    # Introdução a Arrays em PHP

    /* Definição de Arrays */
    $frutas = array("Maça","Banana","Laranja","Morango");
    $numeros = [1,2,3,4,5];
    $alunos = array ("Fabio" => 18, "Tina" =>20, "Pedro" => 19);

    /*Acessando elementos do array */
    echo "A segunda fruta é: " .$frutas[1] . "<br>";
    echo "O terceiro número  é: " .$numeros[2] . "<br>";
    echo "Qual é a idade de Fabio:" .$alunos["Fabio"] . " anos" . "<br>";

    /* Alterar Elementos do Array */
    $frutas[0] = "Pera";
    $numeros[4] = 10;
    $alunos["Tina"] = 21;

    /* Adicionando Elementos ao Array */
    $frutas[] = "Abacaxi";
    $numeros[] = 6;
    $alunos["Ana"] = 22;

    /* Percorrendo um Array com o foreach */
    echo "Lista de Frutas: ";
    foreach($frutas as $fruta){
        echo $fruta . " ";
    }
    echo "<br>";

    echo "Lista de números: ";
    foreach($numeros as $numero) {
    echo $numero . " ";
    }
    echo "<br>";

    echo "Lista de alunos: <br>";
    foreach($alunos as $nome => $idade) {
    echo $nome . " tem " . $idade . " anos. ";
    echo "<br>";
    }

    /* Funções Úteis para Arrays */
    echo "Números de elementos no array de frutas: " . count ($frutas) . "<br>";
    echo "Índice da fruta 'Laranja' no array: " . array_search("Laranja" , $frutas) . "<br>" ;
    echo "Última fruta do array: " . end($frutas) . "<br>";
    echo "Array de frutas antes de reverter: <br>";
    print_r($frutas);
    echo "<br>";
    echo "Array de frutas antes de reverter: <br>";
    $frutas_revertidas = array_reverse($frutas);
    print_r($frutas_revertidas)










?>