<?php
// Mostrar los numeros primos entre 0 y 100
echo '</br>PRIMOS ENTRE 0 AL 100 </br>';
for ($i = 2 ; $i < 100; $i++){
    $divisores = 1;
    $primo = false;
    for ($j = 2 ; $j <= $i; $j++){
        if ($i % $j == 0)
            $divisores ++;
    }
    if($divisores == 2)
        $primo = true;
    if($primo)
        print $i.', ';
}