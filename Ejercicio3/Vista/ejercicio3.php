<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        
        
    }

    #forms{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>
<body>
    <!-- Formulario con get -->
     <h1>Formulario GET</h1>
    <form action="../Control/formGet.php" id="forms" method="get">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="edad">Edad</label>
        <input type="text" id="edad" name="edad" required>

        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion" required>

        <br>
        <button type="submit">Enviar</button>
    </form>

    <h1>Formulario POST</h1>
    <form action="../Control/formPost.php" id="forms" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="edad">Edad</label>
        <input type="text" id="edad" name="edad" required>

        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion" required>
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>