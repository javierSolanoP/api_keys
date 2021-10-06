<?php

namespace App\Http\Controllers\Modulo_usuarios\Class;

use App\Http\Controllers\Require\Trait\MetodoPermiso;

class Permiso {
    public function __construct(
        private $nombre_permiso
    ){}

    //Se importa el trait 'MetodoRole', para validar las propiedades;
    use MetodoPermiso;
}