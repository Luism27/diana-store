<?php

namespace App\Http\Livewire;

use App\Models\Departamento;
use Livewire\Component;

class DepartamentoSearch extends Component
{
    public $query;
    public $departamentos;
    protected $listeners = ['clickk'];
    public function mount(){
        $this->query = '';
        $this->departamentos = [];
    }
    
    public function clickk($departamento){
        $this->query = $departamento;
        $this->departamentos = [];
    }

    public function updatedQuery(){
        if(empty($this->query)){
            $this->departamentos = [];
        } else{

            $this->departamentos = Departamento::where('name','like','%' . $this->query . '%')->get();
        }
    }

    public function render()
    {
        return view('livewire.departamento-search');
    }
}
