<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    protected $fillable = ['nome', 'endereco'];

    public function unidades()
    {
        return $this->hasMany('App\Unidade');
    }
}
