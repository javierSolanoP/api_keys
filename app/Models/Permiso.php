<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_permiso', 'role_id'];

    protected $hidden = ['created_at', 'updated_at'];

    // Relacion con el modelo 'Role': 
    public function role()
    {
        return $this->belongsTo(related: Role::class, foreignKey: 'role_id', ownerKey: 'id_role');
    }
}
