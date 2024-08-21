<?php

    include_once "../../Utils/datasubmited.php";
    include_once "../../Control/vernumero.php";

    $datos = dataSubmited();

    $obj = new Numero();

    $mensaje = $obj->verNumero($datos);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 resultado</title>
</head>
<style>
    body{
        font-size: 50px;
    }
</style>
<body>

    <?php echo $mensaje ?>

    <br>
        <a href="http://localhost/desarrollo_web_dinamico_2024/DWE-TP1/Ejercicio1/Vista/ejercicio1.php">Volver a la pagina principal</a>
</body>
</html>