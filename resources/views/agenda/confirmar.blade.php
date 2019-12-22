@extends('plantilla.plantilla')

@section('titulo', 'confirmar')
<a href="{{ route('agenda.index') }}">volver</a>
@section('contenido')
    <div class="container py-5">
        <h1>¿Deseas el registro de {{ $agenda->nombres }} {{ $agenda->apellidos }}?</h1>
    
    <br>
    <form action="{{ route('agenda.destroy', $agenda->id) }}" method="post">
        @csrf
        <button type="submit" class="redondo btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>
        <a class="redondo btn btn-info" href="{{ route('cancelar') }}">Cancelar</a>
    </form>
</div>
@endsection


