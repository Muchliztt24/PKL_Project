@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Jadwal') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('jadwal.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="eskul_id" class="form-label">Ekstrakurikuler</label>
                            <select class="form-select" id="eskul_id" name="eskul_id" required>
                                <option value="">Pilih Ekstrakurikuler</option>
                                @foreach ($eskuls as $eskul)
                                    <option value="{{ $eskul->id }}">{{ $eskul->nama_eskul }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hari" class="form-label">Hari</label>
                            <input type="text" class="form-control" id="hari" name="hari" required>
                        </div>
                        <div class="mb-3">
                            <label for="jam_mulai" class="form-label">Jam Mulai</label>
                            <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
                        </div>
                        <div class="mb-3">
                            <label for="jam_selesai" class="form-label">Jam Selesai</label>
                            <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection