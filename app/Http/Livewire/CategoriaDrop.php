<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Livewire\Component;

class CategoriaDrop extends Component
{
    public function render()
    {
        // $categorias = Categoria::all();
        $categorias = categoria::all();
        return view('livewire.categoria-drop',compact('categorias'));
    }
}
