<?php 
    $colHoras=[];
    $horasTotales = 0;
    if (isset($_GET['horas'])) {
        $colHoras = $_GET['horas'];
    }
    
    // Sumar las horas, asegurando que no haya valores nulos o vacíos
    foreach ($colHoras as $horas) {
        if (is_numeric($horas)) {
            $horasTotales += (int)$horas;
        }
    }
    echo "<h1>Total de horas: <strong>" . $horasTotales . "</strong></h1>";



?>
<div>
    <button onclick="window.history.back()">Volver</button>
    
</div>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
/* 
    #form2{
        display: flex;
        flex-direction: column;
        align-items: center;

    } */
</style>
<body>
    <!-- <h2>Horas Totales de cursada</h2> -->
    
</body>
</html>