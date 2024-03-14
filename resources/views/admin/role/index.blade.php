@extends('layouts.admin')

@section('encabezadoContenido')
	<!-- Content Header (Encabezado de la pagina) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Listado de roles</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/branch')}}">Roles</a></li>
              <li class="breadcrumb-item active">Listado de Roles</li>
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
          
          <table id="tbroles" class="table table-bordered table-striped">
            <thead> 
            <tr>
              <th>#</th>
              <th>Nombre del rol</th>
              <th>Acción</th>
            </tr>

            </thead>

            <tbody>
              @php $contador = 0; @endphp
              @foreach($roles as $role) 
               @php $contador++; @endphp
                <tr>
                  <td>{{$contador}}</td>
                  <td>{{$role->name}}</td>
                  <td style="alingn-centre">
                    <div class="btn-group" role="group" aria-label="Basic example">
                     
                      <form action="{{route('role.destroy',$role->id)}}" method="post">
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
          <h5 ><i class=" bi bi-person-add"></i> Agregar rol</h5>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          
        <form action="{{url('/admin/role')}}" method="post">
      @csrf
      <div class="card-body">
        <div class="form-group">
        <label for="name">Nombre del rol</label>
          <input type="text" class="form-control" value="@php if(!isset($rol)){echo('');}else{echo($rol->name);}@endphp" id="name" placeholder="Facturación" name="name" required>
          @error('name')
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
	    $("#tbroles").DataTable({
	      "responsive": true, "lengthChange": false, "autoWidth": false,
	      "buttons": ["copy", "csv", "excel"]
	    }).buttons().container().appendTo('#tbroles_wrapper .col-md-6:eq(0)');
	    
	  });
	</script>
@endsection