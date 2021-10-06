<?php

namespace App\Http\Controllers\Modulo_usuarios\Class;

use App\Http\Controllers\Require\Trait\MetodoAcceso;

class Acceso{

    public function __construct(
        private $cedula ='',
        private $password = '',
        private $confirm_password = '',
    ){}

    use MetodoAcceso;

}
