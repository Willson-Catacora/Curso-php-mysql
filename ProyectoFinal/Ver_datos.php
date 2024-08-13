<?php
    include('conexion.php');

    $consulta = "SELECT * FROM ficha_tecnica";
    $query = mysqli_query($conexion, $consulta) or die("No se ha podido mostrar la consulta");
    while($columna = mysqli_fetch_array($query)){
        echo "<tr>";
        echo "<td>".$columna['Codigo']."</td>";
        echo "<td>".$columna['Nombre convencional']."</td>";
        echo "<td>".$columna['Nombre cientifico']."</td>";
        echo "<td>".$columna['Clasificación']."</td>";
        echo "<td>".$columna['Familia']."</td>";
        echo "<td>".$columna['Alimentación']."</td>";
        echo "<td>".$columna['Peso']."</td>";
        echo "<td>".$columna['Longitud']."</td>";
        echo "<td>".$columna['Longevidad']."</td>";
        echo "<td><a href='actualizar.php?id=".$columna['Codigo']."'>MODIFICAR</a></td>";
        echo "<td><a href='eliminar.php?id=".$columna['Codigo']."' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\")'>ELIMINAR</a></td>";
        echo "</tr>";
    }
?>

