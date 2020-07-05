@extends('layouts.master')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Detail Artikel</h1>

  <div class="card text-left mb-3">
    <div class="card-body">
      <h3><b>Judul : {{ $artikel->judul }}</b></h3>
      <p class="card-text">Slug : {{ $artikel->slug }}</p>
      <p class="card-text">{{ $artikel->isi }}</p>
      @foreach (explode(' ', $artikel->tag) as $tag)
        <button class="btn btn-success">{{ $tag }}</button>
      @endforeach
    </div>
  </div>
  <a href="/artikel" class="btn btn-warning">Kembali</a>
@endsection