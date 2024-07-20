<?php
    function suma($var1, $var2){
        return $var1 + $var2;
    }
    function resta($var1, $var2){
        return $var1 - $var2;
    }
    function producto($var1, $var2){
        return $var1 * $var2;
    }
    function divide($var1, $var2){
        if($var2 == 0 ){
            return "No existe las divisiones entre 0";
        }else{
            return $var1 / $var2;
        }
    }
?>