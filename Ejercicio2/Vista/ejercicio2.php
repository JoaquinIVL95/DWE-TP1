<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #form2{
        display: flex;
        flex-direction: column;
        align-items: center;

    }
</style>
<body>
    
<form action="../Control/horasCursada.php" id="form2" name="form2" method="get">

    <h2>Lunes</h2>
    <input type="number" min="0" id="horas" name="horas[horaLunes]" placeholder="Ingrese las horas">
    
    <h2>Martes</h2>
    <input type="number" min="0" id="horas" name="horas[horaMartes]" placeholder="Ingrese las horas">

    <h2>Miercoles</h2>
    <input type="number" min="0" id="horas" name="horas[horaMiercoles]" placeholder="Ingrese las horas">
    
    <h2>Jueves</h2>
    <input type="number" min="0" id="horas" name="horas[horaJueves]" placeholder="Ingrese las horas">

    <h2>Viernes</h2>
    <input type="number" min="0" id="horas" name="horas[horaViernes]" placeholder="Ingrese las horas" >
    <br>

    <button type="submit" name="Submit">Cargar Horas</button>

</form>

</body>
</html>