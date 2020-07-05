@extends('layouts.master')

@section('content')
  <h1 class="h3 mb-4 text-gray-800">Artikel</h1>

  <a href="/artikel/create" class="btn btn-primary mb-3">Buat artikel baru!</a>
  <table class="table table-striped">
    <caption>List artikel</caption>
    <thead>
      <tr>
        <th class="col-1" scope="col">#</th>
        <th class="col-7" scope="col">Judul Artikel</th>
        <th class="col-4" scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($artikel as $key => $a)
        <tr>
        <th scope="row">{{ $key+1 }}</th>
          <td>{{ $a->judul }}</td>
          <td>
            <a href="/artikel/{{ $a->id }}" class="btn btn-success btn-sm">Detail artikel</a>
            <a href="/artikel/{{ $a->id }}/edit" class="btn btn-primary btn-sm">Edit artikel</a>
            <form action="/artikel/{{ $a->id }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Hapus artikel</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  @push('scripts')    
    <script>
      Swal.fire({
          title: 'Berhasil!',
          text: 'Memasangkan script sweet alert',
          icon: 'success',
          confirmButtonText: 'Cool'
      })
    </script>
  @endpush
@endsection