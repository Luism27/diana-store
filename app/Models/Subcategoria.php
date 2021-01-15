<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    //Url amigable

    public function getRouteKeyName()
    {
        return 'slug';
    }
    //relacion uno a muchos

    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }

    //Relacion uno a muchos inversa
    public function categoria(){
        return $this->belongsTo('App\Models\categoria');
    }
}
