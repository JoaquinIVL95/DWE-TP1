<?php 

function checkEdad($edad){
    $respuesta = "";
    if($edad < 18 && $edad > 0 ){
        $respuesta = " menor de edad";
    }else{
        $respuesta = " mayor de edad";
    }
    return $respuesta;
}


?>