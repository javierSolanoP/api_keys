<?php

namespace App\Http\Controllers\Modulo_llaves\Class;

class CentroFormacion {

    public function __construct(
        private $nombre_centro  = '',
        private $direccion = '',
        private $telefono = ''
    ){}
}