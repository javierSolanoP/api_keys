<?php

namespace App\Http\Controllers\Require\Trait;

use App\Http\Controllers\Require\Class\Validate;

trait MetodoAcceso{

    //Metodo para validar las propiedades de la instancia de la Clase 'Acceso':
    public function registerData(){

        // Declaro el array 'valid', para almacenar los campos validados: 
        $valid = [];

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        //Se validan que los campos no estén vacios
        if (!empty($data)) {
            
            if ($validate->validateString($data->cedula)) {
                
                //Agregamos el campo validado :D
                $valid['cedula'] = true;

            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"Campo cedula erroneo" }');

            }

        }

        //Se validan que los campos no estén vacios
        if (!empty($data->password) && !empty($data->confirm_password)) {

            //Se valida que el campo sea un String:
            if ($validate->validatePassword($data->confirm_password, $data->password)) {

                //Agregamos el campo validado :D
                $valid['password'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo password debe ser un numero" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo password no debe estar vacio"}');
        }

         //Retornamos la respuesta: 
         return ['registrar' => true, 'campos' => $valid];

    }

    //Metodo para validar las propiedades de la instancia de la Clase 'Acceso':
    public function updateData(){

        // Declaro el array 'valid', para almacenar los campos validados: 
        $valid = [];

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        //Se validan que los campos no estén vacios
        if (!empty($data)) {
            
            if ($validate->validateString($data->cedula)) {
                
                //Agregamos el campo validado :D
                $valid['cedula'] = true;

            }else{

                //Retornamos el error :/ ):
                die('{ "registrar":false, "error":"Campo nueva_cedula erroneo" }');

            }

        }

        //Se validan que los campos no estén vacios
        if (!empty($data->password) && !empty($data->confirm_password)) {

            //Se valida que el campo sea un String:
            if ($validate->validatePassword($data->confirm_password, $data->password)) {

                //Agregamos el campo validado :D
                $valid['password'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo nueva_password debe ser un numero" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo password no debe estar vacio"}');
        }

         //Retornamos la respuesta: 
         return ['registrar' => true, 'campos' => $valid];

    }

}