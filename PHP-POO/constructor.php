<?php
class Pessoa{

    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

}

$jessica = new Pessoa('jessica', 29);
echo $jessica->age;
echo "<br>";
echo $jessica->name;
echo "<br>";

//classe anonima e usa como classe normal, não pode fazer heranças

$animal = new class(){

    public $nome = "Jessica";

};

echo $animal->nome;
echo "<br>";

//metodos do php para ajudar, verifica propriedades metodos e se a classe existe

if(class_exists("Pessoa")){
    echo "A classe existe!";
}
echo "<br>";
echo "<br>";
if(class_exists("Lua")){
    echo "A classe existe!";
}else{
    echo "Não esta criada!";

}
echo "<br>";
print_r(get_class_vars("Pessoa")); // recebe um array com as propriedades, que no caso esta vazio
echo "<br>";

// verificando os objetos 
if(is_object($jessica)){
    echo "É um obj";
}else{
    echo "Não é um obj!";
}
echo "<br>";
echo get_class($jessica); // verifica qual a classe pertence
echo "<br>";

if(method_exists($jessica, "mtd")){ // se o metodo existe retorna qual é
    echo "existe";
}else{
    echo "Não é existe";
}