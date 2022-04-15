<?php

//incluir somente uma vez a biblioteca
require_once './vendor/autoload.php';

//Instanciando o PHPWord e atribundo a variável $phpWord
$phpWord = new \PhpOffice\PhpWord\PhpWord(); 

//Cria uma sessão Word
$section = $phpWord->addSection();

//Add o Texto
$section->addText(
    '"Learn from yesterday, live for today, hope for tomorrow. '
        . 'The important thing is not to stop questioning." '
        . '(Albert Einstein)'
);

//Gerar o Word
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('\finish\helloWorld.docx');


?>