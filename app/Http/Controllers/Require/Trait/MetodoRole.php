<?php

namespace App\Http\Controllers\Require\Trait;

use App\Http\Controllers\Require\Class\Validate;

trait MetodoRole{

    //Metodo para validar las propiedades de la instancia de la Clase 'Role':
    public function registerData(){

        if(isset($_SESSION['registrar'])){

            //Se asigna la sesion 'registrar' en la varaible:
            $data = $_SESSION['registrar'];

            //Se instancia la clase 'Validate', para validar los datos de las propiedades:
            $validate = new Validate;

            //Validar si el campo no está vacio
            if (!empty($data->nombre_role)) {

                if ($validate->validateString($data->nombre_role)) {

                    //Retornamos la respuesta :D : 
                    return ['registrar' => true];

                }else{

                    //Retornamos la respuesta :/ : 
                    die('{ "registrar":false, "error":"El campo nombre_role debe contener caracteres alfanumericos" }');

                }
            }else{
                //Retornamos la respuesta :/ : 
                die('{"registrar":false, "error":"El campo nombre_role no debe estar vacio"}');
            }
        }
        
    }

    //Metodo para validar las propiedades de la instancia de la Clase 'Role':
    public function updateData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        //Validar si el campo no está vacio
        if (!empty($data->nombre_role)) {

            if ($validate->validateString($data->nombre_role)) {

                //Retornamos la respuesta :D : 
                return ['registrar' => true];

            }else{

                //Retornamos la respuesta :/ : 
                die('{ "registrar":false, "error":"El campo nuevo_nombre_role debe contener caracteres alfanumericos" }');

            }
        }else{
            //Retornamos la respuesta :/ : 
            die('{"registrar":false, "error":"El campo nuevo_nombre_role no debe estar vacio"}');
        }
    }


}