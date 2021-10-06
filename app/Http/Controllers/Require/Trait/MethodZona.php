<?php

namespace App\Http\Controllers\Require\Trait;

use App\Http\Controllers\Require\Class\Validate;

trait MethodZona{

    //Metodo para validar las propiedades de la instancia de la Clase 'Zona':
    public function registerData(){
        //Se asigna la sesion 'registrar' en la variable: 
        $data = $_SESSION['registrar'];

        //Se instancia la Clase 'Validate', para validar los datos que contienen las propiedades: 
        $validate = new Validate;

        //Se valida que el campo 'nombre_zona' no esté vacio:
        if (!empty($data->nombre_zona)) {

            //Validamos la propiedad 'nombre_zona':
            if ($validate->validateString($data->nombre_zona)) {

                //Retornamos la respuesta:
                return ['registrar' => true];
            }else{

                //Retornamos el error:
                die('{ "register":false, "error":"El nombre de la zona no debe contener numeros" }');
            }

        }else{
            die('{"register":false, "error":"El campo nombre_zona no debe estar vacio"}');
        }

    }

    //Metodo para actualizar las propiedades de la instancia de la Clase 'Zona':
    public function updateData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la Clase 'Validate', para validar los datos que contienen las propiedades: 
        $validate = new Validate;

        if (!empty($data->nombre_zona)) {

            if ($validate->validateString($data->nombre_zona)) {

                //Retornamos la respuesta:
                return ['registrar' => true];
            }else{

                //Retornamos el error:
                die('{ "register":false, "error":"El nombre de la zona no debe contener numeros" }');
            }

        }else{
            die('{"register":false, "error":"El campo nuevo_nombre_zona no debe estar vacio"}');
        }

    }


}

