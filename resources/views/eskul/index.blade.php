@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-4">Ekstrakurikuler</h1>
    <a href="{{ route('eskul.create') }}" class="btn btn-primary mb-3">Tambah Ekstrakurikuler</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-12">
        <!-- 5. card with background -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ekstrakurikuler</th>
                        <th>Nama Pembina</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eskuls as $eskul)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $eskul->nama_eskul }}</td>
                            <td>{{ $eskul->nama_pembina }}</td>
                            <td>
                                @if ($eskul->foto)
                                    <img src="{{ asset('storage/' . $eskul->foto) }}" alt="{{ $eskul->nama_eskul }}"
                                        class="img-thumbnail" width="100">
                                @endif
                            </td>
                            <td>{{ $eskul->deskripsi }}</td>
                            <td>
                                <a href="{{ route('eskul.edit', $eskul) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('eskul.destroy', $eskul) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
