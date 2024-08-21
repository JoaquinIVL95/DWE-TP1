<?php


class Numero{

    public function verNumero($numero){
        $elNum = "Es incorrecto";

        if($numero['numero'] === "0" && $numero['numero'] != null){
            $elNum = "El número ingresado es 0";
        }else if($numero['numero'] > "0" && $numero['numero'] != null){
            $elNum = "El número ingresado es positivo";
        }else if($numero['numero'] < "0" && $numero['numero'] != null){
            $elNum = "El numero ingresado es negativo";
        }

        return $elNum;
    }
}

