<?php

namespace flashmail;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'Usuarios';

    protected $fillable = ['correo', 'contrasena'];
    

}
