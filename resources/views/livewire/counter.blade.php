<div>

@if ($count == 0)
<div style=" background-color: red;">
@elseif ($count < 10) 
<div style=" background-color: yellow;">
@else
<div style=" background-color: green;">
@endif

    {{$count}}

    <br>
    <button wire:click="increment" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">incrementar</button>
</div>
</div>
