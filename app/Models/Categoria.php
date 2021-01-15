<?php

namespace App\Models;

use ArrayObject;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Object_;

class Categoria extends Model
{
    use HasFactory;
    //Busqueda por slug
    public function getRouteKeyName()
    {
        return 'slug';
    }


    // Relacion uno a  muchos
    public function subcategorias(){
        return $this->hasMany('App\Models\Subcategoria');
    }
    public function  productos(Categoria $categoria){
        $subcategorias = Subcategoria::where('categoria_id',$categoria->id)->get();
        $productos = new Collection();
        $i=0;
        foreach ($subcategorias as $subcategoria) {
            foreach ($subcategoria->productos as $key => $producto) {
                $productos[$i] =  $producto;
                $i = $i+1;
            }
        }
        return  $productos;
    }
}
