<?php 
function estudios($estudios){

    switch ($estudios) {
        case '1':
            $mensajeEstudios = "No tiene estudios.";
            break;
        case '2':
            $mensajeEstudios = "Tiene estudios primarios.";
            break;
        case '3':
            $mensajeEstudios = "Tiene estudios secundarios.";
            break;
        default:
            $mensajeEstudios = "No especificó el nivel de estudios.";
            break;
    }

    return $mensajeEstudios;
}