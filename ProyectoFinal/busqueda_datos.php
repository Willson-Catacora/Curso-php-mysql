<?php
    include('conexion.php');

    if(isset($_POST['search']) && !empty($_POST['search']) && isset($_POST['query']) && !empty($_POST['query'])){
        $atributo = $_POST['search'];
        $busqueda = $_POST['query'];
        $consulta = "SELECT * FROM ficha_tecnica WHERE $atributo = '$busqueda'";
        $resultado = mysqli_query($conexion, $consulta) or die("No se ha podido mostrar la consulta");
        session_start();
        $_SESSION['atributo'] = $atributo;
        $_SESSION['busqueda'] = $busqueda;
        $_SESSION['resultado'] = array();
        while($columna = mysqli_fetch_array($resultado, MYSQLI_ASSOC))
            $_SESSION['resultado'][] = $columna;
        header('Location: index.php?mostrar=busqueda_dato');
        exit();
    } 
?>
