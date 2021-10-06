<?php

namespace App\Http\Controllers\Require\Trait;

use App\Http\Controllers\Require\Class\Validate;

trait MetodoUsuario{

    //Metodo para validar las propiedades de la instancia de la Clase 'CentroFormacion':
    public function registerData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        // Declaro el array 'valid', para almacenar los campos validados: 
        $valid = [];

        //Se valida que el campo on esté vacio:
        if (!empty($data->identificacion)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->identificacion)) {

                //Agregamos el campo validado :D
                $valid['identificacion'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"La identificacion debe contener caracteres alfanumericos" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo identificacion no debe estar vacio"}');
        }

        //Se valida que el campo on esté vacio:
        if (!empty($data->nombre)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->nombre)) {

                //Agregamos el campo validado :D
                $valid['nombre'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo nombre es nulo" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nombre no debe estar vacio"}');
        }

        //Se valida que el campo on esté vacio:
        if (!empty($data->apellidos)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->apellidos)) {

                //Agregamos el campo validado :D
                $valid['apellidos'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo apellidos es nulo" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo apellidos no debe estar vacio"}');
        }

        if (!empty($data->email)) {

            //Se valida que el campo sea un String:
            if ($validate->validateEmail($data->email)) {

                //Agregamos el campo validado :D
                $valid['email'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo email es nulo" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo email no debe estar vacio"}');
        }

        if (!empty($data->codigo_barras)) {

            //Se valida que el campo sea un String:
            if ($validate->validateNumber($data->codigo_barras)) {

                //Agregamos el campo validado :D
                $valid['codigo_barras'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo codigo_barras debe ser un numero" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo codigo_barras no debe estar vacio"}');
        }

        if (!empty($data->telefono)) {

            //Se valida que el campo sea un String:
            if ($validate->validateNumber($data->telefono)) {

                //Agregamos el campo validado :D
                $valid['telefono'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo telefono debe ser un numero" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo telefono no debe estar vacio"}');
        }


        //  Retornamos la respuesta: 
        return ['registrar' => true, 'campos' => $valid];

    }


    //Metodo para actualizar los datos de las propiedades
    public function updateData(){

        //Se asigna la sesion 'registrar' en la varaible:
        $data = $_SESSION['registrar'];

        //Se instancia la clase 'Validate', para validar los datos de las propiedades:
        $validate = new Validate;

        // Declaro el array 'valid', para almacenar los campos validados: 
        $valid = [];

        //Se valida que el campo on esté vacio:
        if (!empty($data->identificacion)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->identificacion)) {

                //Agregamos el campo validado :D
                $valid['identificacion'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"La nuevo_identificacion debe contener caracteres alfanumericos" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nuevo_identificacion no debe estar vacio"}');
        }

        //Se valida que el campo on esté vacio:
        if (!empty($data->nombre)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->nombre)) {

                //Agregamos el campo validado :D
                $valid['nombre'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo nuevo_nombre es nulo" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nuevo_nombre no debe estar vacio"}');
        }

        //Se valida que el campo on esté vacio:
        if (!empty($data->apellidos)) {

            //Se valida que el campo sea un String:
            if ($validate->validateString($data->apellidos)) {

                //Agregamos el campo validado :D
                $valid['apellidos'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo nuevo_apellidos es nulo" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nuevo_apellidos no debe estar vacio"}');
        }

        if (!empty($data->email)) {

            //Se valida que el campo sea un String:
            if ($validate->validateEmail($data->email)) {

                //Agregamos el campo validado :D
                $valid['email'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo nuevo_email es nulo" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nuevo_email no debe estar vacio"}');
        }

        if (!empty($data->codigo_barras)) {

            //Se valida que el campo sea un String:
            if ($validate->validateNumber($data->codigo_barras)) {

                //Agregamos el campo validado :D
                $valid['codigo_barras'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo nuevo_codigo_barras debe ser un numero" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nuevo_codigo_barras no debe estar vacio"}');
        }

        if (!empty($data->telefono)) {

            //Se valida que el campo sea un String:
            if ($validate->validateNumber($data->telefono)) {

                //Agregamos el campo validado :D
                $valid['telefono'] = true;

            }else{

                //Retornamos el error :/ :
                die('{ "registrar":false, "error":"El campo nuevo_telefono debe ser un numero" }');
            }
        }else{

            //Retornamos el error :/ ):
            die('{"registrar":false, "error":"El campo nuevo_telefono no debe estar vacio"}');
        }


        //  Retornamos la respuesta: 
        return ['registrar' => true, 'campos' => $valid];

    }

    

}

