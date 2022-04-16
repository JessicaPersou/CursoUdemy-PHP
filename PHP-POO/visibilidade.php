<?php

//visibilidade public, protected, private

class Car{
    public $rodas = 4; 
    private $vidro = "g20"; //acessa por meio de herança 
    protected $portas = 4; //acessa por herança

    public function peliculaTrocada($pelicula){
        return $this->vidro = $pelicula;
    }
    public function getVidro(){
        return $this->vidro;
    }
    public function getPortas(){
        return $this->portas;
    }


}

class TrocaRoda{
        public function troca($obj){ //acessando o objeto da classe acima 
        $obj->rodas = 10; 
    }
}

$carro = new Car(); // uma classe troca o objeto da outra classe já instanciada 

echo $carro->rodas . "<br>";

$jessica = new TrocaRoda();

$jessica->troca($carro);

echo $carro->rodas . "<br>";
echo $carro->getVidro(); 
echo "<br>";
echo $carro->peliculaTrocada("g25"); // só é possivel alterar por um metodo da classe, não consigo alterar um metodo privado por outro metodo de uma classe
echo "<br>";
echo $carro->getPortas();

