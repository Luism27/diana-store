<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class SideBarComponent extends Component
{
    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.side-bar-component',compact('categorias'));
    }
}
