<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
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



    <form action="../Control/formPost.php" id="forms" method="post">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="edad">Edad</label>
        <input type="number" id="edad" name="edad" min="1"  required>

        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion" required>
        <br>
        <!-- Radio buttons para nivel de estudios -->
         <div>

             <p>Nivel de estudios:</p>
             <input type="radio" id="no_estudios" name="estudios" value="1" required>
             <label for="no_estudios">No tiene estudios</label><br>
     
             <input type="radio" id="primarios" name="estudios" value="2" required>
             <label for="primarios">Estudios primarios</label><br>
     
             <input type="radio" id="secundarios" name="estudios" value="3" required>
             <label for="secundarios">Estudios secundarios</label><br><br>
         </div>

        <!-- Selector para el sexo -->
        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otro">Otro</option>
        </select>

        <div>
            <!-- CheckBox para deportes -->
             <p>Deportes:</p>
             <input type="checkbox" id="futbol" name="deportes[]" value="Futbol">
             <label for="futbol">Futbol</label><br>
             
             <input type="checkbox" id="basket" name="deportes[]" value="Basket">
             <label for="basket">Basket</label><br>

             <input type="checkbox" id="tennis" name="deportes[]" value="Tennis">
             <label for="tennis">Tennis</label><br>

             <input type="checkbox" id="voley" name="deportes[]" value="Voley">
             <label for="voley">Voley</label><br>

        </div>
        <br><br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>