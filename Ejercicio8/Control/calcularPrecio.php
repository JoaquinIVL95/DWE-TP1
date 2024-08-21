<?php 

if($_POST){
    $edad = $_POST['edad'];
    $esEstudiante = $_POST['estudio'];
    $precioEntrada = null;

  
    if($esEstudiante == "si"){
        if($edad < 12){
            $precioEntrada = 160;
        }else if($edad >= 12){
            $precioEntrada = 180;
        }
    }else if($edad < 12){
        $precioEntrada = 160;
    }else{
        $precioEntrada = 300;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 Resultado</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .resultado{
        margin-top: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
    <div class="resultado">
    <h1>Costo Total: <?php echo $precioEntrada ?></h1>
    
    
    </div>
    <div>
    <button onclick="window.history.back()">Volver</button>
    
</div>

</body>
</html>