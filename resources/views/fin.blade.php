@extends ('welcome')

@section ('otrocontenido', 'un texto corto')

@section ('content')
    <h1>Ruta Fin</h1>

    <a href="http://localhost:8000/inicio">Ir a inicio</a><br>
    <a href="{{ url('/inicio') }}">Ir a inicio</a><br>
    <a href="{{ route('index', ['name' => 'Antonio', 'surname' => 'Apellido']) }}">Ir a inicio</a>

    <form method="POST" action="{{ route ('savefile')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nombre" id="nombre"><br>
        <input type="file" name="img" id="img"><br>
        <button type="submit">Enviar</button>
    </form>

    @php
     $codigoHTML ="<strong>texto en negrita</strong>";   
     $valor = 'B';
     $array = [1,2, 3, 5, 7, 11];
    $i = 0;
    @endphp
    {!! $codigoHTML !!}
    <br>
    {{ $codigoHTML }}

    {{-- Comentario en blade --}}

    @if ( $valor == 'A') 
        El valor es A<br>
    @endif

    @unless ($valor == 'A')
        El valor no es A<br>
    @endunless

    @foreach ($array as $key => $item) 
        Posicion {{$key }} <strong>{{ $item }}</strong> <br>
    @endforeach

    @while ($i < 2)
        Elemento {{ $array [$i++]}} <br>

    @endwhile

    @switch ($valor)
        @case ('A')
            la letra es la A<br>
            @break
   
        @case ('B')
            la letra es la B<br>
            @break
        @default 
            defecto
    @endswitch
@endsection

