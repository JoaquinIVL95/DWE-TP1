<?php 

if($_POST){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['operador'];
    $resultado = null;
    switch($operador){
        case 'suma':
            $resultado = $num1 + $num2;
            break;
        
        case 'resta':
            $resultado = $num1 - $num2;
            break;
        
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;
        default:
        $resultado = "Operador no válido";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 Resultado</title>
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
    <h1>Resultado</h1>
    <h2>Operacion: <?php echo $operador ?></h2>
    <h3>Resultado: <?php echo $resultado?></h3>
    </div>

</body>
</html>