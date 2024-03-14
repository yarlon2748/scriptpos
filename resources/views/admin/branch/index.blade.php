@extends('layouts.admin')

@section('encabezadoContenido')
	<!-- Content Header (Encabezado de la pagina) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listado de sucursales</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/branch')}}">Sucursales</a></li>
              <li class="breadcrumb-item active">Listado de sucursales</li>
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
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <a href="{{url('/admin/branch/create')}}" type="button" class="btn btn-danger"><i class="bi bi-person-add"></i> Agregar sucursal</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          
          <table id="tbsucursales" class="table table-bordered table-striped">
            <thead> 
            <tr>
              <th>#</th>
              <th>Nombre sucursal</th>
              <th>Contacto personal</th>
              <th>Numero de télefono</th>
              <th>Nota</th>
              <th>Direccion</th>
              <th>Acciones</th>
            </tr>

            </thead>

            <tbody>
              @php $contador = 0; @endphp
              @foreach($sucursales as $sucursal) 
               @php $contador++; @endphp
                <tr>
                  <td>{{$contador}}</td>
                  <td>{{$sucursal->title}}</td>
                  <td>{{$sucursal->contact_person}}</td>
                  <td>{{$sucursal->phone}}</td>
                  <td>{{$sucursal->short_description}}</td>
                  <td>{{$sucursal->address}}</td>
                  <td style="alingn-centre">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="{{route('branch.show',$sucursal->id)}}" type="button" class="btn btn-info"><i class="bi bi-eye"></i></a>
                      <a href="{{route('branch.edit',$sucursal->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                      <form action="{{route('branch.destroy',$sucursal->id)}}" method="post">
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
	    $("#tbsucursales").DataTable({
	      "responsive": true, "lengthChange": false, "autoWidth": false,
	      "buttons": ["copy", "csv", "excel", "pdf", "print",]
	    }).buttons().container().appendTo('#tbsucursales_wrapper .col-md-6:eq(0)');
	    
	  });
	</script>
@endsection