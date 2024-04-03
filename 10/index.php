<?php


class Carro {
    // propriedades
    public $marca;
    public $modelo;
    public $ano;
    
    // método constructor
    public function __construct($marca,$modelo,$ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Função/Comportamento/Método
    public function ligar(){
        echo "O carro está ligado. <br><br>";
    }

}

$meuCarro = new Carro("VolksWagen", "T-Cross", 2024); //instancia um novo objeto do tipo carro
echo "$meuCarro->marca, $meuCarro->modelo,$meuCarro->ano";
$meuCarro->ligar(); //chama a função ligar do objeto meuCarro









?>