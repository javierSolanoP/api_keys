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

        // Declaramos el array 'valid', para almacenar las propiedades validadas: 
        $valid = [];

        //Se valida que los campos no esten vacios:
        if (!empty($data->new_nombre_centro)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->new_nombre_centro)) {

                // Agregamos el campo validado: 
                $valid['new_nombre_centro'] = true;
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"El nombre del centro no debe contener numeros" }');
            }
        }else{
            die('{"registrar":false, "error":"El campo new_nombre_centro no debe estar vacio"}');
        }

        //Se valida que los campos no esten vacios:
        if (!empty($data->direccion)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->direccion)) {

                // Agregamos el campo validado: 
                $valid['direccion'] = true;
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

                // Agregamos el campo validado: 
                $valid['telefono'] = true;
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"Telefono erroneo" }');
            }

        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo telefono no debe estar vacio"}');
        }

        // Retornamos la respuesta: 
        return ['registrar' => true, 'campos' => $valid];

    }

    //Metodo para actualizar las propiedades de la instancia de la Clase 'CentroFormacion':
    public function updateData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        // Declaramos el array 'valid', para almacenar las propiedades validadas: 
        $valid = [];

        //Se valida que los campos no esten vacios:
        if (!empty($data->new_nombre_centro)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->new_nombre_centro)) {

                // Agregamos el campo validado: 
                $valid['new_nombre_centro'] = true;
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"El nombre del centro no debe contener numeros" }');
            }
        }else{
            die('{"registrar":false, "error":"El campo new_nombre_centro no debe estar vacio"}');
        }

        //Se valida que los campos no esten vacios:
        if (!empty($data->direccion)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->direccion)) {

                // Agregamos el campo validado: 
                $valid['direccion'] = true;
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

                // Agregamos el campo validado: 
                $valid['telefono'] = true;
            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"Telefono erroneo" }');
            }

        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo telefono no debe estar vacio"}');
        }

        // Retornamos la respuesta: 
        return ['registrar' => true, 'campos' => $valid];


    }

}
