
@isset($ancho)
<div style="background-color: #{{ $bgcolor}}" class="flex-initial w-{{$ancho}} m-2 p-4">
    @else
<div style="background-color: #{{ $bgcolor}}" class="flex-initial w-32 m-2 p-4">
@endisset
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h2>{{ $nombre}}</h2>
    @isset($fecha)
    <h3>{{ $fecha }}</h3>     
    @endisset
   
    {!! $texto !!}
    @isset($botones)
    <div>
        {{ $botones }}
    </div>
    @endisset
</div>