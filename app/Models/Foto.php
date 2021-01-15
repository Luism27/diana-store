<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    //Relacion m t m 
    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }
    public function principal(Foto $foto){
        $b = false;
        if ($foto->main === 1) {
            $b = true;
        }
        return $b;
    }
}
