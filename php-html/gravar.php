<?php

//testando gerar arquivo

function Gravar(string $texto, string $arquivo){
    $fp = fopen($arquivo, "a+");
    fwrite($fp, $texto);
    fclose($fp);
}

Gravar("Persistencia em arquivo texto!!!", "file.txt");
Gravar("Persistencia em arquivo texto!!!", "arquivo.txt");
