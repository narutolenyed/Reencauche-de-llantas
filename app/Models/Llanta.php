<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Llanta extends Model
{
    protected $table = 'llantas';

    protected $fillable = [
      'cliente',
      'telefono',
      'tipo_llanta',
      'precio',
      'estado',
      'fecha_ingreso'
    ];
} 
