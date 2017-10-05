<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacientesv extends Model
{
	protected $table = 'pacientesv';
    protected $fillable =['nombre','edad','peso','talla','genero','cama'];
}
