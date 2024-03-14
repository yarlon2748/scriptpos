@extends('layouts.admin')

@section('encabezadoContenido')
	<!-- Content Header (Encabezado de la pagina) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listado de impuestos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/branch')}}">Impuestos</a></li>
              <li class="breadcrumb-item active">Listado de impuestos</li>
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
    <div class="col-6">
      <div class="card">
        <div class="card-header">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          
          <table id="tbimpuestos" class="table table-bordered table-striped">
            <thead> 
            <tr>
              <th>#</th>
              <th>Nombre categoria</th>
              <th>Valor</th>
              <th>Acción</th>
            </tr>

            </thead>

            <tbody>
              @php $contador = 0; @endphp
              @foreach($impuestos as $impuesto) 
               @php $contador++; @endphp
                <tr>
                  <td>{{$contador}}</td>
                  <td>{{$impuesto->title}}</td>
                  <td>{{$impuesto->value.'%'}}</td>
                  <td style="alingn-centre">
                    <div class="btn-group" role="group" aria-label="Basic example">
                     
                      <form action="{{route('tax.destroy',$impuesto->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="border-radius: 0px 5px 5px 0px"><i class="bi bi-trash"></i></button>
                      </form>
                      
                    </div>

                  </td>
                </tr>
              @endforeach
            
            <tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <div class="col-6">
      <div class="card card-primary">
        <div class="card-header">
          <h5 ><i class=" bi bi-person-add"></i> Agregar impuesto</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          
        <form action="{{url('/admin/tax')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
        <label for="title">Nombre del impuesto</label>
          <input type="text" class="form-control"  id="title" placeholder="iva" name="title" required>
          @error('title')
          <small style="color:red;">{{$message}}</small>
          @enderror        
      </div>
      <div class="form-group">
        <label for="value">Porcentaje de impuesto</label>
        <div class="input-group mb-3">
        <input type="text" class="form-control"  id="value" placeholder="valor impuesto" name="value" required>
          <div class="input-group-append">
            <span class="input-group-text">%</span>
          </div>
        </div>
          
          @error('value')
          <small style="color:red;">{{$message}}</small>
          @enderror        
      </div>
      <div class="card-footer">
      <button type="submit" class="btn btn-primary"> <i class="bi bi-floppy"></i> Guardar</button>
      </div>
    </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
    
<!-- row -->

@endsection

@section('scripts')
	<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
	<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
	<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
	<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
	<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

	<script>
	  $(function () {
	    $("#tbimpuestos").DataTable({
	      "responsive": true, "lengthChange": false, "autoWidth": false,
	      "buttons": ["copy", "csv", "excel"]
	    }).buttons().container().appendTo('#tbimpuestos_wrapper .col-md-6:eq(0)');
	    
	  });
	</script>
@endsection