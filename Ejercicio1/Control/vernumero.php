<?php



if($_POST){
    $numero = $_POST['numero'];
    echo "Numero Ingresado : " . $numero . "\n\n";
    $resultado = vernumero($numero);

    if($numero != null){
        echo "\n\n El Numero es " . $resultado ;

    }else{
        echo "No se ingreso un numero";
    }
}else{
    echo "No hay datos";
}


function vernumero ($numero){
    $numEs = "";

    if($numero == 0 && $numero != null){
        $numEs = "Cero";
    }else if($numero > 0 && $numero != null){
        $numEs = "Positivo";
    }else if($numero < 0 && $numero != null){
        $numEs = "Negativo";
    }

    return $numEs;
}
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
    <br>
        <a href="http://localhost/desarrollo_web_dinamico_2024/DWE-TP1/Ejercicio1/Vista/ejercicio1.php">Volver a la pagina principal</a>
</body>
</html>