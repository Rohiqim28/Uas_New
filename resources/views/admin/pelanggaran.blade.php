@extends('admin.admin')
@section('admin')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pelanggaran</h1>
        </div><!-- /.col -->
        
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
<td><a class="btn btn-success" href="tambah">tambah</a></td>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Pelanggaran</th>
      <th scope="col">Asrama</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Waktu</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($data as $i=> $value )
    <tr>
      <td>{{ $i+1}}</td>
      <td>{{ $value->nama_santri }}</td>
      <td>{{ $value->jenis_pelanggaran }}</td>
      <td>{{ $value->asrama }}</td>
      <td>{{ $value->tgl }}</td>
      <td>{{ $value->waktu }}</td>
      <td>
        <div class="btn-group">
          <a class="btn btn-primary m-1" href="print/{{ $value->id}}" target="_blank" onclick="prinDiv'cetak'">cetak</a>
          <a class="btn btn-warning m-1 rounded" href="admin-edit-{{ $value->id }}">edit</a>
          <form action="admin/delete/{{ $value->id }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="delete" class="btn btn-danger m-1">
          </form>
        </div>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection