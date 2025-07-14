@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow rounded-4">
                <div class="card-header bg-info text-white text-center fw-bold rounded-top-4">
                    Edit Pendaftaran Ekstrakurikuler
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger rounded-3">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.daftar_eskul.update', $daftar_Eskul) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="user_id" class="form-label">Nama Siswa</label>
                            <select name="user_id" id="user_id" class="form-control rounded-pill" required>
                                @foreach($user as $u)
                                    <option value="{{ $u->id }}" {{ $daftar_Eskul->user_id == $u->id ? 'selected' : '' }}>
                                        {{ $u->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" name="kelas" id="kelas" class="form-control rounded-pill"
                                   value="{{ old('kelas', $daftar_Eskul->kelas) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="eskul_id" class="form-label">Ekstrakurikuler</label>
                            <select name="eskul_id" id="eskul_id" class="form-control rounded-pill" required>
                                @foreach($eskul as $e)
                                    <option value="{{ $e->id }}" {{ $daftar_Eskul->eskul_id == $e->id ? 'selected' : '' }}>
                                        {{ $e->nama_eskul }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tahun_ajaran" class="form-label">Tahun Ajaran</label>
                            <select name="tahun_ajaran" id="tahun_ajaran" class="form-control rounded-pill" required>
                                @foreach(['2020/2021', '2021/2022', '2022/2023', '2023/2024', '2024/2025','2025/2026'] as $tahun)
                                    <option value="{{ $tahun }}" {{ $daftar_Eskul->tahun_ajaran == $tahun ? 'selected' : '' }}>
                                        {{ $tahun }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="no_telp" class="form-label">Nomor Telepon</label>
                            <input type="text" name="no_telp" id="no_telp" class="form-control rounded-pill"
                                   value="{{ old('no_telp', $daftar_Eskul->no_telp) }}">
                        </div>

                        <div class="mb-3">
                            <label for="alasan" class="form-label">Alasan</label>
                            <textarea name="alasan" id="alasan" rows="3" class="form-control rounded-4"
                                      required>{{ old('alasan', $daftar_Eskul->alasan) }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between pt-3">
                            <a href="{{ route('admin.daftar_eskul.index') }}" class="btn btn-secondary rounded-pill px-4">Batal</a>
                            <button type="submit" class="btn btn-primary rounded-pill px-4">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
