@extends('patients.layout')

@section('content')

Contenido definido en el layout principal.

@php
$fecha = '08/11/2023';    
@endphp

<x-card bgcolor="FFA0A0" :nombre="$nombre" fecha="{{$fecha}}">
    
    <x-slot:texto>Introducción a Vite y su relación con Laravel
Configuración de Vite como un entorno de desarrollo
Características y ventajas de Vite en comparación con otros sistemas de compilación
Uso de Vite para actualizar vistas en tiempo real
Ejemplos de aplicaciones en vivo<strong>
Despliegue de aplicaciones Laravel con Vite</strong>
Consideraciones para la implementación en 
    </x-slot:texto>
</x-card>

{{ $nombre }}
<x-card bgcolor="FFA0A0" :nombre="$nombre">
    
    <x-slot:texto>Introducción a Vite y su relación con Laravel
Configuración de Vite como un entorno de desarrollo
Características y ventajas de Vite en comparación con otros sistemas de compilación
Uso de Vite para actualizar vistas en tiempo real
Ejemplos de aplicaciones en vivo<strong>
Despliegue de aplicaciones Laravel con Vite</strong>
Consideraciones para la implementación en 
    </x-slot:texto>
</x-card>

<x-buttons canEdit="1" />
<hr>
<x-buttons canEdit="0" />

@endsection