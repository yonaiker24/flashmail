<?php

namespace flashmail;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'Direcciones';

    protected $fillable = ['pais', 'estado','ciudad','zona','codigo_postal','cliente_id'];
}
