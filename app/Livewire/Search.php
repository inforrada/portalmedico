<?php

namespace App\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Search extends Component
{
    public $texto = "";
    public $patients = null; 
    public function render()
    {
       
        if ($this->texto == '') {
            
            $this->patients = new Collection();
            //dd ($this->patients);
        }
        else {
            $this->patients = Patient::where('nombre', 'like', '%' . $this->texto  . '%')->get();
        }
        return view('livewire.buscadores.search');
    }
}
