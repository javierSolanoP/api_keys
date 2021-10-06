<?php

namespace App\Http\Controllers\Require\Trait;

use App\Http\Controllers\Require\Class\Validate;

trait MetodoPermiso{

    //Metodo para validar las propiedades de la instancia de la Clase 'Permiso':
    public function registerData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        if (!empty($data->nombre_permiso)) {
            if ($validate->validateString($data->nombre_permiso)) {

                //Retornamos la respuesta :D : 
                return ['registrar' => true];
            }else{

                //Retornamos la respuesta :/ : 
                die('{ "registrar":false, "error":"El campo nombre_permiso debe contener caracteres alfanumericos" }');
            }
        }else{

            //Retornamos la respuesta :/ : 
            die('{"registrar":false, "error":"El campo nombre_permiso no debe estar vacio"}');
        }

    }

    //Metodo para validar las propiedades de la instancia de la Clase 'Permiso':
    public function updateData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        if (!empty($data->nombre_permiso)) {
            if ($validate->validateString($data->nombre_permiso)) {

                //Retornamos la respuesta :D : 
                return ['register' => true];
            }else{

                //Retornamos la respuesta :/ : 
                die('{ "registrar":false, "error":"El campo nuevo_nombre_permiso debe contener caracteres alfanumericos" }');
            }
        }else{

            //Retornamos la respuesta :/ : 
            die('{"registrar":false, "error":"El campo nuevo_nombre_permiso no debe estar vacio"}');
        }

    }

}