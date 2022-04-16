<?php

class Human{

    public $idade = 29;

    public function falar(){
        echo "falando muito! <br>";    
    }

}

$eu = new Human();
$eu->idade = 29;
$eu->falar();

class Jessica extends Human{

    protected $profissao;
    public function getProfissao($profissao){
       return $this->$profissao = $profissao;
    }

}

$agora = new Jessica();
echo $agora->getProfissao("garota de programa");

if($eu instanceof Human){   //vamos verificar se é humano
    echo "<br> Marcos é humano";
}else{
    echo "<br> Marcos não é humano";
}