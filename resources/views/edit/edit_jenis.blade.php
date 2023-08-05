@extends('admin.admin')
@section('admin')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"></h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <!-- Navbar -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          {{-- <form method="POST" action="{{ asset('update/'.$data->id_pelanggaran.'') }}"> --}}
          <form method="POST" action="{{route('update_jenis',$jenis->id)}}">
            @method('put')
            @csrf
            {{-- @foreach ($data as $data ) --}}
              
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
            {{-- <input type="hidden" name="id_pelanggaran" value="{{ $data->id_pelanggaran }}"> --}}
                <input type="text" class="form-control" id="nama" name="nama_pelanggaran" value="{{$jenis->nama_pelanggaran }}">
              
              </div>
            </div>
            
            <div class="form-group row">
              <label for="asrama" class="col-sm-2 col-form-label">Asrama</label>
              <div class="col-sm-10">
          
                <input type="text" class="form-control" name="sanksi" id="sanksi"value="{{$jenis->sanksi }}">
              </div>
            </div>
            
            <div class="button">
              {{-- @endforeach --}}
              <input type="submit" value="edit" class="btn btn-primary">
              <a href="jenis" class="btn btn-warning">Kembali</a>
        
            </div>
          </form>
        
        </table>
      </div>
    </div> 
  <!-- ./wrapper -->
@endsection