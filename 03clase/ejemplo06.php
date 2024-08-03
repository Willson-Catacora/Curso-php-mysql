<?php
    $vector1 = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');
    print 'Longitud del vector : '.count($vector1).'</br>';
    for($i = 0; $i < count($vector1); $i++){
        // print $vector1[$i].'</br>';
        print '['.$vector1[$i].']';
    }
    // Estructura de WHILE
    echo '</br> WHILE </br>';
    $i = 0;
    while ($i < count($vector1)){
        print '['.$vector1[$i].']';
        $i++;
    }