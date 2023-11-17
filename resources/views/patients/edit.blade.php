@extends ('layouts.patients')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Editar paciente</h1>

    <div class="flex">
        <form method="POST" action="{{ route ('patients.update', $patient->id)}}">
            @csrf
            @method ('PUT')

        <x-card nombre="Modificar Paciente" bgcolor="a0aFFF" ancho="800">
               <x-slot:texto>
                <br>

                <x-field name="nombre" label="Nombre" :value="$patient->nombre" />
                <x-field name="apellido1" label="Primer apellido" :value="$patient->apellido1" />
                <x-field name="apellido2" label="Segundo apellido" :value="$patient->apellido2" />
                <x-field name="email" label="Email" :value="$patient->email" />

               </x-slot:texto>
               <x-slot:botones>
                    <button type="submit" class="text-white bg-slate-300 p-1 m-4">Guardar</button>
               </x-slot:botones> 
        </x-card>
        </form>
        <hr>
        
   
    </div>
@endsection