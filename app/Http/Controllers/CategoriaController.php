<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Categoria $categoria){
        return view('pages.categorias.categoria.categoria-show',compact('categoria'));
    }
    public function subcategoria(Categoria $categoria,Subcategoria $subcategoria ){
        return view('pages.categorias.subcategoria.subcategoria-show',compact('subcategoria'));
    }
}
