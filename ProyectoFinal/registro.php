<?php
    include('conexion.php');

    if(isset($_POST['nombre_convencional']) && !empty($_POST['nombre_convencional']) && isset($_POST['nombre_cientifico']) && !empty($_POST['nombre_cientifico']) && 
    isset($_POST['clasificacion']) && !empty($_POST['clasificacion']) && isset($_POST['familia']) && !empty($_POST['familia']) && 
    isset($_POST['alimentacion']) && !empty($_POST['alimentacion']) && isset($_POST['peso']) && !empty($_POST['peso']) && 
    isset($_POST['longitud']) && !empty($_POST['longitud']) && isset($_POST['longevidad']) && !empty($_POST['longevidad'])){
        $nombre_convencional = $_POST['nombre_convencional'];
        $nombre_cientifico = $_POST['nombre_cientifico'];
        $clasificacion = $_POST['clasificacion'];
        $familia = $_POST['familia'];
        $alimentacion = $_POST['alimentacion'];
        $peso = $_POST['peso'];
        $longitud = $_POST['longitud'];
        $longevidad = $_POST['longevidad'];

        $insert = "INSERT INTO ficha_tecnica(Codigo, `Nombre convencional`, `Nombre cientifico`, Clasificación, Familia, Alimentación, Peso, Longitud, Longevidad) VALUES (null,'$nombre_convencional','$nombre_cientifico','$clasificacion','$familia','$alimentacion',$peso,$longitud,$longevidad)";
        $query = mysqli_query($conexion, $insert) or die ("No se ha podido mostrar la consulta");
    }
    header("Location: index-1.php");
?>