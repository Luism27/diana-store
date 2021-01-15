<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    //Url amigable
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //relacion uno a muchos inversa
    public function subcategoria(){
        return $this->belongsTo('App\Models\Subcategoria');
    }

    //Relacion m t m 
    public function fotos(){
        return $this->hasMany('App\Models\Foto');
    }
    
}
