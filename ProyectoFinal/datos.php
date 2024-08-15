<?php
    include('conexion.php');
    if(isset($_REQUEST['Codigo']) && !empty($_REQUEST['Codigo'])){
        $codigo = $_REQUEST['Codigo'];
        // echo $codigo;
        $consulta = "select * from ficha_tecnica where Codigo = $codigo";
        $resultado = mysqli_query($conexion, $consulta) or die ("No se ha podido mostrar la consulta");
        $columna = mysqli_fetch_array($resultado);
        session_start();
        $_SESSION['columna'] = $columna;
        header('Location: index.php?mostrar=actualizar');
        exit();
    }else{
        echo 'algo paso';
    }
?>