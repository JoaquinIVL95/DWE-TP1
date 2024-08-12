<?php 
    $fraseCompleta = "";
    if($_GET){
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $direccion = $_GET['direccion'];

        $fraseCompleta =  "Hola, yo soy " . $nombre . " " . $apellido . ". Tengo " . $edad . " años y vivo en " . $direccion; 

    }

    function armarFrase(){

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $fraseCompleta ?></h1>
</body>
</html>