<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>FORMULARIO DE REGISTRO</h1>
    <form action="mostrar.php" method="REQUEST">
        <fieldset>
            <legend class="datos">
                DATOS PERSONALES
            </legend>
            <label>NOMBRE</label>
            <input type="text" name="nombre">
            <br><br>
            <label>AP. PATERNO</label>
            <input type="text" name="paterno">
            <br><br>
            <label>AP. MATERNO</label>
            <input type="text" name="materno">
            <br><br>
            <label>CI</label>
            <input type="text" name="ci">
            <br><br>
            <label>EXPEDIDO</label>
            <input type="text" name="expedido">
            <br><br>
            <input type="submit" value="REGISTRAR">
            <input type="reset" value="BORRAR">
        </fieldset>
    </form>
    <form action="mostrar.php">
        <input type="submit" value="VER NOMINA">
    </form>
</body>
</html>
