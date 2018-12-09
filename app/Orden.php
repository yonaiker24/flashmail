<?php

namespace flashmail;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = 'Ordenes';

    protected $fillable = ['direccion', 'nombre_destinatario','apellido_destinatario'];
}
