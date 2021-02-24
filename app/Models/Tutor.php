<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table='tutores';

    protected $fillable = [
        'empresa',
        'tipoDocumento',
        'documentoIdentidad',
        'name',
        'apellido1',
        'apellido2',
        'pais',
        'provincia',
        'municipio',
        'estado',
        'telefono',
        'email',
    ];
}
