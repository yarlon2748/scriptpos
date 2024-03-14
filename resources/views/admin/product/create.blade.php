@extends('layouts.admin')

@section('encabezadoContenido')
	<!-- Content Header (Encabezado de la pagina) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Creación de Productos </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/product')}}">Productos</a></li>
              <li class="breadcrumb-item active">Creación de productos</li>
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
	<div class="col-2"> </div>
	<!-- /.col -->

	<div class="col-8">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Ingrese la información</h3>
			</div>
				<form action="{{url('/admin/product')}}" method="post">
				@csrf
					<div class="card-body">
						<div class="row">
							<div class="col-6" >
								<div class="form-group">
									<label for="title">Nombre producto</label>
									<input type="text" class="form-control" value="{{old('title')}}" id="title" placeholder="Nombre producto" name="title" required>
									@error('title')
										<small style="color:red;">{{$message}}</small>
									@enderror
								</div>
								
								<div class="form-group">
									<label for="sku">Referencia / Codigo producto</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text">{{$prefijo}}</span>
										</div>
									<input type="text" class="form-control" value="{{old('sku')}}" id="sku" placeholder="000001" name="sku" required>
									</div>
									@error('sku')
										<small style="color:red;">{{$message}}</small>
									@enderror
								</div>
								<div class="form-group">
									<label for="category">Categoria</label>
									<select name="category" id="category" class="form-control" name="category">
										<option value="">Seleccione la categoria</option>
										@foreach($categorias as $categoria)
											<option value="{{$categoria->id}}" {{old('category') == $categoria->id ? 'selected' : ''}} required >{{$categoria->title}}</option>
										@endforeach
									</select>
										@error('category')
									<small style="color:red;">{{$message}}</small>
									@enderror
								</div>
								<div class="form-group">
									<label for="purchase_price">Precio de compra</label>
									<input type="number" class="form-control" value="{{old('purchase_price')}}" id="purchase_price" placeholder="25000" name="purchase_price" required>
									@error('purchase_price')
										<small style="color:red;">{{$message}}</small>
									@enderror
								</div>
								
							</div>
							<div class="col-6">
								<div class="form-group">
									<label for="sell_price">Precio de venta</label>
									<input type="number" class="form-control" value="{{old('sell_price')}}" id="sell_price" placeholder="25000" name="sell_price" required>
									@error('sell_price')
										<small style="color:red;">{{$message}}</small>
									@enderror
								</div>	
								<div class="form-group">
									<label for="price_type">Categoria</label>
									<select name="category" id="price_type" class="form-control" name="price_type">
										<option value="1">Tipo de precio</option>
										<option value="1"required >Fijo</option>
										<option value="2"required >Negociable</option>      
									</select>
									@error('price_type')
										<small style="color:red;">{{$message}}</small>
									@enderror
								</div>
								<div class="form-group">
									<label for="tax">Impuesto</label>
									<select name="tax" id="tax" class="form-control" name="tax">
										<option value="">Seleccione el impuesto</option>
										@foreach($impuestos as $impuesto)
											<option value="{{$impuesto->id}}" {{old('tax') == $impuesto->id ? 'selected' : ''}} required >{{$impuesto->title}}</option>
										@endforeach
									</select>
									@error('tax')
										<small style="color:red;">{{$message}}</small>
									@enderror
								</div>
								<label for="thumbnail">Imagen Producto</label>
								<div class="input-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="thumbnail">
										<label class="custom-file-label" for="thumbnail">Seleccione imagen</label>
									</div>
									<div class="input-group-append">
										<span class="input-group-text">Cargar</span>
									</div>
								</div>
							</div>
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

<!-- /.col -->
<div class="col-2"></div>
<!-- /.col -->
</div>
<!-- row -->
 
@endsection

@section('scripts')
@endsection

