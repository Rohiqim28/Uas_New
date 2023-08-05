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
    <a href="pengontrol-tambah_pengontrol" class="btn btn-primary">Tambah Data</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Pengontrol</th>
      <th scope="col">Daerah Kontrol</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $i=> $value )
      

    <tr>
      <td>{{ $i+1}}</td>
      <td>{{ $value->nama }}</td>
      <td>{{ $value->daerah_kontrol }}</td>
      <td><div class="row">
        <a href="edit_pengontrol-{{ $value->id }}" class="btn btn-success ">Edit</a>

        <form action="pengontrol/delete/{{ $value->id }}" method="post">
          <input type="submit" class="btn btn-danger" value="delete">
          @csrf
          @method('delete')
        </form>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection