<?php 

require "checkEdad.php";
require_once "estudios.php";

    $fraseCompleta = "";
    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $estudios = $_POST['estudios'];
        $sexo = $_POST['sexo'];

        $esMayorOMenor = checkEdad($edad);
        $estudiosRealizados = estudios($estudios);

        $fraseCompleta =  "Hola, yo soy " . $nombre . " " . $apellido . ". Tengo " . $edad . " años y vivo en " . $direccion;  
        
        
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
    <br>
    <h2><?php echo "Es " . $esMayorOMenor ?></h2>
    <br>
    <h2><?php echo $estudiosRealizados ?></h2>
    <br>
    <h2><?php echo "Sexo: " . $sexo ?></h2>
    
</body>
</html>