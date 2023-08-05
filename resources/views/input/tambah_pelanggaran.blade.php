@extends('admin.admin')
@section('admin')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">{{ $title }}</h1>
        </div><!-- /.col -->
        
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <!-- Navbar -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tambah Data</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-bordered">
          <form method="POST" action="{{ route('simpan') }}">
            @csrf
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama_santri">
              </div>
            </div>
            <div class="form-group row">
              <label for="jenis" class="col-sm-2 col-form-label">Jenis Pelanggaran</label>
                <div class="col-sm-10">
                <select class="form-control" name="jenis_pelanggaran" id="">
                  <option>pilih</option>
                  @foreach ($pelanggaran as $k )
                  <option value="{{ $k->nama_pelanggaran }}">{{ $k->nama_pelanggaran }}</option>
                  @endforeach
                </select>
              </div>
              </div>
              
              <div class="form-group row">
                <label for="asrama" class="col-sm-2 col-form-label">Asrama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="asrama" id="asrama">
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" name="tgl" id="tanggal">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="waktu" id="">
                    <option>pilih</option>
                    
                    <option value="Dzuhur">Dzuhur</option>
                    <option value="Asar">Asar</option>
                    <option value="Maghrib">Maghrib</option>
                    <option value="Isya'">Isya'</option>
                    <option value="Subuh">Subuh</option>
                  </select>
                </div>
                </div>
              <div class="button">
              <input type="submit" value="simpan" class="btn btn-primary">
              <a href="admin" class="btn btn-warning">Kembali</a>
        
            </div>
          </form>
        
        </table>
      </div>
    </div> 
  <!-- ./wrapper -->
  @endsection
