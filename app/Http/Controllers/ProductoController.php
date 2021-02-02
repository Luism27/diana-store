<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::paginate(4);
        return view('pages.productos.producto-index',compact('productos'));
    }

    public function show(Producto $producto){
        return view('pages.productos.producto-show',compact('producto'));
    }
}
