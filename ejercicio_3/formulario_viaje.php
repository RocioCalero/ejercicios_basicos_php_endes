<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tiempo de Viaje</title>
</head>
<body>
    <h1>Calcula el tiempo de viaje</h1>
    <form method="post" action="viaje.php">
        <label for="distancia">Distancia a recorre (km)</label>
        <input type="number" id="distancia" name="distancia" step="0.01" required>
        <br>
        <label for="velocidad">Velocidad media (km/h)</label>
        <input type="number" id="velocidad" name="velocidad" step="0.01" required>
        <br>
        <input type="submit" value="Calcular">
</body>
</html>
