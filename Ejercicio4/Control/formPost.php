<?php 

require "checkEdad.php";

    $fraseCompleta = "";
    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];

        $esMayorOMenor = checkEdad($edad);

        $fraseCompleta =  "Hola, yo soy " . $nombre . " " . $apellido . ". Tengo " . $edad . " años y vivo en " . $direccion . 
        "\n\n" . ". Es " . $esMayorOMenor ;  

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