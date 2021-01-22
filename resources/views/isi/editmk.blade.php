@extends('template')
@section('title', 'tambah data mahasiswa')
@section('konten')

	<h3>Edit Data Mata Kuliah</h3>
	<div class="container-fluid">
       <form method="POST" action="{{route('matkul.update', $edit->id)}}">
        {{csrf_field()}}
        @method('PUT')

        <div class="form-group">
            <label for="exampleInputEmail1">Id Mata Kuliah</label>
            <input type="text" name="idmatkul" class="form-control" id="idmatkul" value="{{$edit->idmatkul}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Nim Mahasiswa
              @if($errors->has('idmatkul'))
              <span class="badge badge-danger">
                 {{$errors->first('idmatkul')}}
              </span>
              @endif
            </small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nama Mata Kuliah</label>
            <input type="text" name="matkul" class="form-control" id="matkul" value="{{$edit->matkul}}">
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
            <input type="text" name="dosen" class="form-control" id="dosen" value="{{$edit->dosen}}">
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
            <input type="text" name="jadwal" class="form-control" id="jadwal" value="{{$edit->jadwal}}">
            <small id="emailHelp" class="form-text text-muted">Isikan Jadwal Mata Kuliah (Example : Senin 19.00-20.00)
            @if($errors->has('jadwal'))
            <span class="badge badge-danger">
                {{$errors->first('jadwal')}}
            </span>
            @endif
          </small>
          </div>
          
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>

     <div class="container-fluid">
        <form method="POST" action="{{route('matkul.destroy', $edit->id)}}">
           {{csrf_field()}}
          @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@stop