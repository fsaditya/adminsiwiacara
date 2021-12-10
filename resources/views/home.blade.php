@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="card">
  <div class="card-body">
    <center><strong><p style = "font-size:24px;font-style:bold;">Total Pendaftar</p></strong></center>
  </div>
</div>
@stop

@section('content')
<div class="card shadow p-3 mb-5 bg-white rounded">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-borderless table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Jenis Persembahan</th>
            <th scope="col">Pendaftar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Band</td>
            <td>2222</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Puisi</td>
            <td>1234</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td><i>Rap Battle</i></td>
            <td>1111</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>PWH</td>
            <td>1000</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td><i>Solo Vocal</i></td>
            <td>1000</td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
    <script> console.log('Epic'); </script>
@stop