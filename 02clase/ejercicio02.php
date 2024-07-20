<?php
    function formato_texto($texto){
        echo "<h1><i><b>$texto</b></i></h1></br>";
    }
    formato_texto("Hola mundo!!!");
    formato_texto("Mi nombre es...");
    formato_texto("Este es un mensaje de prueba.");

    //funcion que multipiue dos valores
    function multiplica($var1, $var2){
        $resultado = $var1 * $var2;
        echo "El producto de $var1 y $var2 es $resultado";
    }

    multiplica(5, 4);
    
    //funcion que multipiue dos valores y retorna un valor
    function multiplica2($var1, $var2){
        $resultado = $var1 * $var2;
        return $resultado;
    }
    $res = multiplica2(5, 4);
    echo "</br>El producto de 5 y 4 es $res";
    echo "</br>El producto de 5 y 4 es ".multiplica2(5, 4);
?>