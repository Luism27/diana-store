<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
    use HasFactory;
    //uno a muchos inversos
    public function departamento(){
        return $this->belongsTo('App\Models\Departamento');
    }
    //uno a muchos
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
