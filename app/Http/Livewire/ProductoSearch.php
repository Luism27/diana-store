<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class ProductoSearch extends Component
{
    public $query;
    public $productos;

    public function mount()
    {
        $this->resett();
    }

    public function resett()
    {
        $this->query = "";
        $this->productos = [];
    }

    public function updatedQuery(){
        $this->productos = Producto::where('name','like','%'.$this->query.'%')->get();
    }

    public function render()
    {
        return view('livewire.producto-search');
    }
}
