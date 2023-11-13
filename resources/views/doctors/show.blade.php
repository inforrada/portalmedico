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
        
        <x-card nombre="{{ $doctor->nombre }} {{ $doctor->apellido1}}" bgcolor="a0a0FF" ancho="500">
               <x-slot:texto>
                    <p>Especialidad: {{ $doctor->especialidad }}</p>
                    <p>Email: {{ $doctor->email}}</p>
                    <p>DNI: {{ $doctor->dni}}</p>
                    <p>Teléfono: {{ $doctor->telefono}}</p>
                    
               </x-slot:texto> 
               <x-slot:botones>
                    <a href="{{ route ('doctors.edit', $doctor->id) }}" class="text-white bg-slate-300 p-1 m-4">Modificar</a>
                    <form method="post" action="{{ route ('doctors.softdelete', $doctor->id)}}">
                        @csrf
                        @method ('PATCH')
                        <button type="submit" class="text-white bg-slate-300 p-1 m-4">Baja lógica</button>
                    </form>

                    <form method="post" action="{{ route ('doctors.destroy', $doctor->id)}}">
                        @csrf
                        @method ('DELETE')
                        <button type="submit" class="text-white bg-slate-300 p-1 m-4">Borrar</button>
                    </form>
               </x-slot:botones> 
        </x-card>
        <hr>
        
   
    </div>
@endsection