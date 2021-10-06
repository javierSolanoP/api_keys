<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificacion',
        'nombre',
        'apellido',
        'email',
        'password',
        'telefono',
        'role_id'
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at'
    ];

    // Relacion con el modelo 'Role':
    public function role()
    {
        return $this->belongsTo(related: [Role::class], foreignKey: 'role_id', ownerKey: 'id_role');
    }
}
