<?php
$vector1 = ['A'=> 'rojo', 'B'=> 'amarillo'];
$vector2 = ['A'=> 'lila', 'B'=> 'morado','C'=> 'verde', 'D'=> 'azul'];
echo 'Vector 1 </br>';
var_dump($vector1);
echo '</br>Vector 2 </br>';
var_dump($vector2);
// unir dos vectores
$union = $vector1 + $vector2;
echo '</br>Union del Vector 1 y Vector 2 </br>';
var_dump($union);