<?php 
    include('header.php'); 
?>

<div class="container">
    <?php
        // Determina qué sección a mostrar
        $mostrar = isset($_GET['mostrar']) ? $_GET['mostrar'] : 'registro';
        if ($mostrar == 'registro') {
    ?>
    <div id="form-container">
        <h2>Formulario de Registro</h2>
        <form id="registration-form" action="registro.php" method="POST">
            <div class="form-group">
                <label>Nombre Convencional:</label>
                <input type="text" type="text" name="nombre_convencional" maxlength="40" required>
            </div>
            <div class="form-group">
                <label>Nombre Científico:</label>
                <input type="text" name="nombre_cientifico" maxlength="40" required>
            </div>
            <div class="form-group">
                <label>Clasificación:</label>
                <input type="text" name="clasificacion" maxlength="25" required>
            </div>
            <div class="form-group">
                <label>Familia:</label>
                <input type="text" name="familia" maxlength="25" required>
            </div>
            <div class="form-group">
                <label>Alimentación:</label>
                <input type="text" name="alimentacion" maxlength="25" required>
            </div>
            <div class="form-group">
                <label>Peso (kg):</label>
                <input type="number" name="peso" required>
            </div>
            <div class="form-group">
                <label>Longitud (cm):</label>
                <input type="number" name="longitud" required>
            </div>
            <div class="form-group">
                <label >Longevidad (años):</label>
                <input type="number" name="longevidad" required>
            </div>
            <div class="form-buttons">
                <button type="submit">Registrar</button>
                <button type="reset" class="reset-btn" >Borrar</button>
            </div>
        </form>
    </div>
    <?php 
        }elseif($mostrar == 'nomina'){
    ?>
    <div id="table-container" >
        <h2>Mostrar Datos de Ficha Tecnica</h2>
        <table>
            <thead>
                <tr>
                    <th>COD</th>
                    <th>NOMBRE CONVENCIONAL</th>
                    <th>NOMBRE CIENTÍFICO</th>
                    <th>CLASIFICACIÓN</th>
                    <th>FAMILIA</th>
                    <th>ALIMENTACIÓN</th>
                    <th>PESO (Kg)</th>
                    <th>LONGITUD (cm)</th>
                    <th>LONGEVIDAD (años)</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('Ver_datos.php');
                ?>
            </tbody>
        </table>
    </div>
    <?php
        }elseif($mostrar == 'actualizar'){
            session_start();
            $columna = $_SESSION['columna'];
    ?>
    <div id="form-container">
        <h2>Formulario de Actualización</h2>
        <form id="registration-form" action="actualizar.php" method="POST">
            <div class="form-group">
                <input type="hidden" name="Codigo" value= "<?php echo $columna['Codigo'];?>" required>
            </div>
            <div class="form-group">
                <label>Nombre Convencional:</label>
                <input type="text" name="nombre_convencional" maxlength="40" value= "<?php echo $columna['Nombre convencional'];?>" required>
            </div>
            <div class="form-group">
                <label>Nombre Científico:</label>
                <input type="text" name="nombre_cientifico" maxlength="40"  value= "<?php echo $columna['Nombre cientifico'];?>" required>
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
            <div class="form-buttons">
                <button type="submit">Actualizar</button>
                <button type="reset" class="reset-btn" >Borrar</button>
            </div>
        </form>
    </div>
    <?php
        }elseif($mostrar == 'busqueda'){
    ?>
    <div id="search-container">
        <h2>Buscar</h2>
        <form id="search-form" action="busqueda_datos.php" method="POST">
            <div class="form-group">
                <label>Buscar por:</label>
                <input type="text"  name="search" list="search-options" placeholder="Selecciona una opción" required>
                <datalist id="search-options">
                    <option value="Clasificación">
                    <option value="Familia">
                    <option value="Alimentación">
                </datalist>
            </div>
            <div class="form-group">
                <label>Valor:</label>
                <input type="text"  name="query" required>
            </div>
            <div class="form-buttons">
                <button type="submit">Buscar</button>
            </div>
        </form>
    </div>
    <?php
        } elseif($mostrar == 'busqueda_dato'){
            session_start();
            $resultado = $_SESSION['resultado'];
            $atributo= $_SESSION['atributo'];
            $busqueda = $_SESSION['busqueda'];
    ?>
    <div id="table-container" >
        <h2>Mostrar Datos de Ficha Tecnica : <?php echo $atributo.' - '.$busqueda; ?></h2>
        <table>
            <thead>
                <tr>
                    <th>COD</th>
                    <th>NOMBRE CONVENCIONAL</th>
                    <th>NOMBRE CIENTÍFICO</th>
                    <th>CLASIFICACIÓN</th>
                    <th>FAMILIA</th>
                    <th>ALIMENTACIÓN</th>
                    <th>PESO (Kg)</th>
                    <th>LONGITUD (cm)</th>
                    <th>LONGEVIDAD (años)</th>
                    <th>ACTUALIZAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 0;
                    while($i < count($resultado)){
                        $columna = $resultado[$i];
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
                        echo "<td><a href='datos.php?Codigo=".$columna['Codigo']."'><img src='./img/actualizar.png'></a></td>";
                        echo "<td><a href='eliminar.php?Codigo=".$columna['Codigo']."' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este registro?\")'><img src='./img/eliminar.png'></a></td>";
                        echo "</tr>";
                        $i++;
                    } 
                ?>
            </tbody>
        </table>
    </div>
    <?php
        }
    ?>
</div>

<?php 
    include('footer.php');
?>
