<?php
    // $a = 10;
    // $b = 5;
    // $b = 0;
    // $operacion = "suma";
    // $operacion = "resta";
    // $operacion = "multiplicacion";
    // $operacion = "division";
    // $operacion = "potencia";
    $a = $_REQUEST["valor1"];
    $b = $_REQUEST["valor2"];
    $operacion = $_REQUEST["op"];
    switch($operacion){
        case "suma":
            $res = $a+$b;
            echo "El resultado de $operacion de las valores $a y $b es $res.";
        break;
        case "resta":
            $res = $a-$b;
        echo "El resultado de $operacion de las valores $a y $b es $res.";
        break;
        case "multiplicacion":
            $res = $a*$b;
        echo "El resultado de $operacion de las valores $a y $b es $res.";
        break;
        case "division":
            if($b <> 0){
                $res = $a/$b;
                echo "El resultado de $operacion de las valores $a y $b es $res.";
            }else
                echo "NO existe divisiones entre 0.";
        break;
        default:
            echo "El numero no corresponde a ningun caso de las operaciones.";
        break;
    }
?>