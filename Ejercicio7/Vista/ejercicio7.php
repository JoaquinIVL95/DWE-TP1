<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        
        
    }

    #forms{
        margin-top: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
    
    <form action="../Control/calcular.php" method="post" id="forms">

        <input type="number" name="num1" placeholder="Ingrese un numero">
        <br>
        <input type="number" name="num2" placeholder="Ingrese un numero">
        <br>
        <select name="operador" id="operador">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>

        </select>
        <br><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>