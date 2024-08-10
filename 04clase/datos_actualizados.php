<?php
    include('conexion.php');
    
    if(isset($_REQUEST['codigo']) && !empty($_REQUEST['codigo']) && isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre']) && isset($_REQUEST['paterno']) && !empty($_REQUEST['paterno']) && isset($_REQUEST['materno']) && !empty($_REQUEST['materno']) &&
    isset($_REQUEST['ci']) && !empty($_REQUEST['ci']) && isset($_REQUEST['expedido']) && !empty($_REQUEST['expedido'])){
        $codigo = $_REQUEST['codigo'];
        $nombre = $_REQUEST['nombre'];
        $paterno = $_REQUEST['paterno'];
        $materno = $_REQUEST['materno'];
        $ci = $_REQUEST['ci'];
        $expedido = $_REQUEST['expedido'];  
        
        // Creacion de la conexion
        $conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido establecer la conexion con el servidor");
        // Creacion de la conexion con la base de datos
        $db = mysqli_select_db($conexion, $basedatos) or die ("No se ha podido establecer la conexion con la dase de datos");

        $update = "UPDATE estudiante SET nombre='$nombre',paterno='$paterno',materno='$materno',ci='$ci',expedido='$expedido' WHERE codigo = '$codigo'";
        $resultado = mysqli_query($conexion, $update) or die ("No se ha podido mostrar la consulta");

        if($resultado){
            echo "SE HA REALIZADO LA MODIFICACION CORRECTAMENTE.";
        }else{
            echo "NO SE HA REALIZADO LA MODIFICACION.";
        }
    }
?>
    <br>
    <form action="mostrar.php">
        <input type="submit" value="VER NOMINA">
    </form>