<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroFormacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_centro',
        'direccion',
        'telefono'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
