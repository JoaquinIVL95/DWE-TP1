<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
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
    <form action="../Control/calcularPrecio.php" id="forms" method="post">
        

        <label for="edad">Edad</label>
        <input type="number" id="edad" name="edad" required max="99">

        <br>
        <div>

            <p>Es estudiante?</p>
            <label for="estudioSi">Si</label>
            <input type="radio" id="estudioSi" name="estudio" value="si" >
            
            <label for="estudioNo">No</label>
            <input type="radio" id="estudioNo" name="estudio" value="no" checked>
        </div>

        <br>

        <button type="submit">Calcular</button><br>
        <button type="reset">Reset</button>
    </form>
    
</body>
</html>