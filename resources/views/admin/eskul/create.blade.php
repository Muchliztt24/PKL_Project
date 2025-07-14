@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow rounded-4">
                <div class="card-header bg-info text-white text-center fw-bold rounded-top-4">
                    Tambah Ekstrakurikuler
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
                    <form method="POST" action="{{ route('admin.eskul.store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="nama_eskul" class="form-label">Nama Ekstrakurikuler</label>
                            <input type="text" class="form-control rounded-pill" id="nama_eskul" name="nama_eskul" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama_pembina" class="form-label">Nama Pembina</label>
                            <input type="text" class="form-control rounded-pill" id="nama_pembina" name="nama_pembina" required>
                        </div>

                        <div class="mb-3">
                            <label for="kontak_pembina" class="form-label">Kontak Pembina</label>
                            <input type="text" class="form-control rounded-pill" id="kontak_pembina" name="kontak_pembina" placeholder="Nomor telepon Pembina">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control rounded-pill" id="alamat" name="alamat" placeholder="Alamat Pembina">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control rounded-pill" id="foto" name="foto">
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control rounded-4" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary rounded-pill px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
