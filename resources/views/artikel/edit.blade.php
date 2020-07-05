@extends('layouts.master')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Edit Artikel</h1>

  <form action="/artikel/{{ $artikel->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="judul">Judul artikel</label>
      <input type="text" class="form-control" id="judul" name="judul" value="{{ $artikel->judul }}">
    </div>
    <div class="form-group">
      <label for="isi">Isi artikel</label>
      <textarea class="form-control" id="isi" name="isi" rows="3">{{ $artikel->isi }}</textarea>
    </div>
    <div class="form-group">
      <label for="tag">Tag artikel</label>
      <input type="text" class="form-control" id="tag" name="tag" value="{{ $artikel->tag }}">
    </div>
    <a href="/artikel" class="btn btn-warning">Kembali</a>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@endsection