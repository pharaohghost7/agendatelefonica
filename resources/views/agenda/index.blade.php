@extends('plantilla.plantilla')

@section('titulo', 'Agenda')

@section('contenido')
    <div class="container-fluid registerinicio">
        <div class="row">
            <div class="col-md-6 register-left register-left1">
                <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt="">
            </div>
            <div class="col-md-6 register-left">
                <h3>Bienvenid@</h3>
                <p>Por favor llena los datos correctamente en el sistema!</p>
            </div>
        </div>
    </div>
    @if (session('datos'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('datos') }}    
            <button type="button" class="close" data-dismiss="alerta" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('cancelar'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('cancelar') }}    
            <button type="button" class="close" data-dismiss="alerta" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="container-fluid">
        <br>
        @include('plantilla.nav')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{ route('agenda.index') }}">Inicio</a></li>
                
            </ol>
        </nav>

        <nav class="navbar navbar-light float-right">
            <form class="form-inline">
                <select name="tipo" class="custom-select float-right">
                    <option selected>Tipo</option>
                    <option value="nombres">nombres</option>
                    <option value="apellidos">apellidos</option>
                    <option value="email">email</option>
                  </select>
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar por apellido" name="buscarpor" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </nav>

        <br>
        <h1 class="text-center">Datos personales</h1>
        <br>
        <div class="row float-right">
            <a class="btn btn-info btncolorblanco" href="{{ route('agenda.create') }}"><i class="fas fa-user-plus"></i>Agregar un nuevo Registro</a>
        </div>
        <br>
        <table  class=" table-responsive table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombres y Apellidos</th>
                    
                    <th scope="col">Telefono</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Posición</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
               @foreach($agenda as $item)
               <tr align="center" >
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ route('agenda.show', $item->id) }}">{{ $item->nombres }} {{ $item->apellidos }}</a></td>
                    
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->celular }}</td>
                    <td>{{ $item->sexo }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->posicion }}</td>
                    <td>{{ $item->departamento }}</td>
                    <td>{{ $item->salario }}</td>
                    <td>{{ $item->fechadenacimiento }}</td>
                    <td><a class="btn btn-success btncolorblanco" href="{{ route('agenda.edit', $item->id) }}">
                        <i class="fa fa-edit"></i> Editar 
                      </a>

                      <a class="btn btn-danger btncolorblanco" href="{{ route('agenda.confirm', $item->id) }}">
                        <i class="fa fa-trash-alt"></i> Eliminar 
                      </a></td>
               </tr>
                   
               @endforeach











            </tbody>
        </table>
        {{ $agenda }}
    </div>

    @include('plantilla.footer',['container'=>'container-fluid'])
@endsection