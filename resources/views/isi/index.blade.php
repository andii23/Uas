@extends('template')
@section('title', 'gabungan')
@section('konten')

	<h3>Jadwal Mahasiswa</h3>
  
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Kode Matkul</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Dosen</th>
      <th scope="col">Jadwal</th>
      
     
      
    </tr>
  </thead>
  <tbody>
  	@Foreach($gabungan as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->nim}}</td>
      <td>{{$p->nama}}</td>
      <td>{{$p->idmatkul}}</td>
      <td>{{$p->matkul}}</td>
      <td>{{$p->dosen}}</td>
      <td>{{$p->jadwal}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@stop