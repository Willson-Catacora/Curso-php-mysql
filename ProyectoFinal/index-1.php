<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Estudiantes</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#" id="btnRegistro">Formulario de Registro</a></li>
                <li><a href="#" id="btnNomina">Ver Nómina</a></li>
            </ul>
        </nav>
    </header>
    
    <main >
        <div class="container">
            <!-- Formulario de Registro -->
            <section id="registro" class="content-section">
                <h1>Formulario de Registro</h1>
                <form action="registro.php" method="POST">
                    <div class="form-group">
                        <label>Nombre Convencional:</label>
                        <input type="text" name="nombre_convencional" maxlength="40" required>
                    </div>
                    <div class="form-group">
                        <label>Nombre Científico:</label>
                        <input type="text" id="nombre-cientifico" name="nombre_cientifico" maxlength="40" required>
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
                        <label>Longevidad (años):</label>
                        <input type="number" name="longevidad" required>
                    </div>
                    <div class="button-group">
                        <button type="submit">REGISTRAR</button>
                        <button type="reset" id="borrar">BORRAR</button>
                    </div>
                </form>
            </section>
            
            <!-- Nómina de Estudiantes -->
            <section id="nomina" class="content-section" style="display: none;">
                <h1>Mostrar los Datos de Ficha Técnica</h1>
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
                        <?php include('Ver_datos.php');?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 - Willson Catacora Valencia</p>
    </footer>

    <script>
        document.getElementById('btnRegistro').addEventListener('click', function() {
            document.getElementById('registro').style.display = 'block';
            document.getElementById('nomina').style.display = 'none';
        });

        document.getElementById('btnNomina').addEventListener('click', function() {
            document.getElementById('registro').style.display = 'none';
            document.getElementById('nomina').style.display = 'block';
        });
    </script>
</body>
</html>
