<?php
// Mostrar los numeros pares comprendidos entre 0 y 100
echo 'PARES DEL 1 AL 100 </br>';
for ($i = 2 ; $i <= 100; $i += 2){
    print $i;
    if($i < 100)
        print ', ';
}
echo '</br>IMPARES DEL 1 AL 100 </br>';
for ($i = 1 ; $i <= 100; $i += 2){
    print $i;
    if($i < 99)
        print ', ';
}
// Mostrar los numeros multiplos de 3 comprendidos entre 0 y 200
echo '</br>MULTIPLOS DE 3 DEL 0 AL 300 </br>';
for ($i = 3 ; $i <= 200; $i += 3){
    print $i;
    if($i < 200)
        print ', ';
}
