@extends ('layouts.patients')

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
   <h1>aquí el buscador</h1>  
   <livewire:search />        


<hr>
   
    <livewire:counter />
    
<hr>
@isset ($patients->onEachSide)
<br><hr>
{{ $patients->total() }}
@endisset

@endsection