@extends('layouts.admin')

@section('encabezadoContenido')
	<!-- Content Header (Encabezado de la pagina) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detalle del usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/usuarios')}}">Usuarios</a></li>
              <li class="breadcrumb-item "><a href="{{url('/admin/usuarios')}}">Listado de usuarios</a></li>
              <li class="breadcrumb-item active">Detalle usuario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content Header -->
@endsection

@section('contenido')

  <!-- row -->
   <div class="row">
     <div class="col-3">
      
    </div>
    <!-- /.col -->

    <div class="col-6">
      <div class="card card-info">
    <div class="card-header">
    <h3 class="card-title">Información del usuario</h3>
    </div>
   
      @csrf
      <div class="card-body">
        <div class="form-group">
        <label for="name">Nombre completo</label>
          <p >{{$usuario->name}}</p>
         
        </div>
        <div class="form-group">
        <label for="email">Direccion de correo electrónico</label>
          <p>{{$usuario->email}}</p>
        
        </div>
        <div class="form-group">
        <label for="branch">Sucursal</label>
          <p>{{$usuario->branch->title}}</p>
        
        </div>
        <div class="form-group">
        <label for="role">Rol</label>
          <p>{{$usuario->role->name}}</p>
        
        </div>
        <div class="form-group">
          <label for="password">Fecha de creacion</label>
          <p>{{$usuario->created_at}}</p>
        </div>
        <div class="form-group">
          <label for="password">Fecha ultima actualizacion</label>
          <p>{{$usuario->updated_at}}</p>
        </div>
        <div class="form-group">
            <a href="{{url('/admin/usuarios')}}" class="btn btn-secondary">Volver</a></li>
        </div>
      </div>
  

    </div>
    </div>
    <!-- /.col -->

    <div class="col-3">
      
    </div>
    <!-- /.col -->
  </div>
<!-- row -->
 
@endsection