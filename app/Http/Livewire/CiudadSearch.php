<?php

namespace App\Http\Livewire;

use App\Models\Ciudade;
use App\Models\Departamento;
use Livewire\Component;

class CiudadSearch extends Component
{   
    public $query;
    public $ciudades;
    public $isfinish;
    public function mount(){
        $this->reset();
    }
    public function resett(){
        $this->query = "";
        $this->ciudades = [];
        $this->isfinish = false;
        $this->emit('clickk',""); 
    }

    public function updatedQuery(){
        if(empty($this->query)){
            $this->resett();
        }
        $this->ciudades = Ciudade::where('name','like','%'.$this->query.'%')->get();
    }
    public function clickk($ciudade){
        $funcion = new DepartamentoSearch();
        $departamento = Ciudade::where('name',$ciudade)->first()->departamento;
        $this->query = $ciudade;
        // $this->ciudades = [];
        // echo $departamento;
        $this->isfinish = true;
        $this->emit('clickk',$departamento->name); 
    }
    public function render()
    {
        return view('livewire.ciudad-search');
    }
}
