<?php
    // crear una unica funcion para realizar
    // la operacion aritmetica correspondiente
    function operaciones($a, $b, $operacion){
        $c = 0;
        if($operacion == "suma")
            $c = $a+$b;
        elseif($operacion == "resta")
            $c = $a-$b;
        elseif($operacion == "multiplica")
            $c = $a*$b;
        else{
            if($b != 0)
                $c = $a/$b;
        }
        echo "El resultado entre las variables $a y $b con la operacion $operacion es $c </br>";
    }
    operaciones(5, 10, "suma");
    operaciones(5, 10, "resta");
    operaciones(5, 10, "multiplica");
    operaciones(5, 10, "divide");
    operaciones(5, 0, "divide");
?>