<?php

//lendo arquivo zip 

echo $file = file_get_contents("zip://le.zip#arquivo.txt");




/* função de leitura de arquivo

$arquivo = fopen('arquivo.txt', 'r');

while(!feof($arquivo)){

    $lendo = fgets($arquivo);

    echo $lendo;

}
    fclose($arquivo);

    */


/* função de leitura do tamanho do arquivo

$tamanhoArquivo = filesize('arquivo.txt');

$lendo = fread($arquivo, $tamanhoArquivo); //no maximo 128 mb pra ler um arquivo

    echo $lendo;

fclose($arquivo);

*/




