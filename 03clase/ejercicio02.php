<!-- Generar la tabla de multiplicar 
1. Crear un formulario para insertar un numero.
2. Mostrar la tabla de mulplicar de ese numero.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <h1>TABLA DE MULTIPLICACION</h1>
    <form action="ejercicio02.php" method="REQUEST">
        <fieldset>
            <legend class="datos">
                DATOS A CALCULAR
            </legend>
            <label>Ingrese su numero</label>
            <input type="number" name="valor">
            <input type="submit" name="reset" value="Generar">
        </fieldset>
    </form>
</body>
</html>
<?php
echo '</br>';
$numero = $_REQUEST['valor'];
for($i = 1; $i <= 10; $i++){
    print $i.' * '.$numero.' = '.$i*$numero.'</br>';
}
?>
