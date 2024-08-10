<?php
    include('conexion.php');
    if(isset($_REQUEST['codigo']) && !empty($_REQUEST['codigo'])){
        // Creacion de la conexion
        $conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido establecer la conexion con el servidor");
        // Creacion de la conexion con la base de datos
        $db = mysqli_select_db($conexion, $basedatos) or die ("No se ha podido establecer la conexion con la dase de datos");
        $codigo = $_REQUEST['codigo'];
        $consulta = "select * from estudiante where codigo = $codigo";
        $resultado = mysqli_query($conexion, $consulta) or die ("No se ha podido mostrar la consulta");
        $columna = mysqli_fetch_array($resultado);
        echo $columna['codigo']." de ".$columna['nombre']."<br>";

        $delete = "DELETE FROM estudiante WHERE codigo = $codigo";
        $resultado1 = mysqli_query($conexion, $delete);
        if($resultado1)
            echo "SE HA REALIZADO LA ELIMINACION CORRECTAMENTE.";
        else
            echo "NO SE HA REALIZADO LA ELIMINACION.";
    }
    
?>
    <br>
    <form action="mostrar.php">
        <input type="submit" value="VER NOMINA">
    </form>