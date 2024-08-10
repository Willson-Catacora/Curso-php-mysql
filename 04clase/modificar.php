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
        // echo $columna['nombre'];
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>FORMULARIO DE REGISTRO MODIFICACION</h1>
    <form action="datos_actualizados.php" method="REQUEST">
        <fieldset>
            <legend class="datos">
                DATOS PERSONALES  A MODIFICAR
            </legend>
            <input type="hidden" name="codigo" value="<?php echo $columna['codigo'];?>">
            <label>NOMBRE</label>
            <input type="text" name="nombre" value="<?php echo $columna['nombre'];?>">
            <br><br>
            <label>AP. PATERNO</label>
            <input type="text" name="paterno" value="<?php echo $columna['paterno'];?>">
            <br><br>
            <label>AP. MATERNO</label>
            <input type="text" name="materno"value="<?php echo $columna['materno'];?>">
            <br><br>
            <label>CI</label>
            <input type="text" name="ci" value="<?php echo $columna['ci'];?>">
            <br><br>
            <label>EXPEDIDO</label>
            <input type="text" name="expedido" value="<?php echo $columna['expedido'];?>">
            <br><br>
            <input type="submit" value="MODIFICAR">
            <input type="reset" value="BORRAR">
        </fieldset>
    </form>
    <br>
    <form action="mostrar.php">
        <input type="submit" value="VER NOMINA">
    </form>
</body>
</html>