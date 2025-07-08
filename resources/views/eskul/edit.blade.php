@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Ekstrakurikuler') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('eskul.update', $eskul) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_eskul" class="form-label">Nama Ekstrakurikuler</label>
                            <input type="text" class="form-control" id="nama_eskul" name="nama_eskul" value="{{ $eskul->nama_eskul }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_pembina" class="form-label">Nama Pembina</label>
                            <input type="text" class="form-control" id="nama_pembina" name="nama_pembina" value="{{ $eskul->nama_pembina }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            @if ($eskul->foto)
                                <img src="{{ asset('storage/' . $eskul->foto) }}" alt="{{ $eskul->nama_eskul }}" class="img-thumbnail mt-2" width="100">
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $eskul->deskripsi }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection