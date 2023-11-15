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
   @auth
   {{ Auth::user()->name }}
   @endauth 
   @guest
       Usuario anonimo
   @endguest

   @cannot('doctorCreate')
   <a href="{{ route ('doctors.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo doctor</a>
   @else   
    adsfasdfs 
   @endcannot
   
  @canany (['doctorCreate', 'doctorEdit'])
  asdfasdf  
  @endcanany

  @hasanyrole (['doctorCreate', 'doctorEdit'])
  XXXXXXXXXXXXXXx
  @endhasanyrole

  @role ('admin')
  Tiene rol admin
  @else
  No tiene rol admin
  @endrole


  @mirol ('admin')
    Tiene el rol admin o eso le he pasado como parámetro
    Tiene el rol admin o eso le he pasado como parámetro
    Tiene el rol admin o eso le he pasado como parámetro
    Tiene el rol admin o eso le he pasado como parámetro
    Tiene el rol admin o eso le he pasado como parámetro
    Tiene el rol admin o eso le he pasado como parámetro
    Tiene el rol admin o eso le he pasado como parámetro
    Tiene el rol admin o eso le he pasado como parámetro
    @else 
    Esto es otro caso
  @endmirol
  </div>          
    <x-listado rutashow="doctors.show" :items="$doctors"/>
<!--
    {{-- $doctors->links () --}}
-->

{{ $doctors->total() }}
<br>{{ $doctors->currentPage()}}
@endsection