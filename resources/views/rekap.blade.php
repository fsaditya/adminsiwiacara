@extends('adminlte::page')

@section('title', 'Data Pendaftar')

@section('content_header')
<div class="card">
  <div class="card-body">
    <center><strong><p style = "font-size:24px;font-style:bold;">Rekap Data Pendaftar</p></strong></center>
    </div>
</div>
@stop


@section('content')
<?php $i = 1; 
?>
<div class="card shadow p-3 mb-5 bg-white rounded">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover" id="datatable">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Tim</th>
                  <th>Email</th>
                  <th>Nama PJ</th>
                  <th>NPM PJ</th>
                  <th>Kelas PJ</th>
                  <th>Prodi PJ</th>
                  <th>Jenis Persembahan</th>
                  <th>No. HP</th>
                  <th>Line PJ</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($mahasiswas as $key => $user)
                    <tr>
                        <td> {{ $i++ }} </td>
                        <td> {{ $user->nama_tim }} </td>
                        <td> {{ $user->email }} </td>
                        <td> {{ $user->nama_pj }} </td>
                        <td> {{ $user->npm_pj }} </td>
                        <td> {{ $user->kelas }} </td>
                        <td> {{ $user->nama_prodi }} </td>
                        <td> {{ $user->jenis_persembahan }} </td>
                        <td> {{ $user->wa_pj }} </td>
                        <td> {{ $user->line_pj }} </td>
                    </tr>
                @endforeach

              </tbody>
            </table>
        </div>
    </div>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css" rel="stylesheet">

    
@stop

@section('js')
<!-- DataTables -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script> 
    $(document).ready(function() {
    $('#datatable').DataTable( {
        dom: 'lfrtBps',
        buttons: {
        buttons: [

            { className: 'btn-primary', extend: 'excel', text : 'Export to Excel' }
        ]
    }
        
    } );
} );
</script>

@stop