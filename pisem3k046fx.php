<?php

$mes = 7;
switch($mes){
    case 1: echo "Janeiro"; break;
    case 2: echo "Fevereiro"; break;
    case 3: echo "Marco"; break;
    case 4: echo "Abril"; break;
    case 5: echo "Maio"; break;
    case 6: echo "Junho"; break;
    case 7: echo "Julho"; break;
    case 8: echo "Agosto"; break;
    case 9: echo "Setembro"; break;
    case 10: echo "Outubro"; break;
    case 11: echo "Novembro"; break;
    case 12: echo "Dezembro"; break;
    default: echo "Mes invalido"; break;
}


$i = 0;
while($i < 1000){
    print "$i "; # 0 1 2 3 4 5 6 7 8 9 
    $i++;
}

$i = 0;
while($i < 1000){
    echo "$i "; 
    $i++;
}


?>