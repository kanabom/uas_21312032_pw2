@extends('layout.master')

@section('judul')
Tambah Data
@endsection

@section('content')
<form method="post" action="/21312032">
    @csrf
    <div class="form-group">
        <label>Npm</label>
        <input type="text" name="npm" value="" class="form-control">
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="" class="form-control">
    </div>

    <div class="form-group">
        <label>alamat</label>
        <textarea class="form-control" name="alamat"> </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection