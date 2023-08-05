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
          <form method="POST" action="{{ route('update_pengontrol',$data->id)}}">
            @method('put')
            @csrf
              
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="asrama" class="col-sm-2 col-form-label">Daerah Kontrol</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="daerah_kontrol" id="sanksi"value="{{ $data->daerah_kontrol }}">
              </div>
            </div>
            <div class="button">
              <input type="submit" value="edit" class="btn btn-primary">
              <a href="jenis" class="btn btn-warning">Kembali</a>
        
            </div>
          </form>
        
        </table>
      </div>
    </div> 
  <!-- ./wrapper -->
@endsection