@extends ('layouts.doctors')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Cuadro Médico</h1>



  


    @foreach ($errors->all() as $error)
   {{ $error}}
    
    @endforeach

    <div class="flex">
        <form method="POST" action="{{ route ('doctors.store')}}">
            @csrf
        <x-card nombre="Nuevo Doctor" bgcolor="a0a0FF" ancho="800">
               <x-slot:texto>
                <br>


 

    <x-field name="nombre" label="Nombre" :value="old('nombre')" />
    <x-field name="apellido1" label="Primer apellido" :value="old('apellido1')" />
    <x-field name="apellido2" label="Segundo apellido" :value="old('apellido2')" />
    <x-field name="especialidad" label="Especialidad" :value="old('especialidad')" />
    <x-field name="telefono" label="Teléfono" :value="old('telefono')" />
    <x-field name="dni" label="DNI" :value="old('dni')" />
    <x-field name="email" label="Email" :value="old('email')" />
   

               </x-slot:texto>
               <x-slot:botones>
                    <button type="submit" class="text-white bg-slate-300 p-1 m-4">Guardar</button>
               </x-slot:botones> 
        </x-card>
        </form>
        <hr>
        
   
    </div>
@endsection