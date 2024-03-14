@extends('layouts.admin')

@section('encabezadoContenido')
	<!-- Content Header (Encabezado de la pagina) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Creación de Sucursal </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/branch')}}">Sucursales</a></li>
              <li class="breadcrumb-item active">Creación de sucursales</li>
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
      <div class="card card-primary">
		<div class="card-header">
		<h3 class="card-title">Ingrese la información</h3>
		</div>
		<form action="{{url('/admin/branch')}}" method="post">
			@csrf
			<div class="card-body">
				<div class="form-group">
				<label for="title">Nombre sucursal</label>
					<input type="text" class="form-control" value="{{old('title')}}" id="title" placeholder="Nombre sucursal" name="title" required>
					@error('title')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
				<label for="contact_person">Nombre contacto</label>
					<input type="text" class="form-control" value="{{old('contact_person')}}" id="contact_person" placeholder="Nombre contacto" name="contact_person" required>
					@error('contact_person')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
				<label for="phone">Numero de contacto</label>
					<input type="text" class="form-control" value="{{old('phone')}}" id="phone" placeholder="3122432556" name="phone" required>
					@error('phone')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
				<label for="address">Direccion</label>
					<input type="text" class="form-control" value="{{old('address')}}" id="address" placeholder="Direccion" name="address" required>
					@error('address')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				<div class="form-group">
				<label for="short_description">Nota</label>
					<input type="text" class="form-control" value="{{old('short_description')}}" id="short_description" placeholder="Nota" name="short_description">
					@error('short_description')
					<small style="color:red;">{{$message}}</small>
					@enderror
				</div>
				
			</div>
			<div class="card-footer">
				<a href="{{url('/admin/branch')}}" class="btn btn-secondary">Volver</a></li>
			<button type="submit" class="btn btn-primary"> <i class="bi bi-floppy"></i> Guardar</button>
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

