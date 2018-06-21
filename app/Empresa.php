<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function funcionario(){
        return $this->hasMany('App\Funcionario', 'empresa_id', 'id');
    }
}

