<?php
 
 //criando o objeto
 class Pessoa {
    function fala(){
    echo "Este é o método fala() da classe Pessoa dizendo olá!";
    }
 }

 //instanciando o objeto
 $jessica = new Pessoa();
 $jessica->nome = "Jessica é o nome da classe pessoa que foi instânciada!";

 //printando na tela o objeto e do metodo
 echo $jessica->nome;
 echo "<br>";
 $jessica->fala();