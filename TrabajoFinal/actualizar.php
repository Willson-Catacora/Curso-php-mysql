<?php
    // 
    include('conexion.php');
    if(isset($_POST['Codigo']) && !empty($_POST['Codigo']) && isset($_POST['nombre_convencional']) && !empty($_POST['nombre_convencional']) && isset($_POST['nombre_cientifico']) && !empty($_POST['nombre_cientifico']) && 
    isset($_POST['clasificacion']) && !empty($_POST['clasificacion']) && isset($_POST['familia']) && !empty($_POST['familia']) && 
    isset($_POST['alimentacion']) && !empty($_POST['alimentacion']) && isset($_POST['peso']) && !empty($_POST['peso']) && 
    isset($_POST['longitud']) && !empty($_POST['longitud']) && isset($_POST['longevidad']) && !empty($_POST['longevidad'])){
        $codigo = $_POST['Codigo'];
        $nombre_convencional = $_POST['nombre_convencional'];
        $nombre_cientifico = $_POST['nombre_cientifico'];
        $clasificacion = $_POST['clasificacion'];
        $familia = $_POST['familia'];
        $alimentacion = $_POST['alimentacion'];
        $peso = $_POST['peso'];
        $longitud = $_POST['longitud'];
        $longevidad = $_POST['longevidad'];

        $update = "UPDATE ficha_tecnica SET `Nombre convencional`='$nombre_convencional',`Nombre cientifico`='$nombre_cientifico',`Clasificación`='$clasificacion',`Familia`='$familia',`Alimentación`='$alimentacion',Peso=$peso,Longitud=$longitud,Longevidad=$longevidad WHERE Codigo= $codigo";

        $query = mysqli_query($conexion, $update)or die ("No se ha podido mostrar la consulta");
        session_destroy();
        if($query)
            header("Location: index.php?mostrar=nomina");
    }
?>