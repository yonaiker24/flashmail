<?php

namespace flashmail;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = 'Paquetes';

    protected $fillable = ['contenido', 'peso','orden_id'];
}
