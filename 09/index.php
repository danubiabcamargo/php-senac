<?php
function nomeDaFuncao(){
    // Bloco de código da função
}

function saudacao(){
    echo "Olá, TII04! <br><br>";
}

saudacao(); //chamada da função

// Declaração de uma função que retorna um valor
function saudacao_retorno(){
    return "Olá, TII04... <br><br>";
}

echo saudacao_retorno(); // chamada de função com retorno

//Declaração de uma função que recebe parâmetro
function saudacao_parametro($nome){
    echo "Olá, $nome& <br><br>";
}
saudacao_parametro("TII04");


// Declaracao de uma função que recebe um parâmetroe retorna algo
function saudacao_parametro_retorna($nome){
    return "Olá, $nome* <br><br>";
}
echo saudacao_parametro_retorna("TII04");

//Declaracao de uma função que recebe dois parametros e realiza um retorno
function soma($a, $b){
    return $a +$b;
}

$resultado = soma(8,16);
echo "A soma de 8 com 16 é: $resultado <br><br>";



# Escopo das Variaveis
$mensagem = "Olá"; //variavel global
echo $mensagem;
function mostrarMensagem(){
    $mensagem = "Mundo"; // variavel local
    echo $mensagem; //saida: mundo
}
mostrarMensagem();
echo $mensagem; // saida: ola










?>