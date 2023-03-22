<?php

namespace App\Helpers;

class Util{

    /*----- CODIGO UNIDAD -----*/
    static function codigoUnidad($dato){
        return 'CA'. str_pad($dato, 4, "0", STR_PAD_LEFT);
    }

    /*----- CODIGO SEDE -----*/
    static function codigoSede($dato){
        return 'CS'. str_pad($dato, 4, "0", STR_PAD_LEFT);
    }

    /*----- COLOR ESTADO TABLA PERSONAL -----*/
    public static function estadoPersonalColor($estado){
        if($estado == '1'){
            $color = 'success';
        }else {
            $color = 'danger';
        }
        return $color;
    }

    /*----- COLOR ESTADO TABLA USUARIO -----*/
    public static function estadoUsuariolColor($estado){
        if($estado == '1'){
            $color = 'success';
        }else {
            $color = 'danger';
        }
        return $color;
    }

}