<?php
    include('conexion.php');
    if(isset($_REQUEST['Codigo']) && !empty($_REQUEST['Codigo'])){
        $codigo = $_REQUEST['Codigo'];
        // $consulta = "SELECT * FROM ficha_tecnica WHERE Codigo = $codigo";
        // $resultado = mysqli_query($conexion, $consulta) or die ("No se ha podido mostrar la consulta");
        // $columna = mysqli_fetch_array($resultado);
        // echo 'codigo '.$columna['Codigo']." de ".$columna['Nombre convencional']."<br>";

        $delete = "DELETE FROM ficha_tecnica WHERE Codigo = $codigo";
        $query = mysqli_query($conexion, $delete) or die ("No se ha podido mostrar la consulta");
        if($query)
            // echo "SE HA REALIZADO LA ELIMINACION CORRECTAMENTE.";
            header("Location: index-1.php");
        else
            echo "NO SE HA REALIZADO LA ELIMINACION.";
    }
?>