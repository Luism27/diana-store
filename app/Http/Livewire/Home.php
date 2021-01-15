<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $productos = Producto::all();
        return view('livewire.home');
    }
    
}
