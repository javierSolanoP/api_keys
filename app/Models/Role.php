<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_role'];

    protected $hidden = ['created_at', 'updated_at'];

    // Relacion con el modelo 'Permiso': 
    public function permisos()
    {
        return $this->hasMany(related: Permiso::class, foreignKey: 'role_id', localKey: 'id_role');
    }

    // Relacion con el modelo 'Usuario': 
    public function usuarios()
    {
        return $this->hasMany(related: [Usuario::class], foreignKey: 'role_id', localKey: 'id_role');
    }
}
