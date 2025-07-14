@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow rounded-4">
                    <div class="card-header bg-info text-white text-center fw-bold rounded-top-4">
                        {{ __('Edit Jadwal Ekstrakurikuler') }}
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('admin.jadwal.update', $jadwal) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="eskul_id" class="form-label">Ekstrakurikuler</label>
                                <select class="form-select rounded-pill" id="eskul_id" name="eskul_id" required>
                                    <option value="">Pilih Ekstrakurikuler</option>
                                    @foreach ($eskuls as $eskul)
                                        <option value="{{ $eskul->id }}" {{ $jadwal->eskul_id == $eskul->id ? 'selected' : '' }}>
                                            {{ $eskul->nama_eskul }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="hari" class="form-label">Hari</label>
                                <input type="text" class="form-control rounded-pill" id="hari" name="hari" value="{{ $jadwal->hari }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="jam_mulai" class="form-label">Jam Mulai</label>
                                <input type="time" class="form-control rounded-pill" id="jam_mulai" name="jam_mulai" value="{{ $jadwal->jam_mulai }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="jam_selesai" class="form-label">Jam Selesai</label>
                                <input type="time" class="form-control rounded-pill" id="jam_selesai" name="jam_selesai" value="{{ $jadwal->jam_selesai }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
