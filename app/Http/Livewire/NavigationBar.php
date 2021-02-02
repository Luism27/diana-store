<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class NavigationBar extends Component
{
    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.navigation-bar',compact('categorias'));
    }
}
