<div class="container">
        <h1>Formulario de Registro</h1>
        <form action="registro.php" method="POST">
            <div class="form-group">
                <label for="nombre-convencional">Nombre Convencional:</label>
                <input type="text" id="nombre-convencional" name="nombre_convencional" maxlength="40" required>
            </div>
            <div class="form-group">
                <label for="nombre-cientifico">Nombre Científico:</label>
                <input type="text" id="nombre-cientifico" name="nombre_cientifico" maxlength="40" required>
            </div>
            <div class="form-group">
                <label for="clasificacion">Clasificación:</label>
                <input type="text" id="clasificacion" name="clasificacion" maxlength="25" required>
            </div>
            <div class="form-group">
                <label for="familia">Familia:</label>
                <input type="text" id="familia" name="familia" maxlength="25" required>
            </div>
            <div class="form-group">
                <label for="alimentacion">Alimentación:</label>
                <input type="text" id="alimentacion" name="alimentacion" maxlength="25" required>
            </div>
            <div class="form-group">
                <label for="peso">Peso (kg):</label>
                <input type="number" id="peso" name="peso" required>
            </div>
            <div class="form-group">
                <label for="longitud">Longitud (cm):</label>
                <input type="number" id="longitud" name="longitud" required>
            </div>
            <div class="form-group">
                <label for="longevidad">Longevidad (años):</label>
                <input type="number" id="longevidad" name="longevidad" required>
            </div>
            <div class="button-group">
                <button type="submit">Registrar</button>
                <button type="reset" id="borrar">Borrar</button>
                <button type="button" id="ver-nomina">Ver Nómina</button>
            </div>
        </form>
    </div>