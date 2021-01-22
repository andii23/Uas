@extends('template')
@section('title', 'data mahasiswa')
@section('konten')

	<h3>Data Mahasiswa</h3>
	<sup>total data : {{$jummh}}</sup>
  
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Id matkul yang diambil</th>
      <th>
        <div class="container">
          <a class="btn btn-success btn-sm" href="{{route('mahasiswa.create')}}">Tambah Data</a>
        </div>
      </th>
     
      
    </tr>
  </thead>
  <tbody>
  	@Foreach($datamh as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->nim}}</td>
      <td>{{$p->nama}}</td>
      <td>{{$p->alamat}}</td>
      <td>{{$p->jeniskelamin}}</td>
      <td>{{$p->idmatkul}}</td>
      <td><a class="btn btn-outline-warning" href="{{route('mahasiswa.edit', $p->id)}}">Edit</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@stop