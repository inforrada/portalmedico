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
    <x-listado rutashow="doctors.show" :items="$doctors"/>


@endsection