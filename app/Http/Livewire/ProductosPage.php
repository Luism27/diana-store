<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ProductosPage extends Component
{
    public function render()
    {
        $productos = Producto::all();
        return view('pages.producto-index',compact('productos'));
    }
}
