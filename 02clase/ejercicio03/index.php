<?php
    include("funciones.php");
    echo "<h1>OPERACIONES ARITMETICAS</h1>";
    //creamos variables
    $var1 = 20;
    $var2 = 5;
    echo "El resultado de la suma de $var1 y $var2 es ".suma($var1, $var2)."</br>";
    echo "El resultado de la resta de $var1 y $var2 es ".resta($var1, $var2)."</br>";
    echo "El resultado de la producto de $var1 y $var2 es ".producto($var1, $var2)."</br>";
    echo "El resultado de la division entre $var1 y $var2 es ".divide($var1, $var2)."</br>";
?>