@extends('template')
@section('title', 'tambah data mahasiswa')
@section('konten')

	<h3>Tambah Data Mahasiswa</h3>
	<div class="container-fluid">
       <form method="POST" action="{{route('mahasiswa.store')}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nim Mahasiswa</label>
            <input type="text" name="nim" class="form-control" id="nim" value="{{old('nim')}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Nim Mahasiswa
              @if($errors->has('nim'))
              <span class="badge badge-danger">
                 {{$errors->first('nim')}}
              </span>
              @endif
            </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{old('nama')}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Nama Mahasiwa
              @if($errors->has('nama'))
              <span class="badge badge-danger">
                 {{$errors->first('nama')}}
              </span>
              @endif
            </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" value="{{old('alamat')}}">
            <small id="emailHelp" class="form-text text-muted">Alamat
            @if($errors->has('alamat'))
            <span class="badge badge-danger">
                {{$errors->first('alamat')}}
            </span>
            @endif
          </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jenis Kelamin</label>
            <select name="jeniskelamin" class="form-control" id="jeniskelamin" value="{{old('jeniskelamin')}}">
              <option value="Laki-laki">Laki-laki</option>    
              <option value="Perempuan">Perempuan</option>
            </select>
            <small id="emailHelp" class="form-text text-muted">pilih jenis kelamin
              @if($errors->has('jeniskelamin'))
            <span class="badge badge-danger">
                {{$errors->first('jeniskelamin')}}
            </span>
            @endif</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Mata Kuliah</label>
            <select name="idmatkul" class="form-control" id="idmatkul">
              @Foreach($datamk as $i=>$k)
              <option value="{{$k->idmatkul}}"> {{$k->idmatkul}} - {{$k->matkul}}</option>    
              @endforeach
            </select>
            <small id="emailHelp" class="form-text text-muted">Isikan Mata Kuliah
            @if($errors->has('idmatkul'))
            <span class="badge badge-danger">
                {{$errors->first('idmatku;')}}
            </span>
            @endif
          </small>
          </div>
          

          <button type="submit" class="btn btn-primary">Tambahkan</button>
      </form>
  </div>

@stop