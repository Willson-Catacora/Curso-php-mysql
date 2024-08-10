<html>
    <head><title>Mostrar Datos</title></head>
    <body>
        <?php
            // Llamar al archivo de conexion.php (ruta del archivo)
            include("conexion.php");
            // Verificar la conexion con la base de datos
        // ***************************************************************************
            $existe_registro = false;
            if(isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre']) && isset($_REQUEST['paterno']) && !empty($_REQUEST['paterno']) && isset($_REQUEST['materno']) && !empty($_REQUEST['materno']) &&
            isset($_REQUEST['ci']) && !empty($_REQUEST['ci']) && isset($_REQUEST['expedido']) && !empty($_REQUEST['expedido'])){
                $nombre = $_REQUEST['nombre'];
                $paterno = $_REQUEST['paterno'];
                $materno = $_REQUEST['materno'];
                $ci = $_REQUEST['ci'];
                $expedido = $_REQUEST['expedido'];

                $existe_registro = true;
            }
            
            // ***************************************************************************
            
            
            // Creacion de la conexion
            $conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido establecer la conexion con el servidor");
            // Creacion de la conexion con la base de datos
            $db = mysqli_select_db($conexion, $basedatos) or die ("No se ha podido establecer la conexion con la dase de datos");
            
            // ***************************************************************************
            // Codigo para registrar Estudiandtes
            if($existe_registro){
                $insert = "INSERT INTO estudiante (nombre, paterno, materno, ci, expedido) VALUES ('".$nombre."', '".$paterno."', '".$materno."', '".$ci."', '".$expedido."');";
                $query = mysqli_query($conexion, $insert);
            }
        // ***************************************************************************

            // Conexion la tabla ESTUDIANTES y mostrar
            $consulta = "select * from estudiante";
            $resultado = mysqli_query($conexion, $consulta) or die ("No se ha podido mostrar la consulta");
        ?>
        <h1><b><u>NOMINA DE ESTUDIANTES</u></b></h1>
        <table border="2" style="text-align : center">
            <tr>
                <td><b>CODIGO</b></td>
                <td><b>NOMBRE</b></td>
                <td><b>PATERNO</b></td>
                <td><b>MATERNO</b></td>
                <td><b>CI</b></td>
                <td><b>EXPEDIDO</b></td>
                <td><b>MODIFICAR</b></td>
                <td><b>ELIMINAR</b></td>
            </tr>
            <?php
            while($columna = mysqli_fetch_array($resultado)){
                echo "<tr>";
                echo "<td>".$columna['codigo']."</td>";
                echo "<td>".$columna['nombre']."</td>";
                echo "<td>".$columna['paterno']."</td>";
                echo "<td>".$columna['materno']."</td>";
                echo "<td>".$columna['ci']."</td>";
                echo "<td>".$columna['expedido']."</td>";
                $codigo = $columna['codigo'];
                echo "<td><a href = 'modificar.php?codigo=$codigo'>MODIFICAR</a></td>";
                echo "<td><a href = 'eliminar.php?codigo=$codigo'>ELIMINAR</a></td>";
                echo "</tr>";
            }
            ?>
        </table>

        <form action="formulario_registro.php">
            <br>
            <input type="submit" value="IR FORMULARIO DE REGISTRO">
        </form>
    </body>
</html>