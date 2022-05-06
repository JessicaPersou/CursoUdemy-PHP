<?php

$arquivo = fopen('arquivo-novo.txt', 'a');

$escrevendo = "\nEstou escrevendo na segunda linha....";

fwrite($arquivo, $escrevendo);

fclose($arquivo);