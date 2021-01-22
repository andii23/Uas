@extends('template')
@section('title', 'data mahasiswa')
@section('konten')
	<h3>Data Mata Kuliah</h3>
	<sup>total data : {{$jummk}}</sup>
  
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Matkul</th>
      <th scope="col">Nama Mata Kuliah</th>
      <th scope="col">Dosen</th>
      <th scope="col">Jadwal</th>
      <th>
        <div class="container">
          <a class="btn btn-success btn-sm" href="{{route('matkul.create')}}">Tambah Data</a>
        </div>
      </th>
     
      
    </tr>
  </thead>
  <tbody>
  	@Foreach($datamk as $i=>$p)
    <tr>
      <th scope="row">{{$i+1}}</th>
      <td>{{$p->idmatkul}}</td>
      <td>{{$p->matkul}}</td>
      <td>{{$p->dosen}}</td>
      <td>{{$p->jadwal}}</td>
      <td><a class="btn btn-outline-warning" href="{{route('matkul.edit', $p->id)}}">Edit</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@stop