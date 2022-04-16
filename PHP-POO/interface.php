<?php

interface Dados{
    public function profissao();

}

class Funcionario implements Dados{
    public $nome;
    public function profissao(){
        echo "programadora <br>";
    }

}
$jessica = new Funcionario();

$jessica->profissao();