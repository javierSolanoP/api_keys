<?php

namespace App\Http\Controllers\Modulo_usuarios\Class;

use App\Http\Controllers\Require\Trait\MetodoRole;

class Role{
    
    public function __construct(
        private $nombre_role
    ){}

    //Se importa el trait 'MetodoRole', para validar las propiedades;
    use MetodoRole;
}
