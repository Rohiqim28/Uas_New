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
<a href="/jenis-tambah_jenis" class="btn btn-primary">Tambah</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Pelanggaran</th>
      <th scope="col">Pembinaan</th>
      <th scope="col">Act</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $i=> $value )
      

    <tr>
      <td>{{ $i+1}}</td>
      <td>{{ $value->nama_pelanggaran }}</td>
      <td>{{ $value->sanksi }}</td>
      <td>
        <div class="row">
          <a href="/edit-{{ $value->id }}" class="btn btn-success">Edit</a>
          <form action="jenis/delete/{{ $value->id }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="delete">
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection