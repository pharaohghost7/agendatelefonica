@extends('plantilla.plantilla')

@section('titulo', 'Mostrar Registro')

@section('contenido')

<div class="container">
    <br>
<nav class="navbar navbar-light">
 <a class="navbar-brand"><img id="icono" class="img-responsive" 
   src="https://imge.apk.tools/300/d/3/1/com.widesoft.guiatelefonica.png" with="20%"></a>

 <ul class="nav flex-column text-center">
 <li class="nav-item">
   <span class="nav-link active">Bienvenido Jhonatan</span>
 </li>
 <li class="nav-item">
   <a class="nav-link" href="#">Cerrar sesión</a>
 </li>
</ul>

</nav>


<nav aria-label="breadcrumb">
 <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('agenda.index') }}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="#">Ver Registro</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $agenda->id }}</li>
 </ol>
</nav>
</div>

<form action="{{ route('agenda.update',$agenda->id) }}" method="POST">
    @method('put')
    @csrf
<div class="container register">


               <div class="row">
                   <div class="col-md-3 register-left">
                       <img src="http://www.idaipqroo.org.mx/wp-content/uploads/2018/06/proteccion-de-datos-personales-791x1024.png" alt=""/>
                       <h3>Bienvenid@</h3>
                       <p>Por favor llena los datos correctamente en el sistema!</p>
                       
                   </div>
                   <div class="col-md-9 register-right">
                
                       <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               
                               <h3 class="register-heading">Mostrar Registro</h3>
                                                           
                               <div class="row register-form">

                                   <div class="col-md-6">                                        

                                       <div class="form-group">
                                          <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                               </div>
                                           <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required="" value="{{ $agenda->nombres }}" disabled="true">
                                           </div>
                                       </div>

                                       <div class="form-group">
                                          <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fa fa-user-edit text-info"></i></div>
                                               </div>
                                           <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required="" value="{{ $agenda->apellidos }}"disabled="true">
                                           </div>
                                       </div>

                                       <div class="form-group">
                                          <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                               </div>
                                           <input class="form-control" type="number" name="telefono" placeholder="Telefono: 18491115555" id="telefono" value="{{ $agenda->telefono }}"disabled="true">
                                           </div>
                                       </div>

                                       <div class="form-group">
                                          <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fa fa-mobile-alt text-info"></i></div>
                                               </div>
                                           <input class="form-control" type="number" name="celular" placeholder="Celular: 18491115555" id="Celular" value="{{ $agenda->celular }}" disabled="true">
                                           </div>
                                       </div>
                                      
                                       @if($agenda->sexo=='Masculino')
                                           @php
                                                $hombre='checked'
                                                
                                           @endphp
                                           @php
                                               $mujer=''
                                           @endphp
                                       @else
                                           @php
                                                $hombre=''
                                       
                                            @endphp
                                            @php
                                                $mujer='checked'
                                            @endphp
                                       @endif
                                    
                                       <div class="form-group">
                                           <div class="maxl">
                                               <label class="radio inline"> 
                                                   <input type="radio" name="sexo" value="Masculino" {{ $hombre }} disabled="true">
                                                   <span> Masculino </span> 
                                               </label>
                                               <label class="radio inline"> 
                                                   <input type="radio" name="sexo" value="Femenino" {{ $mujer }} disabled="true">
                                                   <span>Femenino </span> 
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       

                                        <div class="form-group">
                                          <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fa  fa-at text-info"></i></div>
                                               </div>
                                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $agenda->email }}" disabled="true"/>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                          <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fa fa-address-card text-info"></i></div>
                                               </div>
                                            <input type="text" name="posicion" class="form-control" placeholder="Posición" value="{{ $agenda->posicion }}" disabled="true"/>
                                           </div>
                                       </div>

                                       @php
                                           $departamento=['Gerencia de TI','Auditoria TI','Contabilidad']
                                       @endphp


                                       <div class="form-group">
                                          <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fa fa-map-marker-alt text-info"></i></div>
                                               </div>
                                            <select name="departamento" class="form-control" disabled="true">
                                               <option class="hidden" >Departamento</option>
                                               @foreach($departamento as $dep)
                                                   <option 
                                                        @if($agenda->departamento==$dep)
                                                            selected 
                                                        @endif                                                  
                                                   >{{ $dep }}</option>
                                               @endforeach
                                           </select>
                                           </div>
                                       </div>


                                       <div class="form-group">
                                          <div class="input-group">
                                               <div class="input-group-prepend">
                                                   <div class="input-group-text"><i class="fa  fa-dollar-sign text-info"></i></div>
                                               </div>
                                             <input type="number" class="form-control" name="salario" placeholder="salario *" value="{{ $agenda->salario }}" disabled="true" />
                                           </div>
                                       </div>
                                       
                                       <div class="form-group">
                                           <label >Fecha de nacimiento</label>
                                          <div class="input-group">
                                               <div class="input-group-prepend">                                                    
                                                   <div class="input-group-text"><i class="fa fa-calendar-alt text-info"></i></div>
                                               </div>
                                               
                                               <input type="date" name="fechadenacimiento" id="fechadenacimiento" min="1000-01-01"
                                                 max="3000-12-31" class="form-control" value="{{ $agenda->fechadenacimiento }}" disabled="true">                                                   
                                           </div>
                                       </div>

                                   
                                   

                                       <a class=" redondo btn btn-success btncolorblanco" href="{{ route('agenda.edit', $agenda->id) }}">
                                        <i class="fa fa-edit"></i> Editar 
                                      </a>
                                   <a href="{{ route('cancelar') }}" class="redondo btn btn-danger"><i class="fas fa-ban"></i> Cancelar</a>
                                   </div>
                               </div>
                           </div>
                      
                       </div>
                   </div>
               </div>

           </div>



<br>
</form>
   @include('plantilla.footer', ['container'=>'container']) 
@endsection