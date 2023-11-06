@extends ('welcome')

@section ('content')

    <h1>Vista</h1>

    @isset($name)
    <p>Hola {{ $name }} - {{ $surname }}!</p>
    @endisset
    @isset($phone)
    <p>Teléfono {{ $phone }}</p>
    @endisset

    @yield ('nuevocontenido')
@endsection

@section ('seccionnoexiste')
asdfasdfasd

@endsection