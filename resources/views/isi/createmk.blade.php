@extends('template')
@section('title', 'tambah data mahasiswa')
@section('konten')

	<h3>Tambah Data Mata Kuliah</h3>
	<div class="container-fluid">
       <form method="POST" action="{{route('matkul.store')}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Id Mata Kuliah</label>
            <input type="text" name="idmatkul" class="form-control" id="idmatkul" value="{{old('idmatkul')}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Id Mata Kuliah
              @if($errors->has('idmatkul'))
              <span class="badge badge-danger">
                 {{$errors->first('idmatkul')}}
              </span>
              @endif
            </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Mata Kuliah</label>
            <input type="text" name="matkul" class="form-control" id="matkul" value="{{old('matkul')}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Nama Mata Kuliah
              @if($errors->has('matkul'))
              <span class="badge badge-danger">
                 {{$errors->first('matkul')}}
              </span>
              @endif
            </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Dosen</label>
            <input type="text" name="dosen" class="form-control" id="dosen" value="{{old('dosen')}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Nama Dosen
            @if($errors->has('dosen'))
            <span class="badge badge-danger">
                {{$errors->first('dosen')}}
            </span>
            @endif
          </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Jadwal Mata Kuliah</label>
            <input type="text" name="jadwal" class="form-control" id="jadwal" value="{{old('jadwal')}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Jadwal Mata Kuliah (Example : Senin 19.00-20.00)
            @if($errors->has('jadwal'))
            <span class="badge badge-danger">
                {{$errors->first('jadwal')}}
            </span>
            @endif
          </small>
          </div>
        
          <button type="submit" class="btn btn-primary">Tambahkan</button>
      </form>
  </div>

@stop