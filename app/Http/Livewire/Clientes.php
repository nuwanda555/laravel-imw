<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;

class Clientes extends Component
{
    public $clientes;
    public $filtro="a";


    public function render()
    {
        $this->clientes=Cliente::where("contacto","like",$this->filtro)->get();

        return view('livewire.clientes');
    }
}
