@extends ('layout')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Cuadro Médico</h1>

    <div class="flex">
        <form method="POST" action="{{ route ('doctors.store')}}">
            @csrf
        <x-card nombre="Nuevo Doctor" bgcolor="a0a0FF" ancho="80">
               <x-slot:texto>
                <br>
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="">
<br>&nbsp;<br>
    <label for="especialidad">Especialidad:</label>
    <input type="text" name="especialidad" id="especialidad" value="">

               </x-slot:texto>
               <x-slot:botones>
                    <button type="submit" class="text-white bg-slate-300 p-1 m-4">Ver</button>
               </x-slot:botones> 
        </x-card>
        </form>
        <hr>
        
   
    </div>
@endsection