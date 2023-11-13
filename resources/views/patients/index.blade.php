@extends ('layout')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Pacientes</h1>

   @if ($message = Session::get('message'))
    <div> 
        @if ($code = Session::get ('code'))
            {{ $code }}&nbsp;-&nbsp; 
        @endif
        {{ $message }}</div>
   @endif
   <div>
   <a href="{{ route ('patients.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo paciente</a>
   </div>          
   <div class="flex flex-wrap -mb-4">
    @foreach ($patients as $key => $patient)
       
        <x-card nombre="{{ $patient->nombre }} {{ $patient->apellido1}}" bgcolor="a0aFFF" ancho="300" texto="{{ $patient->email }}" >
               <x-slot:botones>
                    <a href="{{ route ('patients.show', $patient->id) }}" class="text-white bg-slate-300 p-1 m-4">Ver</a>
               </x-slot:botones> 
        </x-card>
        <hr>
        
    @endforeach
    </div>
<!--
    {{-- $doctors->links () --}}
-->

@isset ($patients->onEachSide)
<br><hr>
{{ $patients->total() }}
@endisset

@endsection