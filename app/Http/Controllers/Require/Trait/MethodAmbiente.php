<?php

namespace App\Http\Controllers\Require\Trait;

use App\Http\Controllers\Require\Class\Validate;

trait MetodoAmbiente{

    //Metodo para validar las propiedades de la instancia de la Clase 'ambiente':
    public function registerData(){

        //Se asigna la sesion 'registrar' en la variable: 
        $data = $_SESSION['registrar'];

        //Se instancia la Clase 'Validate', para validar los datos que contienen las propiedades: 
        $validate = new Validate;

        if(!empty($data->nombre_ambiente)){
            if ($validate->validateString($data->nombre_ambiente)) {

                //Retornamos la respuesta:
                return ['registrar' => true];
    
            }else{
    
                //Retornamos el error:
                die('{"register" : false, "error" : "error, el nombre del ambiente no debe tener numeros"}');
            }
        }else{
            //Retornamos el error:
            die('{"register" : false, "error" : "Campo nombre_ambiente: No debe estar vacio."}');
        }

    }

    public function updateData(){

         //Se asigna la sesion 'registrar' en la variable: 
         $data = $_SESSION['registrar'];

         //Se instancia la Clase 'Validate', para validar los datos que contienen las propiedades: 
         $validate = new Validate;
 
         if(!empty($data->nombre_ambiente)){
             if ($validate->validateString($data->nombre_ambiente)) {
 
                 //Retornamos la respuesta:
                 return ['registrar' => true];
     
             }else{
     
                 //Retornamos el error:
                 die('{"register" : false, "error" : "error, el nombre del ambiente no debe tener numeros"}');
             }
         }else{
             //Retornamos el error:
             die('{"register" : false, "error" : "Campo nuevo_nombre_ambiente: No debe estar vacio."}');
         }

    }

}


