<?php
// Integrar los datos de mysql con php
// Datos de conexion 
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $database = "prueba";
// Creacion de datos
    $conexion = mysqli_connect($servidor, $usuario, $password) or die ('No se ha podido establecer la conexion.');
    $db = mysqli_select_db($conexion, $database) or die('No se ha podido establecer la conexion con la base de datos.');