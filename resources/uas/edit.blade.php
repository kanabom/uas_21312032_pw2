@extends('layout.master')

@section('judul')
Edit Data
@endsection

@section('content')
<form method="post" action="/21312032/{{$uas->npm}}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{$uas->nama}}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat">{{$uas->bio}}</textarea>
    </div>
    @error('bio')
        <div class="alert alert-denger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Ubah</button>
</form>
@endsection