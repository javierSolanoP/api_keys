<?php

namespace App\Http\Controllers\Modulo_llaves\Class;

use App\Http\Controllers\Require\Trait\MetodoCentroFormacion;

class CentroFormacion {

    public function __construct(
        private $nombre_centro  = '',
        private $direccion = '',
        private $telefono = ''
    ){}

    use MetodoCentroFormacion;
}