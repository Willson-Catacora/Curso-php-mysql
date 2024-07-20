<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <h1>OPERACIONES ARITMETICAS</h1>
    <form action="ejercicio08.php" method="REQUEST">
        <fieldset>
            <legend class="datos">
                DATOS A CALCULAR
            </legend>
            <label>VALOR 1</label>
            <input type="number" name="valor1">
            </br>
            </br>
            <label>VALOR 2</label>
            <input type="number" name="valor2">
            </br>
            </br>
            <input type="submit" name="op" value="suma">
            <input type="submit" name="op" value="resta">
            <input type="submit" name="op" value="multiplicacion">
            <input type="submit" name="op" value="division">
            </br>
            </br>
            <input type="button" name="reset" value="borrar">
        
        </fieldset>
    </form>
</body>
</html>