<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas</title>
</head>
<body>
    <h1>Trabalhando com Datas</h1>
    <?php
        //RETONA O TIME STAMP
        ?>
        <h3>Timestamp</h3>
    <?php 
        echo time();
        echo "<br>";
        ?>

        <h3>Formato Númerico</h3>
    <?php 
        //TIMESTEMP É A REPRESENTAÇÃO DA DATA EM FORMATO NÚMERICO, PORÉM EM SEGUNDOS

        $data = date('d/m/y');
        echo $data . "<br>";

        ?>
        <h3>Formato Descritivo Day and Month</h3>
    <?php 
        $data = date('D/M/Y');
        echo $data . "<br>";

        // CONTANDO DATAS, A PARTIR DA DATA DE HOJE NO CASO ABAIXO
        ?>
        <h3>Calculando 5 meses à partir de hoje</h3>
    <?php 
        $cinco = strtotime("5 months"); //converte uma data no padrão americano pro timestamp
        // escreva a data a variação = day, month or year
        //echo $cinco . "<br>";
        $res = date('d/m/y',$cinco);// o valor convertido será calculado
        echo $res . "<br>" ;
    ?>
    <h3>*existem outros formatos na documentação do PHP</h3>
</body>
</html>

