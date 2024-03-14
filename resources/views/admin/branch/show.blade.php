@extends('layouts.admin')

@section('encabezadoContenido')
	<!-- Content Header (Encabezado de la pagina) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Datos de la sucursal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/branch')}}">Sucursales</a></li>
              <li class="breadcrumb-item active">Datos de sucursales</li>
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
		<h3 class="card-title">Información</h3>
		</div>
			<div class="card-body">
				<div class="form-group">
				<label for="title">Nombre sucursal</label>
					<p>{{$sucursal->title}}</p>
				</div>
				<div class="form-group">
				<label for="contact_person">Nombre contacto</label>
						<p>{{$sucursal->contact_person}}</p>
				</div>
				<div class="form-group">
				<label for="phone">Numero de contacto</label>	
					<p>{{$sucursal->phone}}</p>
				</div>
				<div class="form-group">
				<label for="address">Direccion</label>
										<p>{{$sucursal->address}}</p>
				</div>
				<div class="form-group">
				<label for="short_description">Nota</label>
					
					<p>"{{$sucursal->short_description}}</p>
					
				</div>
				
			</div>
			<div class="card-footer">
				<a href="{{url('/admin/branch')}}" class="btn btn-secondary">Volver</a></li>
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

@section('scripts')
@endsection

