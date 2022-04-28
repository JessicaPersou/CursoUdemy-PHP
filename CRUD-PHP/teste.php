<?php

if("teste"> 5 && 1){
    echo "é Verdadeira";
}else{
    echo "É falso";
}
?> 

<!DOCTYPE html>
<html>
<body>

<?php
//tirar as barras e colocar os traços e inverter a ordem
$str = "1993/03/19";
$res = (implode("-",array_reverse(explode("/",$str))));
echo "$res<br>";

?> 

</body>
</html>
