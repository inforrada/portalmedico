@extends ('layout')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Cuadro Médico</h1>

   @if ($message = Session::get('message'))
    <div> 
        @if ($code = Session::get ('code'))
            {{ $code }}&nbsp;-&nbsp; 
        @endif
        {{ $message }}</div>
   @endif
   <div>
   <a href="{{ route ('doctors.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo doctor</a>
   </div>          
    <x-listado rutashow="doctors.show" :items="$doctors"/>
<!--
    {{-- $doctors->links () --}}
-->

{{ $doctors->total() }}
<br>{{ $doctors->currentPage()}}
@endsection