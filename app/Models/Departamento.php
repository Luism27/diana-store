<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    //relacion uno muchos
    public function ciudades(){
        return $this->hasMany('App\models\Ciudade');
    }
}
