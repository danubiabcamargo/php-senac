<?php

/* 1- Defina uma classe chamada veículo com as seguintes propriedades:
- marca
- modelo
- ano
- ligado (indicando se o veiculo esta ligado ou desligado)

# 2 - Implemente um método construtor na classe Veiculo que inicialize as propriedades marca, modelo e ano. O método construtor também deve definir a propriedade "ligado" como false por padrão.

# 3 - Implementar métodos na classe Veículo:
- ligar(): Este método deve alterar a propriedade "ligado" pra true, se o veículo estiver desligado.
- desligar(): Este método deve alterar a propriedade "ligado" para false, se o veículo estiver ligado.
- exibirDados(): Este método deve exibir as informações do veículo(marca, modelo, ano, e status de ligado ou desligado)
*/

class Veículo{
    public $marca;
    public $modelo;
    public $ano;
    public $ligado = false;  //????

    public function__construct($marca,$modelo,$ano)
    {
        $this->marca = $marca;
        $this->$modelo = $modelo;
        $this->$ano = $ano;
        $this->$ligado = $ligado;
    }

    public function ligado(){
        
    }

}








?>