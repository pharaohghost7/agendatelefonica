@extends('plantilla.plantilla')

@section('titulo', 'confirmar')

@include('plantilla.nav')
@section('contenido')
    <div class="container py-5">
        <h1>¿Deseas el registro de {{ $agenda->nombres }} {{ $agenda->apellidos }}?</h1>
    
    <br>
    <form action="{{ route('agenda.destroy', $agenda->id) }}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="redondo btn btn-danger"><i class="fas fa-trash-alt"></i>Eliminar</button>
        <a class="redondo btn btn-info" href="{{ route('cancelar') }}"><i class="fas fa-ban"></i> Cancelar</a>
    </form>
</div>

@include('plantilla.footer', ['container'=>'container'])
@endsection


