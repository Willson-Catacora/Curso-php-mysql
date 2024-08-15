<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basedatos = "bd_zoologico";

    // Crear la conexion con el servidor
    $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die ('No se ha podido realizar la conexion');
    // Creando la conexion con la base de datos
    $db = mysqli_select_db($conexion, $basedatos) or die ('No se ha podido conectar con la base de datos');
?>
