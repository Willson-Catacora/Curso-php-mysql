<?php
    // estructura condicinante en switch o case (condiciones en los casos)
    $x = 3;
    switch($x){
        case ($x < 5):
            echo "$x es menor que 5.";
        break;
        case (($x >= 5) && ($x <= 9)):
            echo "$x es mayor o igual que 5 y menor o igual que 9";
        break;
        case ($x == 10):
            echo "$x es igual a 10.";
        break;
        default:
            echo "El numero no corresponde a ningun caso.";
        break;
    }
    
?>