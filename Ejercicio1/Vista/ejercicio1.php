
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        
        font-size: 60px;
    }

    #form1{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    #numero{
        height: 30px;

    }

</style>
<body>
    <form id="form1" action="../Control/vernumero.php" method="post">
        <label for="numero">Ingrese un número:</label>
        <br>
        <input type="number" id="numero" name="numero">
        <br>
        <button type="submit" name="Submit">Enviar</button>

    </form>
    
</body>
</html>