@extends('layouts.admin')

@section('encabezadoContenido')
	<!-- Content Header (Encabezado de la pagina) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Edicion de usuario </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/usuarios')}}">Usuarios</a></li>
              <li class="breadcrumb-item active">Edicion de usuarios</li>
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
      <div class="card card-success">
		<div class="card-header">
		<h3 class="card-title">Ingrese la información a modificar</h3>
		</div>

		<form action="{{url('/admin/usuarios',$usuario->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="card-body">
				<div class="form-group">
				<label for="name">Nombre completo</label>
					<input type="text" class="form-control" value="{{$usuario->name}}" id="name" placeholder="Nombre completo" name="name" required>
					@error('name')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
				<label for="email">Direccion de correo</label>
					<input type="email" class="form-control" id="email" value="{{$usuario->email}}" placeholder="ingrese el correo" name="email" required>
					@error('email')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
				<label for="branch">Sucursal</label>
					<select name="branch" id="branch" class="form-control" name="branch" required>
              <option value="{{$usuario->branch_id}}">{{$usuario->branch->title}}</option>
              @foreach($sucursales as $sucursal)
                  <option value="{{$sucursal->id}}">{{$sucursal->title}}</option>
               @endforeach
          </select>
					@error('branch')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
				<label for="role">Rol</label>
					<select name="role" id="role" class="form-control" name="role" required>
              <option value="{{$usuario->role_id}}">{{$usuario->role->name}}</option>
              @foreach($roles as $rol)
                  <option value="{{$rol->id}}">{{$rol->name}}</option>
               @endforeach
          </select>
					@error('role')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input type="password" class="form-control" id="password"  placeholder="Password" name="password" required>
					@error('password')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
					<label for="password_confirmation">Repetir contraseña</label>
					<input type="password" class="form-control" id="password_confirmation" placeholder="Repita la contraseña" name="password_confirmation" required>
					
				</div>
			</div>
			<div class="card-footer">
				<a href="{{url('/admin/usuarios')}}" class="btn btn-secondary">Volver</a></li>
			<button type="submit" class="btn btn-success"> <i class="bi bi-pencil"></i> Actualizar</button>
			</div>
		</form>
		</div>
    </div>
    <!-- /.col -->

    <div class="col-3">
      
    </div>
    <!-- /.col -->
  </div>
<!-- row -->
 
@endsection


@section('scripts')
	
@endsection