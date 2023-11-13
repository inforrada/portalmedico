<div class="flex">
    @foreach ($items as $key => $item)
       
        <x-card nombre="{{ $item->nombre }} {{ $item->apellido1}}" bgcolor="a0a0FF" texto="{{ $item->especialidad }}" >
               <x-slot:botones>
                    <a href="{{ route ($rutashow, $item->id) }}" class="text-white bg-slate-300 p-1 m-4">Ver</a>
               </x-slot:botones> 
        </x-card>
        <hr>
        
    @endforeach
    </div>