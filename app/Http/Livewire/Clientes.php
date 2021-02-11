<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;

class Clientes extends Component
{
    public $clientes;
    public $filtro="";
    public $nombre="";
    public $cantidad=0;
    public $confirmar=0;
    public $ver=0;


    public function confirmar(){
        $this->confirmar=1;
    }

    public function mostrarBoton(){
        $this->ver=1;
    }


    public function cambiarNombre($id){
        if ($this->nombre){
            Cliente::find($id)->update(["contacto" => $this->nombre]);
        }
    }

    public function borrarRegistro($id=2){
        Cliente::find($id)->delete();
    }


    public function render()
    {
        $this->clientes=Cliente::where("contacto","like","%".$this->filtro."%")->get();
        $this->cantidad=count($this->clientes);

        return view('livewire.clientes')->layout("layouts.guest");
    }
}
