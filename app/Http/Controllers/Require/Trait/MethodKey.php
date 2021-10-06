<?php

namespace App\Http\Controllers\Require\Trait;

use App\Http\Controllers\Require\Class\Validate;

trait MetodoLlaves{

    public function registrarLlave(){
        $validar = new Validate;

        if(isset($_SESSION['registrar'])){
            $data = $_SESSION['registrar'];

            if($validar->validateString($data->imagen_llave)){
                return ['registrar' => true];
            }else{
                return ['registrar' => false, 'error' => 'error al enviar la imagen'];
            }

            if ($validar->validateString($data->url_codigo_qr)) {
                return ['registrar' => true];
            }else{
                return ['registrar' => false, 'error' => 'el codigo url no es una url'];
            }

            if ($validar->validateString($data->codigo_llaave)) {
                return ['registrar' => true];
            }else{
                return ['registrar' => false, 'error' => 'codigo de llave invalido'];
            }


        }

    }

}
