@extends('layouts.admin')
@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Ekstrakurikuler') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.eskul.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_eskul" class="form-label">Nama Ekstrakurikuler</label>
                            <input type="text" class="form-control" id="nama_eskul" name="nama_eskul" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama_pembina" class="form-label">Nama Pembina</label>
                            <input type="text" class="form-control" id="nama_pembina" name="nama_pembina" required>
                        </div>
                        <div class="mb-3">
                            <label for="kontak_pembina" class="form-label">Kontak Pembina</label>
                            <input type="text" class="form-control" id="kontak_pembina" name="kontak_pembina" placeholder="Nomor telepon Pembina">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Pembina">
                        </div>
                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                            
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
