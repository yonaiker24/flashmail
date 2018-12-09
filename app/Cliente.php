<?php

namespace flashmail;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'Clientes';

    protected $fillable = ['nombre', 'apellido','fecha_nacimiento','usuario_id'];
}
