@extends ('layout')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Cuadro Médico</h1>


    <div>
    </div>
    <x-listado rutashow="doctors.show" :items="$doctors"/>


@endsection