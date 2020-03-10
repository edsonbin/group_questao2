<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    protected $fillable = ['nome', 'sobreNome'];

    public function unidade()
    {
        return $this->belongsTo('App\Unidade');
    }
//
}
