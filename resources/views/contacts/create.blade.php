@extends ('layouts.app')

@section ('menu')

<x-menu />  

@endsection

@section ('content')
    <h1>Contacto</h1>

    <form method="POST" action="{{route ('contacts.store')}}">
        @csrf

        <input type="text" name="name" placeholder="Tu nombre"><br>
        <input type="email" name="correo" placeholder="Tu email de contacto"><br>
        <textarea name="msg" placeholder="Tu mensaje aquí"></textarea><br>
        <button type="submit">Enviar</button>
    </form>


  


   
@endsection