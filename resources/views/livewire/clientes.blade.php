<div>
    <h1>Filtro:</h1> <input wire:model='filtro' class="w-48 px-3 py-0 pb-2 ml-4 text-5xl border border-gray-400 rounded appearance-none input focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600">
    <h1>Nombre:</h1> <input wire:model='nombre' class="w-1/2 px-3 py-0 pb-2 ml-4 text-5xl border border-gray-400 rounded appearance-none input focus focus:border-indigo-600 focus:outline-none active:outline-none active:border-indigo-600"> <span class="text-5xl text-red-600">{{$cantidad}}</span>




    <h1 class="text-5xl text-red-600">{{$filtro}}</h1>
    @foreach($clientes as $c)
      <button onclick="confirmar()" class="{{$ver==1?'visible':'invisible'}}px-4 py-2 font-bold text-white bg-red-500 border-b-4 border-red-700 rounded hover:bg-red-400 hover:border-red-500">
        Seguro
      </button>



      <button wire:click='mostrarBoton()' class="px-4 py-2 font-bold text-white bg-blue-500 border-b-4 border-blue-700 rounded hover:bg-blue-400 hover:border-blue-500">
        Borrar
      </button>
        <span wire:click="cambiarNombre({{$c->id}})" class="text-5xl {{strtoupper(substr($c->contacto,0,1))=="A"?'text-red-600':''}}">{{$c->contacto}} {{$c->id}}</span>
        <br>
    @endforeach



<script>
    function preguntar(){
        var ok=confirm("¿Estás seguro que quieres borrar el registro?");

        if (ok){


            window.livewire.on('borrarRegistro()', () => {
                lazyImagesInit();
            });

        }
    }
</script>


</div>
