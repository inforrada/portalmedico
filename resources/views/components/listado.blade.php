<div class="flex">
    @foreach ($items as $key => $item)
       
        <x-card nombre="{{ $item[1] }} {{ $item[2]}}" bgcolor="a0a0FF" texto="{{ $item[3] }}" >
               <x-slot:botones>
                    <a href="{{ route ($rutashow, $item[0]) }}" class="text-white bg-slate-300 p-1 m-4">Ver</a>
               </x-slot:botones> 
        </x-card>
        <hr>
        
    @endforeach
    </div>