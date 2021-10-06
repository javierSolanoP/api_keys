<?php 

namespace App\Http\Controllers\Modulo_usuarios\Class;

use App\Http\Controllers\Require\Trait\MetodoUsuario;

class Usuario {
    public function __construct(
        private $identificacion = '',
        private $nombre = '',
        private $apellidos = '' ,
        private $email = '',
        private $telefono = ''
    ){}

    use MetodoUsuario;
}

