@extends ('layouts.doctors')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Cuadro Médico</h1>

    <div class="flex">
        <form method="POST" action="{{ route ('doctors.update', $doctor->id)}}">
            @csrf
            @method ('PUT')

        <x-card nombre="Modificar Doctor" bgcolor="a0a0FF" ancho="800">
               <x-slot:texto>
                <br>

                <x-field name="nombre" label="Nombre" :value="$doctor->nombre" />
                <x-field name="apellido1" label="Primer apellido" :value="$doctor->apellido1" />
                <x-field name="apellido2" label="Segundo apellido" :value="$doctor->apellido2" />
                <x-field name="especialidad" label="Especialidad" :value="$doctor->especialidad" />
                <x-field name="telefono" label="Teléfono" :value="$doctor->telefono" />
                <x-field name="dni" label="DNI" :value="$doctor->dni" />
                <x-field name="email" label="Email" :value="$doctor->email" />

               </x-slot:texto>
               <x-slot:botones>
                    <button type="submit" class="text-white bg-slate-300 p-1 m-4">Guardar</button>
               </x-slot:botones> 
        </x-card>
        </form>
        <hr>
        
   
    </div>
@endsection