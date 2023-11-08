@extends ('layout')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Cuadro Médico</h1>

    <div class="flex">
   
        @php 
            //dd ($doctor)
        @endphp
        
        <x-card nombre="{{ $doctor[1] }} {{ $doctor[2]}}" bgcolor="a0a0FF" texto="{{ $doctor[3] }}" >
               <x-slot:botones>
                    <a href="{{ route ('doctors.create') }}" class="text-white bg-slate-300 p-1 m-4">Ver</a>
                    <a href="{{ route ('doctors.edit', $doctor[0]) }}" class="text-white bg-slate-300 p-1 m-4">Modificar</a>
                    <form method="post" action="{{ route ('doctors.destroy', $doctor[0])}}">
                        @csrf
                        @method ('DELETE')
                        <button type="submit" class="text-white bg-slate-300 p-1 m-4">Borrar</button>
                    </form>
               </x-slot:botones> 
        </x-card>
        <hr>
        
   
    </div>
@endsection