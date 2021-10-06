<?php

namespace App\Http\Controllers\Modulo_llaves\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Modulo_llaves\Class\CentroFormacion as ClassCentroFormacion;
use App\Models\CentroFormacion;
use Exception;
use Illuminate\Http\Request;

class CentroFormacionController extends Controller
{
    // Metodo para retornar todos los registros de la tabla de la DB: 
    public function index()
    {
        //Realizamos la consulta a la tabla de la DB: 
        $model = CentroFormacion::select('nombre_centro as centro')->get();

        // Retornamos la respuesta: 
        return ['query' => true, 'centros' => $model];
    }

    // Metodo para registrar un registro en la tabla de la DB:
    public function store(Request $request)
    {
        // Si el argumento contiene caracteres de tipo mayusculas, los pasamos a tipo minusculas. Para seguir una nomenclatura estandar: 
        $nombre_centro = strtolower($request->input(key: 'nombre_centro'));

        // Validamos que el argumento no este vacio: 
        if(!empty($nombre_centro)
        && !empty($request->input(key: 'direccion'))
        && !empty($request->input(key: 'telefono'))){

            // Realizamos la constulta a la tabla de la DB: 
            $model = CentroFormacion::where('nombre_centro', $nombre_centro);

            // Validamos que no exista el centro en la tabla de la DB: 
            $validarCentro = $model->first();

            // Sino existe, validamos el argumento: 
            if(!$validarCentro){

                // Instanciamos la clase 'CentroFormacion', para validar el argumento: 
                $centro = new ClassCentroFormacion(nombre_centro: $nombre_centro,
                                                   direccion: $request->input(key: 'direccion'),
                                                   telefono: $request->input(key: 'telefono'));

                // Asignamos a la sesion 'registrar' la instancia 'centro', con sus propiedades cargadas de data: 
                $_SESSION['registrar'] = $centro;  

                // Validamos las propiedades: 
                $validarCentroArgm = $centro->registerData();

                // Si las propiedades han sido validadas, realizamos el registro: 
                if($validarCentroArgm['registrar']){

                    try{
                        
                        CentroFormacion::create(['nombre_centro' => $nombre_centro,
                                                 'direccion' => $request->input(key: 'direccion'),
                                                 'telefono' => $request->input(key: 'telefono')]);

                        // Retornamos la respuesta: 
                        return $validarCentroArgm;

                    }catch(Exception $e){
                        // Retornamos el error: 
                        return ['registrar' => false, 'error' => $e->getMessage()];
                    }

                }else{
                    // Retornamos el error: 
                    return $validarCentroArgm;
                }

            }else{
                // Retornamos el error: 
                return ['registrar' => false, 'error' => 'Ya existe ese centro en el sistema.'];
            }

        }else{
            // Retornamos el error: 
            return ['registrar' => false, 'error' => "Campo 'nombre_centro' o 'direccion' o 'telefono': No deben estar vacio."];
        }
    }

    // Metodo para retornar un registro especifico de la tabla de la DB: 
    public function show($nombre_centro)
    {
        //
    }

    // Metodo para actualizar un registro especifico de la tabla de la  DB: 
    public function update(Request $request, $nombre_centro)
    {
        // Si el argumento contiene caracteres de tipo mayusculas, los pasamos a tipo minusculas. Para seguir una nomenclatura estandar: 
        $new_nombre_centro = strtolower($request->input(key: 'new_nombre_centro'));

        // Validamos que el argumento no este vacio: 
        if(!empty($new_nombre_centro)
        && !empty($request->input(key: 'new_direccion'))
        && !empty($request->input(key: 'new_telefono'))){

            // Realizamos la constulta a la tabla de la DB: 
            $model = CentroFormacion::where('nombre_centro', $nombre_centro);

            // Validamos que exista el centro en la tabla de la DB: 
            $validarCentro = $model->first();

            // Si existe, validamos el argumento: 
            if($validarCentro){

                // Instanciamos la clase 'CentroFormacion', para validar el argumento: 
                $centro = new ClassCentroFormacion(nombre_centro: $new_nombre_centro,
                                                   direccion: $request->input(key: 'new_direccion'),
                                                   telefono: $request->input(key: 'new_telefono'));

                // Asignamos a la sesion 'registrar' la instancia 'centro', con sus propiedades cargadas de data: 
                $_SESSION['registrar'] = $centro;  

                // Validamos las propiedades: 
                $validarCentroArgm = $centro->updateData();

                // Si las propiedades han sido validadas, realizamos el registro: 
                if($validarCentroArgm['registrar']){

                    try{
                        
                        $model->update(['nombre_centro' => $new_nombre_centro,
                                        'direccion' => $request->input(key: 'new_direccion'),
                                        'telefono' => $request->input(key: 'new_telefono')]);

                        // Retornamos la respuesta: 
                        return $validarCentroArgm;

                    }catch(Exception $e){
                        // Retornamos el error: 
                        return ['registrar' => false, 'error' => $e->getMessage()];
                    }

                }else{
                    // Retornamos el error: 
                    return $validarCentroArgm;
                }

            }else{
                // Retornamos el error: 
                return ['registrar' => false, 'error' => 'No existe ese centro en el sistema.'];
            }

        }else{
            // Retornamos el error: 
            return ['registrar' => false, 'error' => "Campo 'new_nombre_centro' o 'new_direccion' o 'new_telefono': No deben estar vacio."];
        }
    }

    // Metodo para eliminar un registro de la tabla de la DB: 
    public function destroy($id)
    {
        //
    }
}
