<?php
    include('conexion.php');
    if(isset($_REQUEST['Codigo']) && !empty($_REQUEST['Codigo'])){
        $codigo = $_REQUEST['Codigo'];
        // echo $codigo;
        $consulta = "select * from ficha_tecnica where Codigo = $codigo";
        $resultado = mysqli_query($conexion, $consulta) or die ("No se ha podido mostrar la consulta");
        $columna = mysqli_fetch_array($resultado);
    }else{
        echo 'algo paso';
    }
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
        if($query)
            header("Location: index-1.php");
    }
?>

<section id="registro" class="content-section">
                <h1>Formulario de Actualizacion</h1>
                <form action="actualizar.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="Codigo" value= "<?php echo $columna['Codigo'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nombre Convencional:</label>
                        <input type="text" name="nombre_convencional" maxlength="40" value= "<?php echo $columna['Nombre convencional'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nombre Científico:</label>
                        <input type="text" id="nombre-cientifico" name="nombre_cientifico" maxlength="40"  value= "<?php echo $columna['Nombre cientifico'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Clasificación:</label>
                        <input type="text" name="clasificacion" maxlength="25" value= "<?php echo $columna['Clasificación'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Familia:</label>
                        <input type="text" name="familia" maxlength="25" value= "<?php echo $columna['Familia'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alimentación:</label>
                        <input type="text" name="alimentacion" maxlength="25" value= "<?php echo $columna['Alimentación'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Peso (kg):</label>
                        <input type="number" name="peso" value= "<?php echo $columna['Peso'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Longitud (cm):</label>
                        <input type="number" name="longitud" value= "<?php echo $columna['Longitud'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Longevidad (años):</label>
                        <input type="number" name="longevidad" value= "<?php echo $columna['Longevidad'];?>" required>
                    </div>
                    <div class="button-group">
                        <button type="submit">MODIFICAR</button>
                        <button type="reset" id="borrar">BORRAR</button>
                    </div>
                </form>
            </section>