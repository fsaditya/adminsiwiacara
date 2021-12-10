@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <center><h1>Akumulasi Pendaftar</h1></center>
@stop

@section('content')

<div class="right_col" role="main">
    <div class="">
    <head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
          <h2>Program Studi {{$prodi}}</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                      <div class="card-box table-responsive">
              <table id="datatable-buttons" class="table table-striped" style="width:100%">

                <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>NPM</th>
                  <th>Kelas</th>
                  <th>Program Studi</th>
                  <th>Action</th>
                </tr>
              </thead>


              <tbody>

                @foreach ($mahasiswa as $key => $user)
                    <tr>
                        <td> {{ $user->id}} </td>
                        <td> {{ $user->name}} </td>
                        <td> {{ $user->email}} </td>
                        <td> {{ $user->npm }} </td>
                        <td> {{ $user->Kelas }} </td>
                        <td> {{ $user->Prodi}} </td>
                        <td>
                            @if ($user->status == 0)
                                <button class="btn btn-primary btn-flat btn-sm remove-user" data-id="{{ $user->id }}"
                                onclick="return updateStatus({{$user->id}})">Validasi</button>
                            @else
                                <button class="btn btn-success btn-flat btn-sm remove-user" data-id="{{ $user->id }}"
                                onclick="return updateStatus({{$user->id}})" style="width:66px;">Valid</button>
                            @endif
                            {{-- <a data-id="{{ $user->id }}" class="btn btn-primary btnEdit">Edit</a> --}}
                            <button class="btn btn-info  btn-flat btn-sm remove-user" data-toggle="modal"
                                data-target="#myModal" data-id="{{$user->id}}"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $user->id }}"
                            onclick="return deleteConfirmation({{$user->id}})"><i class="fa fa-trash"></i></button>

                        </td>
                    </tr>
                @endforeach

              </tbody>
            </table>

            <!-- Update Student Modal -->
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true" data-id="{{$user->id}}">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold">Edit (coming soon) </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                    <div class="input-field" style="text-align:left;">
                        <label for="name" class="head form-label" >{{ __('Nama Lengkap') }}</label>
                        <input id="name" type="text" class="my-0 form-control @error('name') is-invalid @enderror" name="name"
                         value="{{ $user->name }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  <div class="md-form mb-5">
                    <div class="input-field" style="text-align:left;">
                        <label for="email" class="head form-label" >{{ __('Alamat Email') }}</label>
                        <input id="email" type="text" class="my-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                    </div>

                    <div class="md-form mb-5">
                        <div class="input-field" style="text-align:left;">
                            <label for="npm" class="head form-label">{{ __('Nomor Pokok Mahasiswa') }}</label>
                            <input id="npm" type="text" class="my-0 form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required autocomplete="npm">

                            @error('npm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>

                      <div class="md-form mb-5">
                        <div class="input-field" style="text-align:left;">
                            <label for="kelas" class="head form-label">{{ __('Kelas') }}</label>
                            <input id="kelas" type="text" class="my-0 form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" required autocomplete="kelas">

                            @error('kelas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                      </div>

                      <div class="md-form mb-5">
                        <div class="input-field" style="text-align:left;">
                            <label for="prodi" class="head form-label">{{ __('Program Studi') }}</label>
                                <select class="my-0 form-control @error('prodi') is-invalid @enderror" name="prodi" value="{{ old('prodi') }}" required autocomplete="prodi">
                                    <option value="D III Akuntansi"> D III Akuntansi </option>
                                    <option value="D III Pajak">D III Pajak </option>
                                    <option value="D III PBB  / Penilai">D III PBB  / Penilai </option>
                                    <option value="D III Bea Cukai">D III Bea Cukai</option>
                                    <option value="D III Kebendaharaan Negara">D III Kebendaharaan Negara</option>
                                    <option value="D III Maanajemen Aset">D III Maanajemen Aset</option>
                                    <option value="D I Pajak  / Penilai">D I Pajak </option>
                                    <option value="D I Bea Cukai">D I Bea Cukai</option>
                                    <option value="D I Kebendaharaan Negara">D I Kebendaharaan Negara</option>
                                </select>
                                @error('prodi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                      </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-default">Login</button>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
</div>
<script>
    function updateStatus(id) {

swal({
    text: "Are You Sure Dude?",    type: "warning",    showCancelButton: !0,
    confirmButtonText: "Yes, validate it!",
    cancelButtonText: "No, cancel!",
    reverseButtons: !0

}).then(function (e) {

    if (e.value === true) {

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "{{url('/mahasiswa.update')}}/" + id,
            data: {id:id},

            success: function (results) {

                if (results.success === true) {
                    e.dismiss;
                    location.reload();
                    //("Done!", results.message, "success");
                } else {
                    e.dismiss;
                    location.reload();
                    //swal("Error!", results.message, "error");
                }
            }
        });

    } else {
        e.dismiss;
    }

}, function (dismiss) {
    return false;
})

}

    function deleteConfirmation(id) {

        swal({

            title: "Delete?",

            text: "Are You Sure Dude?",

            type: "warning",

            showCancelButton: !0,

            confirmButtonText: "Yes, delete it!",

            cancelButtonText: "No, cancel!",

            reverseButtons: !0

        }).then(function (e) {


            if (e.value === true) {

                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');


                $.ajax({

                    //type: 'POST',

                    url: "{{url('/mahasiswa.destroy')}}/" + id,

                    data: {id:id},


                    success: function (results) {


                        if (results.success === true) {
                            e.dismiss;
                            location.reload();
                            //("Done!", results.message, "success");

                        } else {
                            e.dismiss;
                            location.reload();
                            //swal("Error!", results.message, "error");

                        }

                    }

                });


            } else {

                e.dismiss;

            }


        }, function (dismiss) {

            return false;

        })

    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
    
    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop