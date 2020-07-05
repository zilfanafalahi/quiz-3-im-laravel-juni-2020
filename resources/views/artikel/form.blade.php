@extends('layouts.master')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Form Input Artikel</h1>

  <form action="/artikel" method="POST">
    @csrf
    <div class="form-group">
      <label for="judul">Judul artikel</label>
      <input type="text" class="form-control" id="judul" name="judul">
    </div>
    <div class="form-group">
      <label for="isi">Isi artikel</label>
      <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="tag">Tag artikel</label>
      <input type="text" class="form-control" id="tag" name="tag">
    </div>
    <a href="/artikel" class="btn btn-warning">Kembali</a>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection