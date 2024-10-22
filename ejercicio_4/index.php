<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El mayor de tres</title>
</head>
<body>
    <h1>El mayor de tres</h1>
    <form method="post" action="numero.php">
        <label for="num1">Introduzca n1</label>
        <input type="number" id="num1" name="num1" step="0.01" required>
        <br>
        <label for="num2">Introduzca n2</label>
        <input type="number" id="num2" name="num2" step="0.01" required>
        <br>
        <label for="num3">Introduzca n3</label>
        <input type="number" id="num3" name="num3" step="0.01" required>
        <br>
        <input type="submit" value="Mayor o menor">
</body>
</html>
