<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public function Empresa()
    {
        return $this->belongsTo('App\Empresa');
    }
}
