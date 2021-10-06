<?php

namespace App\Http\Controllers\Require\Trait;

use App\Http\Controllers\Require\Class\Validate;

trait MetodoCentroFormacion{

    //Metodo para validar las propiedades de la instancia de la Clase 'CentroFormacion':
    public function registerData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        //Se valida que los campos no esten vacios:
        if (!empty($data->nombre_centro)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->nombre_centro)) {

                //Retornamos la respuesta!!! :D:
                return ['registrar' => true];
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"El nombre del centro no debe contener numeros" }');
            }
        }else{
            die('{"registrar":false, "error":"El campo nombre_centro no debe estar vacio"}');
        }

        //Se valida que los campos no esten vacios:
        if (!empty($data->direccion)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->direccion)) {

                //Retornamos la respuesta!!! :D:
                return ['registrar' => true];
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"El nombre del centro no debe contener numeros" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo direccion no debe estar vacio"}');
        }

        if (!empty($data->telefono)) {

            if ($validate->validateString($data->telefono)) {

                //Retornamos la respuesta :D ):
                return ['registrar' => true];
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"Telefono erroneo" }');
            }

        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo telefono no debe estar vacio"}');
        }

    }

    //Metodo para actualizar las propiedades de la instancia de la Clase 'CentroFormacion':
    public function updateData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        //Se valida que los campos no esten vacios:
        if (!empty($data->nombre_centro)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->nombre_centro)) {

                //Retornamos la respuesta!!! :D:
                return ['registrar' => true];
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"El nuevo_nombre del centro no debe contener numeros" }');
            }
        }else{
            die('{"registrar":false, "error":"El campo nuevo_nombre_centro no debe estar vacio"}');
        }

        //Se valida que los campos no esten vacios:
        if (!empty($data->direccion)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->direccion)) {

                //Retornamos la respuesta!!! :D:
                return ['registrar' => true];
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"El nombre del nuevo_centro no debe contener numeros" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nuevo_direccion no debe estar vacio"}');
        }

        if (!empty($data->telefono)) {

            if ($validate->validateString($data->telefono)) {

                //Retornamos la respuesta :D ):
                return ['registrar' => true];
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"Telefono erroneo" }');
            }

        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nuevo_telefono no debe estar vacio"}');
        }

    }

}
