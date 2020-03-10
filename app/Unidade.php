<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = ['numero'];

    public function condominio()
    {
        return $this->belongsTo('App\Condominio');
    }

    public function morador()
    {
        return $this->hasOne('App\Morador');
    }
}
