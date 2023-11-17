@extends ('layouts.patients')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Ver paciente</h1>

    <div class="flex">
   

        
        <x-card nombre="{{ $patient->nombre }} {{ $patient->apellido1}}" bgcolor="a0aFFF" ancho="500">
               <x-slot:texto>
                    <p>Email: {{ $patient->email}}</p>
                    
               </x-slot:texto> 
               <x-slot:botones>
                    <a href="{{ route ('patients.edit', $patient->id) }}" class="text-white bg-slate-300 p-1 m-4">Modificar</a>
                    

                    <form method="post" action="{{ route ('patients.destroy', $patient->id)}}">
                        @csrf
                        @method ('DELETE')
                        <button type="submit" class="text-white bg-slate-300 p-1 m-4">Borrar</button>
                    </form>
               </x-slot:botones> 
        </x-card>
        <hr>
        
   
    </div>
@endsection