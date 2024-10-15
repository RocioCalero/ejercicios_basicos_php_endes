<?php
    $distancia = $_POST ['distancia'];
    $velocidad = $_POST ['velocidad'];
    $tiempo = $distancia / $velocidad;
    echo "<h2>El tiempo estimado de viaje es: " . round($tiempo, 2) . " horas.</h2>";
?>