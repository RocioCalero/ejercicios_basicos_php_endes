<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de saludo</title>
    </head>
    <body>
        <form method="post" action="procesar.php">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required>
            <br>
            <label for="apellido">Apellido: </label>
            <input type="text" id="apellido" name="apellido" required>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
