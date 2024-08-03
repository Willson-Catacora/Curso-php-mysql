<?php
// VECTOR con indices numericos
echo "Vector 1</br>";
$vector1 = array('A',10,"Hola",true,20.4);
$vector1[] = 'C';
var_dump($vector1);
// VECTOR 2 con indices alfabeticos
echo "</br>Vector 2</br>";
$vector2 = array(
    'A' => 'A',
    'B' => 10,
    'C' => "Hola",
    'D' => true,
    'E' => 20.4,
    'F' => "C",
);
var_dump($vector2);
// VECTOR 3
echo "</br>Vector 3</br>";
$vector3 = [
    'A' => 'A',
    'B' => 10,
    'C' => "Hola",
    'D' => true,
    'E' => 20.4,
    'F' => "C",
`];
var_dump($vector3);